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
$route['default_controller'] = 'user_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin_controller';


//gejala kerusakan
$route['admin/tambahgejala'] = 'admin_controller/tambah_gejala';
$route['admin/editgejala'] = 'admin_controller/edit_gejala';
$route['admin/lihatgejala'] = 'admin_controller/lihat_gejala';

//jenis kerusakan
$route['admin/tambahjenis']='admin_controller/tambah_jenis';
$route['admin/editjenis']='admin_controller/edit_jenis';
$route['admin/lihatjenis']='admin_controller/lihat_jenis';

//solusi kerusakan
$route['admin/tambahsolusi']='admin_controller/tambah_solusi';
$route['admin/editsolusi']='admin_controller/edit_solusi';
$route['admin/lihatsolusi']='admin_controller/lihat_solusi';

//relasi antara solusi, gejala, dan jenis kerusakan
$route['admin/tambahrelasi']='admin_controller/tambah_relasi';
$route['admin/lihatrelasi']='admin_controller/lihat_relasi';


//proses get
$route['admin/getrelasi'] = 'admin_controller/relasi_solusi_jenis_gejala';

//proses post
$route['admin/submit/tambahgejala'] = 'admin_controller/post_tambah_gejala';
$route['admin/submit/tambahjenis'] = 'admin_controller/post_tambah_jenis';
$route['admin/submit/tambahsolusi'] = 'admin_controller/post_tambah_solusi';
$route['admin/submit/tambahrelasi'] = 'admin_controller/post_tambah_relasi';


//delete
$route['admin/deletegejala/(:num)'] = 'admin_controller/deleteGejala/$1';
$route['admin/deletejenis/(:num)'] = 'admin_controller/deleteJenis/$1';
$route['admin/deletesolusi/(:num)'] = 'admin_controller/deleteSolusi/$1';

//edit
$route['admin/editgejala/(:num)'] = 'admin_controller/editGejala/$1';
$route['admin/editjenis/(:num)'] = 'admin_controller/editJenis/$1';
$route['admin/editsolusi/(:num)'] = 'admin_controller/editSolusi/$1';
//postedit
$route['admin/submit/editgejala'] = 'admin_controller/postEditGejala';
$route['admin/submit/editjenis'] = 'admin_controller/postEditJenis';
$route['admin/submit/editsolusi'] = 'admin_controller/postEditSolusi';
