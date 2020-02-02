<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// if (is_file(APPPATH.'config/routes.php'))
// {
//     include(APPPATH.'config/routes.php');
// }


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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// https://www.manashaadi.com/admin
// https://www.manashaadi.com/admin/Admin_home  --- /MyDashboard
$route['admin/MyDashboard']  = "Admin_home";
// https://www.manashaadi.com/admin/admin_pv        ---- /profile_validation
// $route['admin/profile_validation']  = "admin_pv";
// https://www.manashaadi.com/admin/Admin_pv/pv_result      ---/validation_result       -- done
// $route['admin/validation_result']  = "Admin_pv/pv_result";
// $route['admin/validation_result/(:any)']  = "Admin_pv/pv_result";
// https://www.manashaadi.com/admin/admin_search/viewprofile/1193  --/view_myprofile
$route['admin/view_myprofile/:id']  = "admin_search/viewprofile";
// https://www.manashaadi.com/admin/admin_search ---/basic_search 
$route['admin/basic_search']  = "admin_search";

// https://www.manashaadi.com/admin/admin_search/searchprofiles  ---/search_result
// $route['admin/search_result']  = "admin_search/searchprofiles";
// $route['admin/search_result/(:any)']  = "admin_search/searchprofiles";

// https://www.manashaadi.com/admin/admin_search/prosearch_resultfileview/1193  --/search_viewprofile
$route['admin/search_viewprofile/:id']  = "admin_search/profileview";
// https://www.manashaadi.com/admin/admin_payment ---/enterpayment
$route['admin/enterpayment']  = "admin_payment";
// https://www.manashaadi.com/admin/admin_photos ---/photoshp_photos
$route['admin/photoshp_photos']  = "admin_photos";

// https://www.manashaadi.com/admin/admin_del_profiles  ---/set_del_profiles
$route['admin/set_del_profiles']  = "admin_del_profiles";

// https://www.manashaadi.com/admin/profile_assign 
// https://www.manashaadi.com/admin/call_history


$route['admin/login']  = "Admin/index";

$route['admin/logout']  = "Admin/logout";

$route['admin/profile_assign']  = "Admin_ap/profile_assign";

$route['admin/call_history_pf/:id']    = "Admin_ap/call_history_pf";

$route['admin/call_history']    = "Admin_ap/call_history";



$route['admin/ws/update_profile_owner']  = "Admin_ap/update_profile_owner";

$route['admin/ws/get_customers']  = "Admin_ap/get_customers";

$route['admin/ws/get_employees']  = "Admin_ap/get_employees";

$route['admin/ws/get_call_log']  = "Admin_ap/get_call_log";

$route['admin/ws/save_customer_sa_fee']  = "Admin_ap/save_customer_sa_fee";

$route['admin/ws/save_customer_reg_fee']  = "Admin_ap/save_customer_reg_fee";

$route['admin/ws/save_call_log']  = "Admin_ap/save_call_log";

$route['admin/ws/save_reminder']  = "Admin_ap/save_reminder";

$route['admin/ws/get_user_info']  = "Admin_ap/get_user_info";

$route['admin/ws/get_emp_associated_profiles']  = "Admin_ap/get_emp_associated_profiles";

$route['admin/ws/get_association_search']  = "Admin_ap/get_association_search";
