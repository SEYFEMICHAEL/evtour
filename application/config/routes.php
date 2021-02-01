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
// home route
$route['default_controller'] = 'home';
$route['msg'] = 'home/msg';
$route['homepage'] = 'home';
// product route
$route['search'] = 'search/index';
$route['products'] = 'product/lists';
$route['detail/(:num)'] = 'product/detail/$1';
// category route
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Ad route
 
//dashboard
$route['cpanel'] = 'home/cpanel';
$route['post-Ad'] = 'home/postad';

//reg route
$route['signup'] = 'SignUpCtrl/reg';
$route['reg'] = 'SignUpCtrl/index';

$route['login'] = 'SignUpCtrl/login_user';
$route['logout'] = 'SignUpCtrl/logout_user';
$route['log'] = 'SignUpCtrl/login';

$route['book'] = 'home/book_user';
$route['booking'] = 'BookingCtrl/book';
// $route['viewbooking'] = 'BookingCtrl/viewbook';

$route['admin'] = 'SignUpCtrl/admin';

$route['admin/bookmgmt']='home/book_mgmt';
$route['admin/usermgmt']='home/user_mgmt';
$route['admin/tourmgmt']='home/tour_mgmt';
$route['admin/panvrmgmt']='home/panvr_mgmt';


$route['test']='test/index';
$route['cancelbooking/(:any)']='BookingCtrl/cancelBook/$1';
$route['viewbooking/(:any)'] = 'BookingCtrl/viewbook/$1';

// $route['(:any)'] = 'welcome/index';
// $route['(:any)/(:any)'] = 'welcome/index';../fonts/fontawesome-webfont.woff2?v=4.7.0
// $route['../fonts/fontawesome-webfont.woff2?v=4.7.0'] = base_url().'resorce/vendor/';