<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-28 09:34:54 --> Could not find the language line "Account was successfully created"
ERROR - 2018-08-28 09:35:21 --> Could not find the language line "Hi, Badru. welcome back!"
ERROR - 2018-08-28 09:39:23 --> Could not find the language line "Hi, My Store. welcome back!"
ERROR - 2018-08-28 09:40:00 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:40:00 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:40:00 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:40:03 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:41:05 --> Query error: Unknown column 'assets' in 'where clause' - Invalid query: SELECT `ord_det_id`, `ord_det_reward_points`, `ord_det_quantity`, `ord_det_quantity_shipped`, `ord_det_quantity_cancelled`, `ord_date`, `ord_det_shipped_date`, `ord_status_cancelled`, SUM(rew_convert_points) AS rew_convert_points
FROM `order_summary`
JOIN `order_details` ON `ord_order_number` = `ord_det_order_number_fk`
LEFT JOIN `reward_points_converted` ON `rew_convert_ord_detail_fk` = `ord_det_id`
JOIN `order_status` ON `ord_status` = `ord_status_id`
WHERE `assets` IS NULL
GROUP BY `ord_det_id`
ORDER BY `ord_date`
ERROR - 2018-08-28 09:41:05 --> Severity: Error --> Call to a member function num_rows() on boolean E:\ProgramInstalled\wamp64\www\dvee\application\models\Flexi_cart_admin_model.php 1011
ERROR - 2018-08-28 09:41:06 --> Query error: Unknown column 'assets' in 'where clause' - Invalid query: SELECT `ord_det_id`, `ord_det_reward_points`, `ord_det_quantity`, `ord_det_quantity_shipped`, `ord_det_quantity_cancelled`, `ord_date`, `ord_det_shipped_date`, `ord_status_cancelled`, SUM(rew_convert_points) AS rew_convert_points
FROM `order_summary`
JOIN `order_details` ON `ord_order_number` = `ord_det_order_number_fk`
LEFT JOIN `reward_points_converted` ON `rew_convert_ord_detail_fk` = `ord_det_id`
JOIN `order_status` ON `ord_status` = `ord_status_id`
WHERE `assets` IS NULL
GROUP BY `ord_det_id`
ORDER BY `ord_date`
ERROR - 2018-08-28 09:41:06 --> Severity: Error --> Call to a member function num_rows() on boolean E:\ProgramInstalled\wamp64\www\dvee\application\models\Flexi_cart_admin_model.php 1011
ERROR - 2018-08-28 09:41:32 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:41:32 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:41:32 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:43:14 --> Could not find the language line "User has been added"
ERROR - 2018-08-28 09:43:15 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:43:16 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:43:16 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 09:47:53 --> Severity: Error --> Call to a member function set_error_message() on null E:\ProgramInstalled\wamp64\www\dvee\application\controllers\Admin.php 77
ERROR - 2018-08-28 09:50:21 --> Severity: Error --> Call to a member function set_error_message() on null E:\ProgramInstalled\wamp64\www\dvee\application\controllers\Admin.php 77
ERROR - 2018-08-28 09:50:49 --> Could not find the language line "Hi, My Store. welcome back!"
ERROR - 2018-08-28 12:39:58 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:40:15 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:40:31 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:40:44 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:41:18 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:41:30 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:41:59 --> Could not find the language line "Hi, Store Keeper1 firstname. welcome back!"
ERROR - 2018-08-28 12:44:55 --> Could not find the language line "You cannot log in here"
ERROR - 2018-08-28 12:45:03 --> Could not find the language line "You cannot log in here"
ERROR - 2018-08-28 12:45:59 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:46:13 --> Could not find the language line "<span>Incorrect Login</span>"
ERROR - 2018-08-28 12:49:14 --> Could not find the language line "You cannot log in here"
ERROR - 2018-08-28 12:52:12 --> Could not find the language line "Hi, My Store. welcome back!"
ERROR - 2018-08-28 12:52:23 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 12:52:23 --> 404 Page Not Found: Admin/assets
ERROR - 2018-08-28 12:52:23 --> 404 Page Not Found: Admin/assets
