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
|z
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'MyController';
$route['index'] = 'MyController/index';
$route['adminlog'] = 'MyControllerAdmin/adminlogin';
$route['read'] = 'MyControllerAP/readData'; //read data yang dulu
$route['readPass'] = 'MyControllerAP/readPass'; //ga kepake
$route['createuser'] = 'MyController/indexcreate'; //buka hal bikin akun baru
$route['saved'] = 'MyController/createUser'; //untuk nyimpen user baru
$route['login'] = 'MyControllerAdmin/login'; //masuk login
$route['logout'] = 'MyControllerAP/logout'; //logout session
$route['home1'] = 'MyController/home1'; //buka halaman home yang dulu
$route['home'] = 'MyControllerAP/home';   //buka hal home baru yang udah ada css nya
$route['posting'] = 'MyControllerAP/indexnews'; //buka ke halaman bikin news
$route['maps'] = 'MyController/indexmaps'; //buka halaman buka maps
$route['datadasar'] = 'MyControllerAP/indexdataDasar'; //buka hal data dasar tanpa css
$route['datapegawai'] = 'MyControllerAP/indexdataPegawai'; //buka hal data pegawai tanpa css
$route['createDataDasar'] = 'MyControllerAP/puskes1'; //buka form datadasar dengan css
$route['saveDataDasar'] = 'MyControllerAP/createdatadasar'; //menyimpan data dasar
$route['pegawai'] = 'MyControllerAP/pegawai1'; //membuka form pegawai
$route['tablepegawai'] = 'MyControllerAP/tablepegawai'; //membuka hal table pegawai
$route['tablepuskesmas'] = 'MyControllerAP/tablepuskesmas'; //membuka hal table puskesmas
//frontend
$route['sambutan'] = 'MyController/sambutan';
$route['visimisi'] = 'MyController/visimisi';
$route['perbup'] = 'MyController/perbup';
$route['petapuskesmas'] = 'MyController/puskesmas';
$route['petarumahsakit'] = 'MyController/rumahsakit';
$route['kontak'] = 'MyController/kontak';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
