<?php

    namespace Skydiver\LaravelMaterializeCSS;

    use Illuminate\Support\ServiceProvider;

    class MaterializeCSSServiceProvider extends ServiceProvider {

        protected $defer = true;

        public function register() {
            $this->publishes([
                __DIR__.'/../assets' => public_path('materialize-css'),
            ], 'materializecss');
            $this->registerMaterializeCSSBuilder();
            $this->app->alias('materialize-css', 'Skydiver\LaravelMaterializeCSS\MaterializeCSSBuilder');
        }

        protected function registerMaterializeCSSBuilder() {
            $this->app->singleton('materialize-css', function($app) {
                return new MaterializeCSSBuilder($app['url']);
            });
        }

        public function provides() {
            return array('materialize-css');
        }

    }

?>