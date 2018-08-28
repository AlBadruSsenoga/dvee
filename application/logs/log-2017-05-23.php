<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-23 07:37:52 --> 404 Page Not Found: /index
ERROR - 2017-05-23 07:38:00 --> 404 Page Not Found: Admin/settings
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:02 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:39:03 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 07:47:17 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `users_addresses` (
					`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					`user_id` int(11) unsigned NOT NULL,
					`address_type_id` tinyint(5) unsigned NOT NULL,
					`name` varchar(40) NOT NULL,
					`company` varchar(40) NOT NULL,
					`country` varchar(40) NOT NULL,
					`state` varchar(40) NOT NULL,
					`city` varchar(40) NOT NULL,
					`zip` varchar(40) NOT NULL,
					`line_1` varchar(40) NOT NULL,
					`line_2` varchar(40) NOT NULL,
					PRIMARY KEY (`id`),
					CONSTRAINT `fk_users_addresses` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
					CONSTRAINT `fk_users_address_types` FOREIGN KEY (`address_type_id`) REFERENCES `user_address_types` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2017-05-23 07:57:42 --> Query error: Can't write; duplicate key in table 'user_address_types' - Invalid query: CREATE TABLE IF NOT EXISTS `user_address_types` (
					`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					`user_id` int(11) unsigned NOT NULL,
					`address_id` int(11) unsigned NOT NULL,
					`address_type_id` tinyint(5) unsigned NOT NULL,
					PRIMARY KEY (`id`),
					CONSTRAINT `fk_addresses_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
					CONSTRAINT `fk_users_addresses` FOREIGN KEY (`address_id`) REFERENCES `users_addresses` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
					CONSTRAINT `fk_users_address_types` FOREIGN KEY (`address_type_id`) REFERENCES `address_types` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2017-05-23 16:14:45 --> Severity: Notice --> Undefined index: pagination_limit C:\UwAmp\www\cart\application\libraries\Products.php 34
ERROR - 2017-05-23 16:14:45 --> Severity: Warning --> Division by zero C:\UwAmp\www\cart\application\libraries\Products.php 96
ERROR - 2017-05-23 16:14:47 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:47 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:14:48 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-23 16:15:59 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
