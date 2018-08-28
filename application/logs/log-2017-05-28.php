<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-28 16:39:25 --> Could not find the language line "There are no items in the cart that can currently be shipped to the current shipping location."
ERROR - 2017-05-28 16:39:51 --> Severity: Notice --> Undefined index: surveyquestion C:\UwAmp\www\cart\application\libraries\paypal\Paypal_pro.php 1385
ERROR - 2017-05-28 16:40:04 --> Unable to load the requested class: Products
ERROR - 2017-05-28 16:43:32 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-28 16:43:32 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-28 16:44:09 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-28 16:46:05 --> 404 Page Not Found: /index
ERROR - 2017-05-28 16:46:05 --> 404 Page Not Found: /index
ERROR - 2017-05-28 16:46:09 --> 404 Page Not Found: /index
ERROR - 2017-05-28 16:46:09 --> 404 Page Not Found: /index
ERROR - 2017-05-28 16:46:11 --> 404 Page Not Found: /index
ERROR - 2017-05-28 16:46:11 --> 404 Page Not Found: /index
ERROR - 2017-05-28 16:47:39 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-28 16:47:39 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-28 16:47:41 --> Severity: Parsing Error --> syntax error, unexpected '$product' (T_VARIABLE), expecting ',' or ';' C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:47:53 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:47:53 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:47:53 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:47:53 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:47:53 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:48:42 --> Query error: Unknown column 'inner_1.id' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`price`, `products`.`thumb`, `inner_1`.`category`, `inner_1`.`id` AS `category_id`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
 LIMIT 36
ERROR - 2017-05-28 16:48:51 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT id, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:49:07 --> Query error: Unknown column 'product_category.category' in 'field list' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT product_category.id, product_category.category, product_category.product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:49:08 --> Query error: Unknown column 'product_category.category' in 'field list' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT product_category.id, product_category.category, product_category.product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:49:38 --> Query error: Unknown column 'inner_1.id' in 'field list' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT inner_1.id, inner_1.category, inner_1.product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:49:51 --> Query error: Unknown column 'inner_2.product_id' in 'field list' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT inner_2.id, inner_2.category, inner_2.product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:50:28 --> Query error: Unknown column 'product_categories.id' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`price`, `products`.`thumb`, `inner_1`.`category`, `product_categories`.`id` AS `category_id`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT product_category.id, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
 LIMIT 36
ERROR - 2017-05-28 16:51:29 --> Query error: Column 'category_id' in field list is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT category_id, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id AS category_id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:51:57 --> Query error: Column 'category_id' in field list is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT category_id, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id AS category_id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:51:58 --> Query error: Column 'category_id' in field list is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT category_id, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id AS category_id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:52:50 --> Query error: Unknown column 'product_category.category' in 'field list' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT product_category.category_id, product_category.category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id AS category_id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:53:14 --> Query error: Unknown column 'inner_2.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT categoryID, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id AS categoryID, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:53:53 --> Query error: Column 'category_id' in field list is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `products`
LEFT JOIN (
			SELECT category_id, category, product_id FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id AS category_id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-28 16:54:19 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:19 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:19 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:19 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:19 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:50 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:50 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:50 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:50 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 16:54:50 --> Severity: Notice --> Undefined property: stdClass::$category_id C:\UwAmp\www\cart\application\views\admin\items\items_view.php 94
ERROR - 2017-05-28 17:12:48 --> Severity: Error --> Call to undefined method Product_model::update_defaults() C:\UwAmp\www\cart\application\controllers\Admin.php 686
