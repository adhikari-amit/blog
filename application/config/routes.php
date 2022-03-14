<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'blog';
$route['404_override'] = 'notfound404';
$route['translate_uri_dashes'] = FALSE;

$route["article/(:any)"] = "blog/article/$1";
$route['article'] = "blog";

$route["search/(:any)"] = "blog/search/$1";
$route["search/(:any)/(:num)"] = "blog/search/$1/$1";
$route['search'] = "blog";

$route["category/(:any)"] = "blog/category/$1";
$route["category/(:any)/(:num)"] = "blog/category/$1/$1";
$route["category"] = "blog";


$route["author/(:any)"] = "blog/author/$1";
$route["author"] = "blog";

$route["tag/(:any)"] = "blog/tag/$1";
$route["tag"] = "blog";

$route["about"] = "blog/about";

$route["contact"] = "blog/contact";
$route["contact/(:any)"] = "blog/contact/$1";

$route['submitarticle'] = "blog/submitarticle";
$route['submitarticle/(:any)'] = "blog/submitarticle/$1";
$route['authorsubmitarticle'] = "blog/authorsubmitarticle";
$route['authorsubmitarticle/(:any)'] = "blog/authorsubmitarticle/$1";

$route['tnc'] = "blog/tnc";

$route['authors'] = "blog/authors";
$route['ebooks'] = "blog/ebooks";
$route['ebook']="blog/ebooks";

$route['eventdetails']="event/eventdetails";
$route['eventdetails/(:any)']="event/eventdetails/$1";
