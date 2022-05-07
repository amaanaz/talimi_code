<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']                                = 'home';
$route['404_override']                                      = '';
$route['translate_uri_dashes']                              = FALSE;

$route['test_home_one']                                     = 'home/testHomeOne'; // old one
$route['faq']                                               = 'home/faq';
$route['plans']                                             = 'home/plans';
$route['contact_us']                                        = 'home/contact_us';
$route['login']                                             = 'home/login';


$route['registration_submit']                               = 'home/registration_submit';

$route['login-check']                                       = 'login/login_check';
$route['logout']                                            = 'login/logout';

// Admin Pannel
$route['admin']                                             = 'admin/index';
// FAQ
$route['admin-faqs']                                        = 'admin/admin_faqs';
$route['get-faqs']                                          = 'admin/getFaqs';
$route['get-this-faq']                                      = 'admin/getThisFaq';
$route['create-update-faq']                                 = 'admin/createUpdateFaq';
// Registration
$route['admin-registration']                                = 'admin/admin_registration';
$route['get-registration-data']                             = 'admin/getRegistration';
$route['get-this-registration']                             = 'admin/getThisRegistration';



$route['itemCRUD'] = "itemCRUD/index";
$route['itemCRUD/(:num)'] = "itemCRUD/show/$1";
$route['itemCRUDCreate']['post'] = "itemCRUD/store";
$route['itemCRUDEdit/(:any)'] = "itemCRUD/edit/$1";
$route['itemCRUDUpdate/(:any)']['put'] = "itemCRUD/update/$1";
$route['itemCRUDDelete/(:any)']['delete'] = "itemCRUD/delete/$1";

$route['registrationadd'] = "Home/registrationStore";


$route['quoterange/(:any)'] = "Home/quoteshow/$1";


$route['registration']                                      = 'home/registrationNew';

$route['privacypolicy']                                      = 'home/privacypolicy';


