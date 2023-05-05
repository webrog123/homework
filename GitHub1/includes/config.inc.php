<?php
$pagetitle = array(
    'title' => 'The Pet Planet',
);

$header = array(
    'imagesource' => 'Logo/paw.png',
    'imagealt' => 'logo',
	'title' => 'The Pet Planet',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'The Pet Planet'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home', 'menun' => array(1,1)),
    'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
    'messages' => array('file' => 'messages', 'text' => 'Messages', 'menun' => array(1,1)),
    'products' => array('file' => 'products', 'text' => 'Products', 'menun' => array(1,1)),
    'reviews' => array('file' => 'reviews', 'text' => 'Reviews', 'menun' => array(1,1)),
    'upload' => array('file' => 'upload', 'text' => 'Upload', 'menun' => array(0,1)),
    'shops' => array('file' => 'shops', 'text' => 'Shops', 'menun' => array(1,1)),
    'lecture' => array('file' => 'lecture', 'text' => 'Lecture', 'menun' => array(1,1)),
    'login' => array('file' => 'login', 'text' => 'Login', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'text' => 'Logout', 'menun' => array(0,1)),
	'login2' => array('file' => 'login2', 'text' => '', 'menun' => array(0,0)),
    'registration' => array('file' => 'registration', 'szoveg' => '', 'menun' => array(0,0)) 
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>
