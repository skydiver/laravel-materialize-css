<?php

namespace Skydiver\LaravelMaterializeCSS;

class MaterializeCSSBuilder {

    private static $file_css     = '/materialize-css/css/materialize.css';
    private static $file_css_min = '/materialize-css/css/materialize.min.css';
    private static $file_js      = '/materialize-css/js/materialize.js';
    private static $file_js_min  = '/materialize-css/js/materialize.min.js';
    private static $css_icons    = 'https://fonts.googleapis.com/icon?family=Material+Icons';
    private static $jquery_url   = 'https://code.jquery.com/jquery-3.3.1.min.js';
    private static $jquery_sha   = 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=';


    public static function include_full() {
        $return  = self::include_css();
        $return .= self::jquery_tag_js(self::$jquery_url);
        $return .= self::include_js();
        return $return;
    }

    public static function include_all() {
        $return  = self::include_css();
        $return .= self::include_js();
        return $return;
    }

    public static function include_css() {
        $return  = self::tag_css(self::$css_icons);
        $return .= self::tag_css(asset(self::$file_css_min));
        return $return;
    }

    public static function include_js() {
        return self::tag_js(asset(self::$file_js_min));
    }

    public static function include_secure_css() {
        return self::tag_css(secure_asset(self::$file_css_min));
    }

    public static function include_secure_js() {
        return self::tag_js(secure_asset(self::$file_js_min));
    }

    public static function get_url_css($full=false, $secure=false) {
        if($full == true && $secure == true) {
            return secure_asset(self::$file_css_min);
        }
        if($full == true && $secure == false) {
            return asset(self::$file_css_min);
        }
        return self::$file_css_min;
    }

    public static function get_url_js($full=false, $secure=false) {
        if($full == true && $secure == true) {
            return secure_asset(self::$file_js_min);
        }
        if($full == true && $secure == false) {
            return asset(self::$file_js_min);
        }
        return self::$file_js_min;
    }

    private static function tag_css($path) {
        return '<link rel="stylesheet" charset="utf-8" href="'.$path.'">';
    }

    private static function tag_js($path) {
        return '<script type="text/javascript" src="'.$path.'"></script>';
    }

    private static function jquery_tag_js() {
        return '<script src="'.self::$jquery_url.'" integrity="'.self::$jquery_sha.'" crossorigin="anonymous"></script>';
    }

}

?>
