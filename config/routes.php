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
* Owner routes
*/

$route['owner']                  = "SuperAdmin/index";
$route['owner/dashboard']        = "SuperAdmin/index";
$route['owner/home']             = "SuperAdmin/index";

	// USERS ROUTES
	$route['owner/register.user']    = "SuperAdmin/add_user";
	$route['owner/users.all']        = "SuperAdmin/user_list";
	$route['owner/user.view/(:any)'] = "SuperAdmin/single_user/$1";
	$route['owner/user.edit/(:any)'] = "SuperAdmin/single_edit_user/$1";
	
	// AREA ROUTES
	$route['owner/register.area']    = "SuperAdmin/add_area";
	$route['owner/area.all']         = "SuperAdmin/area_list";
	$route['owner/area.view/(:any)'] = "SuperAdmin/single_area/$1";
	$route['owner/area.edit/(:any)'] = "SuperAdmin/single_edit_area/$1";

	// Branch ROUTES
	$route['owner/register.branch']             = "SuperAdmin/add_branch";
	$route['owner/branch.all']                  = "SuperAdmin/branch_list";
	$route['owner/branch.view/(:any)']          = "SuperAdmin/single_branch/$1";
	$route['owner/branch.edit/(:any)']          = "SuperAdmin/single_edit_branch/$1";
	$route['owner/register.branch.menu']        = "SuperAdmin/add_branch_menu";
	$route['owner/register.branch.menu/(:num)'] = "SuperAdmin/add_branch_menu/$1";
	$route['owner/revise.branch.menu']          = "SuperAdmin/edit_branch_menu";
	$route['owner/revise.branch.menu/(:num)']   = "SuperAdmin/edit_branch_menu/$1";

	// Menu ROUTES
	$route['owner/register.menu']    = "SuperAdmin/add_menu";
	$route['owner/menu.all']         = "SuperAdmin/menu_list";
	$route['owner/menu.view/(:any)'] = "SuperAdmin/single_menu/$1";
	$route['owner/menu.edit/(:any)'] = "SuperAdmin/single_edit_menu/$1";

		// Menu SECTION ROUTES
		$route['owner/register.section']             = "SuperAdmin/add_section";
		$route['owner/register.menu.section/(:any)'] = "SuperAdmin/add_menu_section/$1";
		$route['owner/revise.menu.section']          = "SuperAdmin/edit_menu_section";
		$route['owner/revise.menu.section/(:num)']   = "SuperAdmin/edit_menu_section/$1";

	// SECTIONS ROUTES 
	$route['owner/section.all']           = "SuperAdmin/section_list";
	$route['owner/section.view/(:any)']   = "SuperAdmin/single_section/$1";

// Routes For Login
$route['authenticate.me'] = "Login/authenticate";
$route['destroy.me']      = "Login/destroy_session";


/*
* EndUser routes
*/

$route['enduser']                  			= "EndUser/index";
$route['enduser/menu.all']                  = "EndUser/menu_list";
/*
* Ajax routes
*/
//$route['async/load_areas']      = "AsyncRequests/load_areas";
$route['async/load_branches']      = "AsyncRequests/load_branches";


// Default Routes
$route['default_controller']   = 'SuperAdmin';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;