<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-12 09:16:21 --> 404 Page Not Found: /index
ERROR - 2017-06-12 09:22:40 --> Could not find the language line "Hi, My Store. welcome back!"
ERROR - 2017-06-12 09:23:10 --> 404 Page Not Found: /index
ERROR - 2017-06-12 09:23:36 --> 404 Page Not Found: Admin/update_attribute
ERROR - 2017-06-12 09:28:15 --> Could not find the language line "Attribute(s) has been added."
ERROR - 2017-06-12 09:32:33 --> Could not find the language line "Attribute has been deleted."
ERROR - 2017-06-12 09:50:09 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 60
ERROR - 2017-06-12 09:50:09 --> Severity: Notice --> Undefined property: stdClass::$parent_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 63
ERROR - 2017-06-12 09:50:09 --> Severity: Notice --> Undefined property: stdClass::$parent_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 63
ERROR - 2017-06-12 09:50:09 --> Severity: Notice --> Undefined property: stdClass::$parent_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 63
ERROR - 2017-06-12 09:50:48 --> Severity: Notice --> Undefined property: stdClass::$parent_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 63
ERROR - 2017-06-12 09:50:48 --> Severity: Notice --> Undefined property: stdClass::$parent_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 63
ERROR - 2017-06-12 09:50:48 --> Severity: Notice --> Undefined property: stdClass::$parent_id C:\UwAmp\www\dvee\application\views\admin\categories\category_insert_view.php 63
ERROR - 2017-06-12 10:00:24 --> Could not find the language line "Attribute(s) has been added."
ERROR - 2017-06-12 10:08:32 --> Could not find the language line "Attribute(s) has been added."
ERROR - 2017-06-12 10:08:32 --> Could not find the language line "Category has been added."
ERROR - 2017-06-12 10:11:54 --> Could not find the language line "Categories have been updated."
ERROR - 2017-06-12 10:14:35 --> Could not find the language line "Category has been deleted."
ERROR - 2017-06-12 10:15:10 --> Could not find the language line "Attribute(s) has been added."
ERROR - 2017-06-12 10:15:10 --> Could not find the language line "Category "bottoms" has been added."
ERROR - 2017-06-12 10:25:25 --> Could not find the language line "Category has been deleted."
ERROR - 2017-06-12 10:30:41 --> 404 Page Not Found: Migrate/down
ERROR - 2017-06-12 10:32:41 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:33:46 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE IF NOT EXISTS `users` (
					`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					`ip_address` varchar(45) NOT NULL,
					`username` varchar(100) NULL,
					`password` varchar(255) NOT NULL,
					`salt` varchar(255) DEFAULT NULL,
					`email` varchar(100) NOT NULL,
					`activation_code` varchar(40) DEFAULT NULL,
					`forgotten_password_code` varchar(40) DEFAULT NULL,
					`forgotten_password_time` int(11) unsigned DEFAULT NULL,
					`remember_code` varchar(40) DEFAULT NULL,
					`created_on` int(11) unsigned NOT NULL,
					`last_login` int(11) unsigned DEFAULT NULL,
					`active` tinyint(1) unsigned DEFAULT NULL,
					`avatar` varchar(220) DEFAULT NULL,
					`first_name` varchar(50) DEFAULT NULL,
					`last_name` varchar(50) DEFAULT NULL,
					`location_id` int(10) DEFAULT NULL,
					`phone` varchar(20) DEFAULT NULL,
					`postal` varchar(20) DEFAULT NULL,
					`address` varchar(20) DEFAULT NULL,
					PRIMARY KEY (`id`),
					CONSTRAINT `fk_users_locations` FOREIGN KEY (`location_id`) REFERENCES `locations` (`loc_id`) ON DELETE NO ACTION ON UPDATE CASCADE
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ERROR - 2017-06-12 10:36:24 --> Query error: Table 'cart.ci_sessions' doesn't exist - Invalid query: SELECT `data`
FROM `ci_sessions`
WHERE `id` = '26eac67a9a1a022c762f02f9b995da468dc6bb8f'
ERROR - 2017-06-12 10:42:16 --> Query error: Table 'cart.ci_sessions' doesn't exist - Invalid query: SELECT `data`
FROM `ci_sessions`
WHERE `id` = '26eac67a9a1a022c762f02f9b995da468dc6bb8f'
ERROR - 2017-06-12 10:42:27 --> Query error: Table 'cart.ci_sessions' doesn't exist - Invalid query: SELECT `data`
FROM `ci_sessions`
WHERE `id` = '26eac67a9a1a022c762f02f9b995da468dc6bb8f'
ERROR - 2017-06-12 10:50:26 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:51:24 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:51:34 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:52:15 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:52:55 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:55:24 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:55:57 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `users`
ERROR - 2017-06-12 10:58:59 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `users`
ERROR - 2017-06-12 10:59:29 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 10:59:49 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 11:00:30 --> Query error: Cannot add foreign key constraint - Invalid query: CREATE TABLE `users_groups` (
	`id` MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` MEDIUMINT(8) UNSIGNED NOT NULL,
	`group_id` MEDIUMINT(8) UNSIGNED NOT NULL,
	CONSTRAINT `fk_users_groups_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
	CONSTRAINT `fk_users_groups_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
	CONSTRAINT `pk_users_groups` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2017-06-12 11:51:10 --> Severity: Parsing Error --> syntax error, unexpected ''config_price_inc_tax'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\UwAmp\www\dvee\application\migrations\20170610020401_dvee.php 446
ERROR - 2017-06-12 11:52:06 --> Query error: Table 'groups' already exists - Invalid query: CREATE TABLE `groups` (
	`id` MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	`description` VARCHAR(100) NOT NULL,
	CONSTRAINT `pk_groups` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2017-06-12 11:52:39 --> Query error: Duplicate entry '1' for key 'PRIMARY' - Invalid query: INSERT INTO `groups` (`description`, `id`, `name`) VALUES ('Administrator','1','admin'), ('General User','2','members')
ERROR - 2017-06-12 11:53:04 --> Query error: Unknown column 'config_id' in 'field list' - Invalid query: INSERT INTO `users_groups` (`config_id`, `config_increment_order_number`, `config_quantity_limited_by_stock`, `config_increment_duplicate_items`, `config_auto_allocate_stock`, `config_weight_type`, `config_display_tax_prices`, `config_price_inc_tax`, `config_dynamic_reward_points`, `config_reward_point_multiplier`, `config_reward_voucher_multiplier`, `config_reward_voucher_ratio`, `config_reward_point_days_pending`, `config_reward_point_days_valid`, `config_reward_voucher_days_valid`) VALUES ('1', '1', '1', '1', '1', 'gram', '1', '1', '1', '10.0000', '0.0100', '250', '14', '365', '365')
ERROR - 2017-06-12 11:53:21 --> Query error: Duplicate entry '1' for key 'PRIMARY' - Invalid query: INSERT INTO `groups` (`description`, `id`, `name`) VALUES ('Administrator','1','admin'), ('General User','2','members')
ERROR - 2017-06-12 11:56:52 --> Query error: Table 'cart.currency' doesn't exist - Invalid query: SELECT `curr_name` AS `name`, `curr_exchange_rate` AS `exchange_rate`, `curr_symbol` AS `symbol`, `curr_symbol_suffix` AS `symbol_suffix`, `curr_thousand_separator` AS `thousand_separator`, `curr_decimal_separator` AS `decimal_separator`
FROM `currency`
WHERE `curr_default` = 1
 LIMIT 1
ERROR - 2017-06-12 12:16:48 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 12:17:46 --> Severity: Notice --> Array to string conversion C:\UwAmp\www\dvee\system\database\DB_query_builder.php 1523
ERROR - 2017-06-12 12:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 - Invalid query: INSERT INTO `currency` () VALUES ('.','2.0000','1','AUD','1','AU $',','), Array
ERROR - 2017-06-12 12:22:33 --> Severity: Notice --> Array to string conversion C:\UwAmp\www\dvee\system\database\DB_query_builder.php 1523
ERROR - 2017-06-12 12:22:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 - Invalid query: INSERT INTO `currency` () VALUES ('.','2.0000','1','AUD','1','AU $',','), Array
ERROR - 2017-06-12 12:24:19 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
ERROR - 2017-06-12 12:24:49 --> Severity: Notice --> Array to string conversion C:\UwAmp\www\dvee\system\database\DB_query_builder.php 1523
ERROR - 2017-06-12 12:24:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 - Invalid query: INSERT INTO `currency` () VALUES ('.','2.0000','1','AUD','1','AU $',','), Array
ERROR - 2017-06-12 18:53:15 --> Severity: Parsing Error --> syntax error, unexpected ''comment'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\UwAmp\www\dvee\application\migrations\20170610020401_dvee.php 628
ERROR - 2017-06-12 18:53:54 --> Severity: Parsing Error --> syntax error, unexpected ''order by'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\UwAmp\www\dvee\application\migrations\20170610020401_dvee.php 730
ERROR - 2017-06-12 18:54:16 --> Severity: Parsing Error --> syntax error, unexpected ''order by'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\UwAmp\www\dvee\application\migrations\20170610020401_dvee.php 730
ERROR - 2017-06-12 18:55:02 --> Query error: Unknown column 'curr_decimal_separator' in 'field list' - Invalid query: INSERT INTO `discounts` (`curr_decimal_separator`, `curr_default`, `curr_exchange_rate`, `curr_id`, `curr_name`, `curr_status`, `curr_symbol`, `curr_symbol_suffix`, `curr_thousand_separator`) VALUES ('.','0','2.0000','1','AUD','1','AU $','0',','), (',','0','1.1500','2','EUR','1','&euro','1','.'), ('.','1','1.0000','3','GBP','1','&pound','0',','), ('.','0','1.6000','4','USD','1','US $','0',',')
ERROR - 2017-06-12 18:55:18 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails - Invalid query: DROP TABLE IF EXISTS `groups`
