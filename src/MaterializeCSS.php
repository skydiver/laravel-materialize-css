<?php

    namespace Skydiver\LaravelMaterializeCSS;

    use Illuminate\Support\Facades\Facade;

    class MaterializeCSS extends Facade {

        protected static function getFacadeAccessor() { return 'materialize-css'; }

    }

?>