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
$route['default_controller'] = 'MainCon';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route[''] = 'MainCon';
$route['Book-slot'] = 'MainCon/book_slot';
$route['Get-ammonium'] = 'MainCon/get_ammonium';
$route['Org-registration'] = 'MainCon/org_registration';
$route['Invoice'] = 'MainCon/invoice';
$route['Ammonium_invoice'] = 'MainCon/ammonium_invoice';
$route['Tank-On-Wheel'] = 'MainCon/tank_on_wheel';
$route['Tank-On-Wheel_invoice'] = 'MainCon/tankonwheel_invoice';

$route['check_status'] = 'MainCon/check_status';
$route['check_visarjan_invoice'] = 'MainCon/check_visarjan_invoice';
$route['check_ammonium_invoice'] = 'MainCon/check_ammonium_invoice';
$route['check_tank_invoice'] = 'MainCon/check_tank_invoice';

// $route['invoice'] = 'MainCon/invoice';

$route['Division'] = 'Dashboard/division';
$route['Visarjan-Data'] = 'Dashboard/visrjan_data';
$route['Ammonium-Data'] = 'Dashboard/ammonium_data';
$route['Org-Reg-Data'] = 'Dashboard/org_reg_data';
$route['Org-Apr-Data'] = 'Dashboard/org_apr_data';
$route['Admin-Profile'] = 'Dashboard/admin_profile';
// $route['Add-Popup'] = 'Dashboard/add_popup';
$route['Edit-Popup'] = 'Dashboard/edit_popup';
$route['Edit-Slider'] = 'Dashboard/edit_slider';

$route['Add-Announcement'] = 'Dashboard/add_announcement';
$route['Edit-Announcement'] = 'Dashboard/edit_announcement';
$route['Edit-Single-Announcement'] = 'Dashboard/edit_single_announcement';

$route['Delete-Announcement/(:any)']['delete'] = "DbCon/delete_announcement/$1";
$route['Update_Guidelines/(:any)'] = "DbCon/update_guidelines/$1";

$route['login'] = 'Users/login';
$route['logout'] = 'Users/logout';
$route['404_override'] = 'MainCon/error';


$route['Ganesha-Cart'] = 'MainCon/ganesha_cart';
$route['Ganesha-Shop'] = 'MainCon/ganesha_shop';
$route['Ganesha-Login'] = 'MainCon/ganesha_login';
$route['Ganesha-Account'] = 'MainCon/ganesha_account';
$route['Ganesha-Product-Detail'] = 'MainCon/ganesha_product_detail';
