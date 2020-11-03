<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Welcome';
$route['page-analytics'] = 'Welcome/page_analytics';
$route['page-review'] = 'Welcome/page_review';
$route['page-order'] = 'Welcome/page_order';
$route['page-order-list'] = 'Welcome/page_order_list';
$route['page-general-customers'] = 'Welcome/page_general_customers';
$route['app-profile'] = 'Welcome/app_profile';
$route['app-calender'] = 'Welcome/app_calender';

$route['ecom-product-grid'] = 'Welcome/ecom_product_grid';
$route['ecom-product-list'] = 'Welcome/ecom_product_list';
$route['ecom-product-detail'] = 'Welcome/ecom_product_detail';
$route['ecom-product-order'] = 'Welcome/ecom_product_order';
$route['ecom-checkout'] = 'Welcome/ecom_checkout';
$route['ecom-invoice'] = 'Welcome/ecom_invoice';
$route['ecom-customers'] = 'Welcome/ecom_customers';

$route['chart-flot'] = 'Welcome/chart_flot';
$route['chart-morris'] = 'Welcome/chart_morris';
$route['chart-chartjs'] = 'Welcome/chart_chartjs';
$route['chart-chartist'] = 'Welcome/chart_chartist';
$route['chart-sparkline'] = 'Welcome/chart_sparkline';
$route['chart-peity'] = 'Welcome/chart_peity';


$route['ui-accordion'] = 'Welcome/ui_accordion';
$route['ui-alert'] = 'Welcome/ui_alert';
$route['ui-badge'] = 'Welcome/ui_badge';


$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
