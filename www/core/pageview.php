<?php

class Page extends Base {
	static $js_list  = array(),
           $css_list = array(),
           $tpl_data = array();

    static $file_header = 'header.tpl.php',
           $file_footer = 'footer.tpl.php';

    static $page_title       = 'Test',
           $page_keyword     = '',
           $page_description = '';


    static function render_header() {
        $tpl = &self::$tpl_data;
        include VIEWS_PATH.self::$site.'/'.self::$file_header;
    }

    static function render_footer() {
        $tpl = &self::$tpl_data;
        include VIEWS_PATH.self::$site.'/'.self::$file_footer;
    }


	static function render_tpl( $file_tpl ) {
        $tpl = &self::$tpl_data;
		$tpl_path = VIEWS_PATH.self::$site.'/'.$file_tpl.'.tpl.php';
        include $tpl_path;
    }

    static function add_value( $name, $value ) {
        self::$tpl_data[ $name ] = $value;
    }

    static function add_js( $js_file ) {
        self::$js_list[] = $js_file;
    }

    static function get_js() {
        $out = '';
        foreach( self::$js_list AS $file ) {
            $out .= '<script src="'. $file.'"></script>'.PHP_EOL;
        }
        return $out;
    }

    static function add_css( $css_file ) {
        self::$css_list[] = $css_file;
    }

    static function get_css() {
        $out = '';
        foreach( self::$css_list AS $file ) {
            $out .= '<link rel="stylesheet" type="text/css" href="' . $file.'">'.PHP_EOL;
        }
        return $out;
    }

    # ----

    static function set_page_title( $text ) {
        self::$page_title = $text;
    }

    static function set_page_keyword( $text ) {
        self::$page_keyword = $text;
    }
    static function set_page_description( $text ) {
        self::$page_description = $text;
    }

    static function get_page_title() {
        return htmlspecialchars( self::$page_title );
    }

    static function get_page_keyword() {
        return htmlentities( self::$page_keyword, ENT_COMPAT, 'utf-8' );
    }
    static function get_page_description() {
        return htmlentities( self::$page_description, ENT_COMPAT, 'utf-8' );
    }

    # ----

    static function render( $view_file ) {
        self::render_header();
        self::render_tpl( $view_file );
        self::render_footer();
    }

    public static function nested_tpl( $name ) {
        $tpl = &self::$tpl_data;
        $tpl_path = VIEWS_PATH.self::$site.'/compile/'. $name . '.tpl.php';
        include $tpl_path;
    }

}