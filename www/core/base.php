<?php

Base::init();

class Base {
	static $pages = array(), $db = '', $mc = '', $site = 'ru';

	static function init() {
        self::$db = new mysqli(DBH, DBU, DBP, DBN);

        if(self::$db->connect_errno)die('Connect error: '.self::$db->connect_error);
            self::$db->set_charset('utf8');

		if(class_exists('Memcache', false)) {
			self::$mc = new Memcache();
		}	
	}

    protected function processAjax() {
        if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && isset( $_POST['method'] ) ) {
            $method = $_POST['method'];
			if( method_exists( $this, $method ) ) {
				die( json_encode( $this->$method() ) );
			}
        }
    }

	static function res2arr( &$res ) {
		$ret = array();
        if( $res ) while( $row = $res->fetch_assoc() ) $ret[] = $row;
		return $ret;
	}
}