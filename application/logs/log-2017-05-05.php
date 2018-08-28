<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-05 08:51:50 --> Query error: Table 'cart.products' doesn't exist - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `products`.`item_category_id`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
JOIN `product_categories` ON `product_categories`.`id` = `products`.`item_category_id`
JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-05 08:52:00 --> Query error: Table 'cart.products' doesn't exist - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `products`.`item_category_id`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
JOIN `product_categories` ON `product_categories`.`id` = `products`.`item_category_id`
JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-05 08:52:51 --> Query error: Table 'cart.products' doesn't exist - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `products`.`item_category_id`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
JOIN `product_categories` ON `product_categories`.`id` = `products`.`item_category_id`
JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-05 08:53:08 --> Query error: Table 'cart.products' doesn't exist - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `products`.`item_category_id`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
JOIN `product_categories` ON `product_categories`.`id` = `products`.`item_category_id`
JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-05 08:53:58 --> Query error: Key column 'company_id' doesn't exist in table - Invalid query: CREATE TABLE IF NOT EXISTS `products` (
					`id` int(5) unsigned NOT NULL AUTO_INCREMENT,
					`item_category_id` smallint(5) unsigned NOT NULL,
					`name` varchar(50) NOT NULL,
					`description` text,
					`slug` varchar(50) NOT NULL,
					`tags` varchar(50) NULL,
					`unit` varchar(10) NULL,
					`price` double(16,2) NOT NULL,
					`thumb` varchar(50) NOT NULL,
					PRIMARY KEY (`id`),
					CONSTRAINT `fk_users` FOREIGN KEY (`company_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
					CONSTRAINT `fk_categories` FOREIGN KEY (`item_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
ERROR - 2017-05-05 08:54:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1' at line 7 - Invalid query: CREATE TABLE IF NOT EXISTS `product_category` (
					`id` smallint(5) NOT NULL AUTO_INCREMENT,
					`product_id` int(5) unsigned NOT NULL,
					`category_id` smallint(5) NOT NULL,
					PRIMARY KEY (`id`),
					CONSTRAINT `fk_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
ERROR - 2017-05-05 09:00:08 --> 404 Page Not Found: admin/categories
ERROR - 2017-05-05 09:07:17 --> Severity: Notice --> Undefined property: admin::$category_model C:\UwAmp\www\cart\application\controllers\admin.php 279
ERROR - 2017-05-05 09:07:17 --> Severity: Error --> Call to a member function get_categories() on null C:\UwAmp\www\cart\application\controllers\admin.php 279
ERROR - 2017-05-05 09:09:36 --> Severity: Notice --> Undefined property: admin::$category_model C:\UwAmp\www\cart\application\controllers\admin.php 279
ERROR - 2017-05-05 09:09:36 --> Severity: Error --> Call to a member function get_categories() on null C:\UwAmp\www\cart\application\controllers\admin.php 279
ERROR - 2017-05-05 09:11:14 --> Severity: Compile Error --> Cannot redeclare class CI C:\UwAmp\www\cart\application\third_party\MX\Base.php 57
ERROR - 2017-05-05 09:13:12 --> 404 Page Not Found: ../modules/admin/controllers/Admin/categories
ERROR - 2017-05-05 09:14:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/categories
ERROR - 2017-05-05 09:16:16 --> Severity: Notice --> Undefined variable: products_total C:\UwAmp\www\cart\application\views\admin\products\products_view.php 16
ERROR - 2017-05-05 09:16:16 --> Severity: Notice --> Undefined variable: products C:\UwAmp\www\cart\application\views\admin\products\products_view.php 35
ERROR - 2017-05-05 09:21:45 --> Severity: Parsing Error --> syntax error, unexpected '0' (T_LNUMBER), expecting ')' C:\UwAmp\www\cart\application\views\admin\categories\categories_view.php 5
ERROR - 2017-05-05 09:22:47 --> Severity: Parsing Error --> syntax error, unexpected '0' (T_LNUMBER), expecting ')' C:\UwAmp\www\cart\application\views\admin\categories\categories_view.php 5
ERROR - 2017-05-05 09:23:01 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:24:08 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:24:11 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:25:09 --> 404 Page Not Found: Admin/products
ERROR - 2017-05-05 09:27:31 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:27:53 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:27:55 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:28:54 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:29:01 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:44:00 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:44:08 --> 404 Page Not Found: /index
ERROR - 2017-05-05 09:44:57 --> 404 Page Not Found: Admin/add_category
ERROR - 2017-05-05 09:46:55 --> Severity: Notice --> Undefined property: Admin::$category_model C:\UwAmp\www\cart\application\controllers\Admin.php 315
ERROR - 2017-05-05 09:46:55 --> Severity: Error --> Call to a member function get_categories() on null C:\UwAmp\www\cart\application\controllers\Admin.php 315
ERROR - 2017-05-05 09:47:32 --> Severity: Notice --> Undefined property: Admin::$category_model C:\UwAmp\www\cart\application\controllers\Admin.php 315
ERROR - 2017-05-05 09:47:32 --> Severity: Error --> Call to a member function get_categories() on null C:\UwAmp\www\cart\application\controllers\Admin.php 315
ERROR - 2017-05-05 16:13:47 --> Severity: Notice --> Undefined property: Admin::$form_validation C:\UwAmp\www\cart\application\controllers\Admin.php 294
ERROR - 2017-05-05 16:13:47 --> Severity: Error --> Call to a member function set_error_delimiters() on null C:\UwAmp\www\cart\application\controllers\Admin.php 294
ERROR - 2017-05-05 16:14:46 --> Severity: Notice --> Undefined property: Admin::$form_validation C:\UwAmp\www\cart\application\controllers\Admin.php 294
ERROR - 2017-05-05 16:14:46 --> Severity: Error --> Call to a member function set_error_delimiters() on null C:\UwAmp\www\cart\application\controllers\Admin.php 294
ERROR - 2017-05-05 16:16:33 --> 404 Page Not Found: Admin/products
ERROR - 2017-05-05 16:17:18 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:17:20 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:41:12 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:41:13 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:42:11 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:42:11 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:42:18 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:42:19 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:47:18 --> 404 Page Not Found: Admin/products
ERROR - 2017-05-05 16:47:46 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:47:47 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:48:34 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:48:35 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:48:53 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:48:54 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:49:15 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:49:16 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:49:42 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:49:43 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:50:41 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:50:42 --> 404 Page Not Found: /index
ERROR - 2017-05-05 16:52:46 --> Query error: Table 'cart.product_category' doesn't exist - Invalid query: DELETE FROM `product_category`
WHERE `category_id` = '3'
ERROR - 2017-05-05 17:21:49 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:21:50 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:23:02 --> 404 Page Not Found: Admin/products
ERROR - 2017-05-05 17:23:35 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:23:35 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:23:48 --> 404 Page Not Found: Admin/products
ERROR - 2017-05-05 17:23:52 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:17 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:18 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:22 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:23 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:29 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:30 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:33 --> Severity: Warning --> Attempt to assign property of non-object C:\UwAmp\www\cart\application\models\Category_model.php 500
ERROR - 2017-05-05 17:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
AND `category_id` = 'edit'' at line 3 - Invalid query: SELECT *
FROM `product_category_attributes`
WHERE `category_id` IN()
AND `category_id` = 'edit'
ERROR - 2017-05-05 17:24:57 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:24:58 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:26:27 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:26:28 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:26:31 --> Severity: Notice --> Undefined property: Admin::$category_model C:\UwAmp\www\cart\application\controllers\Admin.php 350
ERROR - 2017-05-05 17:26:31 --> Severity: Error --> Call to a member function get_categories() on null C:\UwAmp\www\cart\application\controllers\Admin.php 350
ERROR - 2017-05-05 17:33:24 --> Severity: Notice --> Use of undefined constant name - assumed 'name' C:\UwAmp\www\cart\application\views\admin\categories\category_edit_view.php 33
ERROR - 2017-05-05 17:40:40 --> 404 Page Not Found: Admin/products
ERROR - 2017-05-05 17:41:02 --> 404 Page Not Found: /index
ERROR - 2017-05-05 17:41:06 --> 404 Page Not Found: /index
