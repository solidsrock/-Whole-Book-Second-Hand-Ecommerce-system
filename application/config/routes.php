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
/*
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//用户操作
$route['user/register.html'] = 'User/dosignup';
$route['user/login.html'] = 'User/dologin';
$route['user/checklogin'] = 'User/checklogin';
$route['user/logout.html'] = 'User/logout';

$route['catory/(:num)/(:num)'] = 'Home/cshow/$1/$2';



//管理员管理
$route['admin/index.html'] = 'Admin/index';
$route['admin/order.html'] = 'Admin/orderlist';
$route['admin/newbook.html'] = 'Admin/newbooklist';
$route['admin/usedbook.html'] = 'Admin/usedbooklist';

//用户管理
$route['uadmin/index.html'] = 'Profile/index';
$route['uadmin/usedsel.html'] = 'Profile/usedsel';
$route['uadmin/newsel.html'] = 'Profile/newsel';
$route['uadmin/order.html'] = 'Profile/order';
$route['uadmin/postusedbook.html'] = 'Profile/postbook';
//结算
$route['uadmin/checkout.html'] = 'User/checkout';

$route['api/upfile'] = 'Api/upfile';
$route['api/adduser'] = 'Api/adduser';
$route['api/view/(:num)'] = 'Api/viewbook/$1';
$route['api/addtocart'] = 'Api/addtocart';
$route['api/checkout'] = 'Api/checkout';



















