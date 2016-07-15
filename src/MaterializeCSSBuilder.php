<?php

    namespace Skydiver\LaravelMaterializeCSS;

    class MaterializeCSSBuilder {

        private static $file_css     = '/materialize-css/css/materialize.css';
        private static $file_css_min = '/materialize-css/css/materialize.min.css';
        private static $file_js      = '/materialize-css/js/materialize.js';
        private static $file_js_min  = '/materialize-css/js/materialize.min.js';
        private static $file_jquery  = 'jquery-2.1.1.min.js';


        public static function include_full() {
            $return  = self::include_css();
            $return .= self::tag_js('//code.jquery.com/'.self::$file_jquery);
            $return .= self::include_js();
            return $return;
        }

        public static function include_all() {
            $return  = self::include_css();
            $return .= self::include_js();
            return $return;
        }

        public static function include_css() {
            return self::tag_css(asset(self::$file_css_min));
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
            return '<link rel="stylesheet" href="'.$path.'">';
        }

        private static function tag_js($path) {
            return '<script src="'.$path.'"></script>';
        }

    }

?>