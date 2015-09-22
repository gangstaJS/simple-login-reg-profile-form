<?php

session_start();

$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if($url_path !== '/' && substr($url_path, -1) === '/') {
	$url_path = substr($url_path, 0, strlen($url_path)-1);
	$get = empty($_GET)?'':'?'.http_build_query($_GET);
	header('Status: 301');
	header("Location: {$url_path}{$get}");
	exit;
}

$url_path = urldecode($url_path);

require_once 'conf.php';
require_once 'routes.php';

$pages = explode('/', trim($url_path, '/'));
$page  = $pages[0];

// var_dump($pages);

// --

if(isset($route[$pages[0]])) {
	require_once CORE_PATH.'base.php';
	require_once CONTROLLER_PATH.$route[$pages[0]]; exit;
} else {
	require_once CONTROLLER_PATH.'404.php';	exit;
}

