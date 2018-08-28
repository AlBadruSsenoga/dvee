<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'front/index';
$route['404_override'] = 'Errors/_404';
$route['translate_uri_dashes'] = FALSE;

// Products
$route['product/(:any)'] = 'front/product/$1';
$route['category'] = 'front/category';
$route['search'] = 'front/search';
$route['category/(:any)'] = 'front/category/$1';
$route['category/(:any)/(:any)'] = 'front/category/$1/$1';

// Pages
$route['page/(:any)'] = 'front/page/$1';

// User
$route['login'] = 'front/login';
$route['logout'] = 'front/logout';
$route['change_password'] = 'front/change_password';
$route['forgot_password'] = 'front/forgot_password';
$route['reset_password'] = 'front/reset_password';
$route['reset_password/(:any)'] = 'front/reset_password/$1';
$route['register'] = 'front/register';

// User dashboard
$route['user_dashboard'] = 'front/user_dashboard';
$route['user_dashboard/orders'] = 'front/orders';
$route['user_dashboard/orders/(:any)'] = 'front/order/$1';
$route['user_dashboard/carts'] = 'front/carts';
$route['user_dashboard/points_vouchers'] = 'front/points_vouchers';
$route['profile'] = 'front/profile';


// Pages
$route['page'] = 'front/page';
$route['page/(:any)'] = 'front/page/$1';

// Cart
$route['cart'] = 'front/cart';
$route['cart/(:any)'] = 'front/cart/$1';
$route['cart/(:any)/(:any)'] = 'front/cart/$1/$1';
$route['delete_cart_item'] = 'front/delete_cart_item';
$route['delete_cart_item/(:any)'] = 'front/delete_cart_item/$1';
$route['unset_cart_discount'] = 'front/unset_cart_discount';
$route['unset_cart_discount/(:any)'] = 'front/unset_cart_discount/$1';

// Payments
$route['checkout_review'] = 'front/checkout_review';
$route['do_checkout_payment'] = 'front/do_checkout_payment';
$route['checkout_success'] = 'front/checkout_success';
$route['checkout_failed'] = 'front/checkout_failed';
$route['checkout'] = 'front/checkout';
$route['checkout_complete'] = 'front/checkout_complete';
$route['checkout_failed'] = 'front/checkout_failed';


// Cart Controls
$route['load_save_cart_data'] = 'front/load_save_cart_data';
$route['save_cart_data'] = 'front/save_cart_data';
$route['load_cart_data'] = 'front/load_cart_data';
$route['load_cart_data/(:any)'] = 'front/load_cart_data/$1';
$route['load_cart_data/(:any)/(:any)'] = 'front/load_cart_data/$1/$1';
$route['delete_cart_data'] = 'front/delete_cart_data';
$route['delete_cart_data/(:any)'] = 'front/delete_cart_data/$1';
$route['update_cart'] = 'front/update_cart';
$route['clear_cart'] = 'front/clear_cart';
$route['destroy_cart'] = 'front/destroy_cart';


// Discounts
$route['update_discount_codes'] = 'front/update_discount_codes';
$route['set_discount'] = 'front/set_discount';
$route['set_discount/(:any)'] = 'front/set_discount/$1';
$route['remove_discount_code'] = 'front/remove_discount_code';
$route['remove_all_discounts'] = 'front/remove_all_discounts';
$route['unset_discount'] = 'front/unset_discount';
$route['unset_discount/(:any)'] = 'front/unset_discount/$1';
