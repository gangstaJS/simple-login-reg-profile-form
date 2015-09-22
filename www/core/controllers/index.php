<?php
require_once CORE_PATH.'pageview.php';
require_once MODEL_PATH.'common.php';

class Index extends Base {
	public function __construct() {
		self::processAjax();
	}

	public function render() {
		Page::render('index');
	}
}

$index = new Index();
$index->render();