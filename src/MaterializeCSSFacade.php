<?php

    namespace Skydiver\LaravelMaterializeCSS;

    use Illuminate\Support\Facades\Facade;

    class MaterializeCSSFacade extends Facade {

        protected static function getFacadeAccessor() { return 'materialize-css'; }

    }

?>