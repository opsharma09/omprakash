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
$route['default_controller'] = 'home';
// $route['login'] = 'login/index';
// $route['registration'] = 'register/index';
// $route['products'] = 'products/edit_product_category';
$route['kaffee-finder'] = 'kaffee/kaffeefinder';
// $main_cat=$this->db->query("select * from product_under_category where id = $his->uri->segment('3')")->row_array();	
// $main_cat=$this->db->query("select * from product_category where category = $his->uri->segment('4')")->row_array();
// $route['produkt-kategorie/$/$b'] = '';

if ( ! function_exists('slugify'))
{
  function slugify($text) {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
            return 'n-a';
        return $text;
    }
}
require_once(BASEPATH . 'database/DB.php');
$db = DB();
// $category_query = $db->get('product_under_category');
// $category_result = $category_query->result();
// foreach ($category_result as $row) {
// 	$route['produkt-kategorie/'.slugify($row->e_name)] = 'home/produkt_kategorie/'.$row->id;
// }
$category1_query = $db->get('product_category');
$sub_category_result = $category1_query->result();
foreach ($sub_category_result as $row) {
	if($row->name == 'Kaffee'){
		$route['produkt-kategorie/kaffee-espresso/'.slugify($row->name)] = 'kaffee/kaffee_new/'.$row->id;
	}elseif($row->name == 'Espresso'){
		$route['produkt-kategorie/kaffee-espresso/'.slugify($row->name)] = 'espresso/espresso_new/'.$row->id;

	}else{
		$route['produkt-kategorie/'.slugify($row->e_name)] = 'home/produkt_kategorie/'.$row->id;

	}
}
$category1_query = $db->get('product_sub_category');
$sub_category_result = $category1_query->result();
foreach ($sub_category_result as $row) {
	$route['produkt-kategorie/kaffee-espresso/'.'kaffee'.'/'.slugify($row->name)] = 'kaffee/kaffee_sub/'.$row->id;
}
foreach ($sub_category_result as $row) {
	$route['produkt-kategorie/kaffee-espresso/'.'espresso'.'/'.slugify($row->name)] = 'espresso/espresso_sub/'.$row->id;
}
foreach ($sub_category_result as $row) {
	$route['produkt-kategorie/zubehoer'.'/'.slugify($row->e_name)] = 'home/produkt_sub/'.$row->id;
}
$produkt_query = $db->get('products');
$produkt_result = $produkt_query->result();
foreach ($produkt_result as $row) {
	$route['produkt/'.slugify($row->e_name)] = 'products/product/'.$row->id;
}
$route['mein-account'] = 'users/user_profile';
$route['mein-account/orders'] = 'users/user_profile/order';
$route['mein-account/subscriptions'] = 'users/user_profile/subscriptions';
$route['mein-account/wc-smart-coupons'] = 'users/user_profile/coupons';
$route['mein-account/edit-address'] = 'users/user_profile/edit_address';
$route['mein-account/edit-account'] = 'users/user_profile/edit_account';
$route['produkt-kategorie/geschenke'] = 'home/geschenke';
$route['veranstaltungen'] = 'home/veranstaltungen';
$route['baristakurs'] = 'home/baristakurs';
$route['genussreise'] = 'home/genussreise';
$route['produkt/gutschein'] = 'home/gutschein';
$route['unsere-philosophie'] = 'home/philosophie';
$route['roestung'] = 'home/roestung';
$route['veranstaltungen'] = 'home/veranstaltungen';
$route['buchungstool'] = 'home/buchungstool';
$route['gastronomie'] = 'home/gastronomie';
$route['schulungen'] = 'home/schulungen';
$route['mehrwegsystem'] = 'home/mehrwegsystem';
$route['bestellformular'] = 'home/bestellformular';

// $route['produkt-kategorie/(:any)']='home/produkt_kategorie/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
