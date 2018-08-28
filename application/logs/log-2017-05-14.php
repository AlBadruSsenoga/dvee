<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-14 17:16:00 --> 404 Page Not Found: Admin/tools
ERROR - 2017-05-14 17:17:47 --> 404 Page Not Found: Admin/banners
ERROR - 2017-05-14 17:20:16 --> Severity: Compile Error --> Cannot redeclare Admin::insert_page() C:\UwAmp\www\cart\application\controllers\Admin.php 2024
ERROR - 2017-05-14 17:22:50 --> Severity: Notice --> Undefined variable: banners C:\UwAmp\www\cart\application\views\admin\banners\banners_view.php 16
ERROR - 2017-05-14 17:22:50 --> Severity: Notice --> Undefined variable: banners C:\UwAmp\www\cart\application\views\admin\banners\banners_view.php 40
ERROR - 2017-05-14 17:22:59 --> Severity: Notice --> Undefined variable: banners C:\UwAmp\www\cart\application\views\admin\banners\banners_view.php 16
ERROR - 2017-05-14 17:22:59 --> Severity: Notice --> Undefined variable: banners C:\UwAmp\www\cart\application\views\admin\banners\banners_view.php 40
ERROR - 2017-05-14 17:23:10 --> Severity: Notice --> Undefined variable: banners C:\UwAmp\www\cart\application\views\admin\banners\banners_view.php 16
ERROR - 2017-05-14 17:23:10 --> Severity: Notice --> Undefined variable: banners C:\UwAmp\www\cart\application\views\admin\banners\banners_view.php 40
ERROR - 2017-05-14 17:24:19 --> Unable to load the requested class: Store
ERROR - 2017-05-14 17:24:29 --> Query error: Table 'cart.banners' doesn't exist - Invalid query: SELECT *
FROM `banners`
ORDER BY `id` DESC
ERROR - 2017-05-14 17:25:22 --> Severity: error --> Exception: Unable to locate the model you have specified: Store_model C:\UwAmp\www\cart\system\core\Loader.php 344
ERROR - 2017-05-14 17:27:55 --> Severity: error --> Exception: Unable to locate the model you have specified: Store_model C:\UwAmp\www\cart\system\core\Loader.php 344
ERROR - 2017-05-14 17:28:31 --> Query error: Table 'cart.banners' doesn't exist - Invalid query: SELECT *
FROM `banners`
ORDER BY `id` DESC
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:32:29 --> Severity: Notice --> Undefined index: ship_id C:\UwAmp\www\cart\application\views\demo\admin_examples\config\defaults_update_view.php 71
ERROR - 2017-05-14 17:34:01 --> Query error: Table 'cart.banners' doesn't exist - Invalid query: SELECT *
FROM `banners`
ORDER BY `id` DESC
ERROR - 2017-05-14 17:34:52 --> Query error: Invalid default value for 'start_date' - Invalid query: CREATE TABLE IF NOT EXISTS `banners` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(50) NOT NULL,
					`url` varchar(50) NOT NULL,
					`image` varchar(100) DEFAULT NULL,
					`caption` varchar(40) DEFAULT NULL,
					`html` text,
					`start_date` date NOT NULL DEFAULT CURRENT_TIMESTAMP,
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
ERROR - 2017-05-14 17:35:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NOW,
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM ' at line 8 - Invalid query: CREATE TABLE IF NOT EXISTS `banners` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(50) NOT NULL,
					`url` varchar(50) NOT NULL,
					`image` varchar(100) DEFAULT NULL,
					`caption` varchar(40) DEFAULT NULL,
					`html` text,
					`start_date` date NOT NULL DEFAULT NOW,
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
ERROR - 2017-05-14 17:35:23 --> Query error: Invalid default value for 'start_date' - Invalid query: CREATE TABLE IF NOT EXISTS `banners` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(50) NOT NULL,
					`url` varchar(50) NOT NULL,
					`image` varchar(100) DEFAULT NULL,
					`caption` varchar(40) DEFAULT NULL,
					`html` text,
					`start_date` date NOT NULL DEFAULT NOW(),
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
ERROR - 2017-05-14 17:35:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'CURRENT,
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyI' at line 8 - Invalid query: CREATE TABLE IF NOT EXISTS `banners` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(50) NOT NULL,
					`url` varchar(50) NOT NULL,
					`image` varchar(100) DEFAULT NULL,
					`caption` varchar(40) DEFAULT NULL,
					`html` text,
					`start_date` date NOT NULL DEFAULT CURRENT,
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
ERROR - 2017-05-14 17:36:41 --> Query error: Invalid default value for 'start_date' - Invalid query: CREATE TABLE IF NOT EXISTS `banners` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`title` varchar(50) NOT NULL,
					`url` varchar(50) NOT NULL,
					`image` varchar(100) DEFAULT NULL,
					`caption` varchar(40) DEFAULT NULL,
					`html` text,
					`start_date` date NOT NULL DEFAULT CURRENT_TIMESTAMP,
					`end_date` date NOT NULL,
					PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
ERROR - 2017-05-14 17:46:54 --> Severity: Parsing Error --> syntax error, unexpected '1' (T_LNUMBER), expecting ')' C:\UwAmp\www\cart\application\views\admin\banners\banner_insert_view.php 7
ERROR - 2017-05-14 17:52:18 --> 404 Page Not Found: /index
ERROR - 2017-05-14 17:52:18 --> 404 Page Not Found: /index
