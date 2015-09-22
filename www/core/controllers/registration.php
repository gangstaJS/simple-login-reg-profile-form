<?php
require_once CORE_PATH.'pageview.php';
require_once MODEL_PATH.'common.php';

class Index extends Base {
	public function __construct() {
		self::processAjax();
	}

	public function registration() {
		var_dump($_POST);
	}

	public function render() {
		Page::render('registration');
	}
}

$index = new Index();
$index->render();

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == 'POST') {
	$index->registration();
}