<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-27 15:22:33 --> Query error: Table 'cart.shipping_options' doesn't exist - Invalid query: 
		SELECT  
			(SELECT ship_rate_id
				FROM shipping_rates 
				WHERE (ship_rate_ship_fk = ship_id) AND 
					(ship_rate_min_value <= 0 AND 
						(ship_rate_max_value > 0 OR ship_rate_max_value = 0)) AND 
					(ship_rate_min_wgt <= (0 + ship_rate_tare_wgt) AND 
						(ship_rate_max_wgt > (0 + ship_rate_tare_wgt) OR
						ship_rate_max_wgt = 0)) AND 
					(ship_rate_status = '1')
				ORDER BY ship_rate_max_wgt, ship_rate_max_value
				LIMIT 1
			) AS alias_ship_rate_id,
			ship_id, ship_name, ship_description, 
			ship_location_fk, ship_inc_sub_locations, ship_tax_rate,
			(SELECT ship_rate_value 
				FROM shipping_rates 
				WHERE ship_rate_id = alias_ship_rate_id
			) AS ship_rate_value
		FROM shipping_options
		WHERE ((ship_location_fk = '0' AND ship_zone_fk = '0') OR ship_location_fk = '1') AND ship_status = '1'
		HAVING alias_ship_rate_id > 0 ORDER BY ship_default DESC, ship_location_fk DESC, ship_zone_fk DESC
ERROR - 2018-08-27 15:22:34 --> Severity: Error --> Call to a member function num_rows() on boolean E:\ProgramInstalled\wamp64\www\dvee\application\models\Flexi_cart_model.php 1637
ERROR - 2018-08-27 15:28:29 --> Could not find the language line "You cannot log in here"
ERROR - 2018-08-27 15:29:32 --> Could not find the language line "Hi, ignatius. welcome back!"
