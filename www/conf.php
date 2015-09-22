<?php

error_reporting(E_ALL|E_NOTICE|E_WARNING);
ini_set('display_errors','On');

// -------------------------
// paths conf
define('ROOT_PATH',       'E:/projects/simple-login-reg-profile-form/www/', true);
define('CORE_PATH',       'core/', true);
define('CONTROLLER_PATH', 'core/controllers/', true);
define('MODEL_PATH',      'core/models/', true);
define('VIEWS_PATH',      'core/views/', true);
define('DATA_PATH',     ROOT_PATH.'data/', true);


// ---------------------------
// data base conf
const DBH = '127.0.0.1';
const DBN = 'simple-login-reg-profile-form';
const DBU = 'root';
const DBP = 'shapovalenko';

mb_internal_encoding('UTF-8');
date_default_timezone_set('Europe/Kiev');
