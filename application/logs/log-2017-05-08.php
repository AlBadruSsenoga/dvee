<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-08 06:50:14 --> Severity: Notice --> Undefined variable: item_id C:\UwAmp\www\cart\application\controllers\Admin.php 250
ERROR - 2017-05-08 06:50:14 --> Severity: Notice --> Undefined offset: 0 C:\UwAmp\www\cart\application\controllers\Admin.php 252
ERROR - 2017-05-08 06:50:14 --> Severity: Notice --> Undefined variable: item_id C:\UwAmp\www\cart\application\controllers\Admin.php 255
ERROR - 2017-05-08 06:57:02 --> Severity: Notice --> Undefined variable: item_id C:\UwAmp\www\cart\application\controllers\Admin.php 255
ERROR - 2017-05-08 06:57:32 --> 404 Page Not Found: /index
ERROR - 2017-05-08 06:57:40 --> Severity: Notice --> Undefined variable: active C:\UwAmp\www\cart\application\views\demo\admin_examples\items\items_sub_header.php 2
ERROR - 2017-05-08 06:57:40 --> Severity: Notice --> Undefined variable: active C:\UwAmp\www\cart\application\views\demo\admin_examples\items\items_sub_header.php 5
ERROR - 2017-05-08 06:58:18 --> 404 Page Not Found: /index
ERROR - 2017-05-08 06:58:27 --> Severity: Notice --> Undefined variable: active C:\UwAmp\www\cart\application\views\demo\admin_examples\items\items_sub_header.php 2
ERROR - 2017-05-08 06:58:27 --> Severity: Notice --> Undefined variable: active C:\UwAmp\www\cart\application\views\demo\admin_examples\items\items_sub_header.php 5
ERROR - 2017-05-08 06:58:37 --> Severity: Notice --> Undefined variable: active C:\UwAmp\www\cart\application\views\demo\admin_examples\items\items_sub_header.php 2
ERROR - 2017-05-08 06:58:37 --> Severity: Notice --> Undefined variable: active C:\UwAmp\www\cart\application\views\demo\admin_examples\items\items_sub_header.php 5
ERROR - 2017-05-08 07:00:26 --> Severity: Notice --> Undefined property: stdClass::$thumbnail C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 17
ERROR - 2017-05-08 07:00:51 --> Severity: Notice --> Undefined property: stdClass::$thumbnail C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 17
ERROR - 2017-05-08 07:17:34 --> 404 Page Not Found: /index
ERROR - 2017-05-08 07:17:36 --> 404 Page Not Found: /index
ERROR - 2017-05-08 07:20:16 --> 404 Page Not Found: /index
ERROR - 2017-05-08 07:20:17 --> 404 Page Not Found: /index
ERROR - 2017-05-08 07:51:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Product_model.php 469
ERROR - 2017-05-08 07:51:49 --> You did not select a file to upload.
ERROR - 2017-05-08 07:51:49 --> Could not find the language line "Item has been updated."
ERROR - 2017-05-08 07:51:49 --> Could not find the language line "Item has been updated."
ERROR - 2017-05-08 18:44:02 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 18:52:17 --> Query error: Unknown column 'products.item_category_id' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `products`.`item_category_id`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN `product_categories` ON `product_categories`.`id` = `products`.`item_category_id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 18:53:04 --> Query error: Unknown column 'products.item_category_id' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `products`.`item_category_id`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN `product_categories` ON `product_categories`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 18:53:54 --> Query error: Unknown column 'product_categories.product_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN `product_categories` ON `product_categories`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 18:54:08 --> Query error: Table 'cart.product_category' doesn't exist - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN `product_category` ON `product_category`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 18:54:38 --> 404 Page Not Found: /index
ERROR - 2017-05-08 18:54:53 --> Query error: Unknown column 'product_categories.name' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN `product_category` ON `product_category`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 18:54:57 --> Query error: Unknown column 'product_categories.name' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_categories`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN `product_category` ON `product_category`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 18:55:07 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 18:55:07 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 18:55:07 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 19:53:56 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 19:53:57 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 19:54:13 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 19:54:13 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:07:52 --> Query error: Unknown column 'product.id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
				WHERE product_category.product_id = product.id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:08:02 --> Query error: Unknown column 'products.id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
				WHERE product_category.product_id = products.id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:08:28 --> Query error: Unknown column 'inner_1.product_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:08:45 --> Query error: Unknown column 'inner_1.product_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:08:48 --> Query error: Unknown column 'inner_1.product_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:08:50 --> Query error: Unknown column 'products.id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
				WHERE product_category.product_id = products.id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:09:56 --> Query error: Unknown column 'product_categories.category_id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
				WHERE product_category.id = product_categories.category_id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:10:13 --> Query error: Unknown column 'product_categories.category_id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.category_id = (
				SELECT product_category.id from product_category
				WHERE product_category.id = product_categories.category_id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:10:35 --> Query error: Unknown column 'product_category.category_id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_category.category_id = (
				SELECT product_category.id from product_category
				WHERE product_category.id = product_categories.category_id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:11:46 --> Query error: Unknown column 'product_categories.category_id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.id from product_category
				WHERE product_category.id = product_categories.category_id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:12:21 --> Query error: Unknown column 'product_categories.category_id' in 'where clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.category_id from product_category
				WHERE product_category.id = product_categories.category_id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:14:02 --> Query error: Unknown column 'inner_1.product_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.category_id FROM product_category
				WHERE product_category.category_id = product_categories.id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'inner_1
		) ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` O' at line 8 - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.category_id FROM product_category
				WHERE product_category.category_id = product_categories.id
			) inner_1
		) ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:17:05 --> Query error: Unknown column 'product_category.product_id' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category, product_category.product_id FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.category_id, product_category.product_id FROM product_category
				WHERE product_category.category_id = product_categories.id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:17:16 --> Query error: Unknown column 'product_id' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT name AS category, product_id FROM product_categories
			WHERE product_categories.id = (
				SELECT product_category.category_id, product_category.product_id FROM product_category
				WHERE product_category.category_id = product_categories.id
			)
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:22:56 --> Query error: Every derived table must have its own alias - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
				GROUP BY company_id
			)
			ON
			product_category.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:23:23 --> Query error: Every derived table must have its own alias - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories cats
				GROUP BY company_id
			)
			ON
			product_category.category_id = cats.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:23:46 --> Query error: Every derived table must have its own alias - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category cat
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories cats
				GROUP BY company_id
			)
			ON
			cat.category_id = cats.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:25:31 --> Query error: Unknown column 'company_id' in 'group statement' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
				GROUP BY company_id
			)
		AS T
			ON
			product_category.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:25:58 --> Query error: Unknown column 'company_id' in 'group statement' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
				GROUP BY company_id
			)
			AS CAT
			ON
			CAT.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:26:18 --> Query error: Unknown column 'product_id' in 'group statement' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
				GROUP BY product_id
			)
			AS CAT
			ON
			CAT.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:26:28 --> Query error: Unknown column 'CAT.category_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
			)
			AS CAT
			ON
			CAT.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:26:43 --> Query error: Unknown column 'product_categories.id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
			)
			AS CAT
			ON
			product_category.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:26:59 --> Query error: Unknown column 'CAT.id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT name AS category  
				FROM product_categories
			)
			AS CAT
			ON
			product_category.category_id = CAT.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:27:14 --> Query error: Unknown column 'product_categories.id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT id, name AS category  
				FROM product_categories
			)
			AS CAT
			ON
			product_category.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:27:27 --> Query error: Unknown column 'product_categories.id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, name AS category  
				FROM product_categories
			)
			AS CAT
			ON
			product_category.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:28:27 --> Query error: Unknown column 'product_categories.id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = product_categories.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:28:36 --> Query error: Unknown column 'inner_1.product_id' in 'on clause' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `item_stock`.`stock_quantity` AS `quantity`
FROM `products`
LEFT JOIN (
			SELECT category FROM product_category
			LEFT JOIN
			(
				SELECT product_categories.id, product_categories.name AS category  
				FROM product_categories
			) inner_2
			ON
			product_category.category_id = inner_2.id
		) inner_1 ON `inner_1`.`product_id` = `products`.`id`
LEFT JOIN `item_stock` ON `item_stock`.`stock_item_fk` = `products`.`id`
ERROR - 2017-05-08 20:29:07 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 20:29:07 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:29:26 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 20:29:26 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:30:03 --> Query error: Unknown column 'product_category.name' in 'field list' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_category`.`name` AS `category`, `item_stock`.`stock_quantity` AS `quantity`
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
ERROR - 2017-05-08 20:30:31 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 20:30:31 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:30:48 --> Query error: Unknown table 'product_categories' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_categories`.*, `item_stock`.`stock_quantity` AS `quantity`
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
ERROR - 2017-05-08 20:30:57 --> Query error: Unknown table 'product_category' - Invalid query: SELECT `products`.`id`, `products`.`name`, `products`.`slug`, `products`.`description`, `products`.`price`, `products`.`thumb`, `product_category`.*, `item_stock`.`stock_quantity` AS `quantity`
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
ERROR - 2017-05-08 20:31:12 --> Severity: Notice --> Undefined property: stdClass::$category C:\UwAmp\www\cart\application\views\admin\products\products_view.php 98
ERROR - 2017-05-08 20:31:12 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:32:20 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:32:35 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:38:35 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 20:38:44 --> 404 Page Not Found: Admin/assets
ERROR - 2017-05-08 21:11:43 --> 404 Page Not Found: /index
ERROR - 2017-05-08 21:11:53 --> Severity: Notice --> Undefined property: stdClass::$item_category_id C:\UwAmp\www\cart\application\models\Product_model.php 277
ERROR - 2017-05-08 21:11:53 --> Severity: Notice --> Undefined property: stdClass::$item_category_id C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 112
ERROR - 2017-05-08 21:11:53 --> Severity: Notice --> Trying to get property of non-object C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 153
ERROR - 2017-05-08 21:11:53 --> Severity: Notice --> Undefined property: stdClass::$attributes C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 158
ERROR - 2017-05-08 21:11:53 --> Severity: Notice --> Undefined variable: item_data C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 284
ERROR - 2017-05-08 21:13:25 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) C:\UwAmp\www\cart\application\models\Product_model.php 281
ERROR - 2017-05-08 21:16:40 --> Severity: Error --> Call to undefined method CI_DB_mysqli_result::select() C:\UwAmp\www\cart\application\models\Product_model.php 280
ERROR - 2017-05-08 21:17:08 --> Severity: Notice --> Undefined property: stdClass::$item_category_id C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 112
ERROR - 2017-05-08 21:17:08 --> Severity: Notice --> Undefined variable: item_data C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 284
ERROR - 2017-05-08 21:17:40 --> Severity: Notice --> Undefined variable: item_data C:\UwAmp\www\cart\application\views\admin\products\product_edit_view.php 284
ERROR - 2017-05-08 21:23:22 --> 404 Page Not Found: /index
ERROR - 2017-05-08 21:23:26 --> 404 Page Not Found: /index
ERROR - 2017-05-08 21:27:04 --> Severity: Notice --> Undefined property: stdClass::$item_category_id C:\UwAmp\www\cart\application\models\Product_model.php 421
ERROR - 2017-05-08 21:27:04 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: UPDATE `item_stock` SET `category_id` = '1'
WHERE `id` = '2'
ERROR - 2017-05-08 21:27:57 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: UPDATE `item_stock` SET `category_id` = '1'
WHERE `id` = '2'
ERROR - 2017-05-08 21:28:08 --> Query error: Unknown column 'product_id' in 'where clause' - Invalid query: UPDATE `item_stock` SET `category_id` = '1'
WHERE `product_id` = '2'
ERROR - 2017-05-08 21:28:57 --> Query error: Unknown column 'product_id' in 'where clause' - Invalid query: UPDATE `products` SET `name` = 'a simple product', `slug` = 'a-simple-product', `tags` = 'a-simple-product', `price` = '12.00', `weight` = '12.00', `description` = 'Eveniet unde illo minima sint ut et nobis. Laudantium nihil quas quidem fugit sequi vero. Animi nobis qui nostrum quia magni vel provident. Tempora ea qui pariatur ut quia labore.Eveniet unde illo minima sint ut et nobis. Laudantium nihil quas quidem fugit sequi vero. Animi nobis qui nostrum quia magni vel provident. Tempora ea qui pariatur ut quia labore.Eveniet unde illo minima sint ut et nobis. Laudantium nihil quas quidem fugit sequi vero. Animi nobis qui nostrum quia magni vel provident. Tempora ea qui pariatur ut quia labore.Eveniet unde illo minima sint ut et nobis. Laudantium nihil quas quidem fugit sequi vero. Animi nobis qui nostrum quia magni vel provident. Tempora ea qui pariatur ut quia labore.'
WHERE `product_id` = '2'
ERROR - 2017-05-08 21:29:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Product_model.php 486
ERROR - 2017-05-08 21:29:19 --> You did not select a file to upload.
ERROR - 2017-05-08 21:29:19 --> Could not find the language line "Item could not be updated."
ERROR - 2017-05-08 21:29:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1006
ERROR - 2017-05-08 21:29:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1020
ERROR - 2017-05-08 21:29:19 --> Could not find the language line "Item could not be updated."
ERROR - 2017-05-08 21:29:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Product_model.php 486
ERROR - 2017-05-08 21:29:55 --> You did not select a file to upload.
ERROR - 2017-05-08 21:29:55 --> Could not find the language line "Item could not be updated."
ERROR - 2017-05-08 21:29:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1006
ERROR - 2017-05-08 21:29:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1020
ERROR - 2017-05-08 21:29:55 --> Could not find the language line "Item could not be updated."
ERROR - 2017-05-08 21:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Product_model.php 486
ERROR - 2017-05-08 21:30:53 --> You did not select a file to upload.
ERROR - 2017-05-08 21:30:53 --> Could not find the language line "Item category has changed, You may want to update attributes"
ERROR - 2017-05-08 21:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1006
ERROR - 2017-05-08 21:30:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1020
ERROR - 2017-05-08 21:30:53 --> Could not find the language line "Item category has changed, You may want to update attributes"
ERROR - 2017-05-08 21:31:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Product_model.php 486
ERROR - 2017-05-08 21:31:01 --> You did not select a file to upload.
ERROR - 2017-05-08 21:31:01 --> Could not find the language line "Item category has changed, You may want to update attributes"
ERROR - 2017-05-08 21:31:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1006
ERROR - 2017-05-08 21:31:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\UwAmp\www\cart\application\models\Demo_cart_admin_model.php 1020
ERROR - 2017-05-08 21:31:01 --> Could not find the language line "Item category has changed, You may want to update attributes"
