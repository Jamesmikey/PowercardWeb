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
$route['default_controller'] = 'pages/home';
$route['home'] = 'pages/home';
$route['about'] = 'pages/about';
$route['contact'] = 'pages/contact';

$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

$route['services/(:any)'] = 'service/show/$1';

$route['dashboard'] = 'dashboard/dashboard';

$route['dashboard/slider-images'] = 'dashboard/SliderImage';
$route['dashboard/slider-images/upload'] = 'dashboard/SliderImage/create';
$route['dashboard/slider-images/(:any)/edit'] = 'dashboard/SliderImage/edit/$1';
$route['dashboard/slider-images/(:any)/delete'] = 'dashboard/SliderImage/delete/$1';

$route['dashboard/services'] = 'dashboard/service';
$route['dashboard/services/create'] = 'dashboard/service/create';
$route['dashboard/services/(:any)'] = 'dashboard/service/show/$1';
$route['dashboard/services/(:any)/edit'] = 'dashboard/service/edit/$1';
$route['dashboard/services/(:any)/update'] = 'dashboard/service/show/$1/update';
$route['dashboard/services/(:any)/delete'] = 'dashboard/service/delete/$1';

$route['dashboard/services/(:any)/images/(:any)/delete'] = 'dashboard/service/destroyimage/$1/$2';
$route['dashboard/services/(:any)/images/(:any)/update'] = 'dashboard/service/updateimage/$1/$2';

$route['dashboard/services/(:any)/images'] = 'dashboard/service/storeImage/$1';

$route['dashboard/feedback'] = 'dashboard/feedback';

$route['dashboard/settings'] = 'dashboard/SiteSettings';
$route['dashboard/settings/profile'] = 'dashboard/ProfileSettings';
$route['dashboard/settings/password'] = 'dashboard/ProfileSettings/changePassword';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
