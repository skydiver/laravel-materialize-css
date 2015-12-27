# laravel-materialize-css
Materialize CSS Framework for Laravel 5 [http://materializecss.com/]



## Installation

* Require this package in your composer.json and run composer update.
```
    "skydiver/laravel-materialize-css": "dev-master"
```

* After updating composer, add ServiceProvider to the providers array in config/app.php
```php
    Skydiver\LaravelMaterializeCSS\MaterializeCSSServiceProvider::class,
```

* Add Facade to the aliases array in config/app.php
```php
	'MaterializeCSS' => Skydiver\LaravelMaterializeCSS\MaterializeCSS::class,
```

*  Then publish the package's assets to public folder:
```
    $ php artisan vendor:publish --tag=materializecss --force
```



## Updates
You can re-publish the assets automatically when composer updated the package:

* In your composer.json, go to **scripts** > **post-update-cmd** section, add the next line:
```
    "php artisan vendor:publish --tag=materializecss --force"
```

* The code will look similar to:
```
    "post-update-cmd": [
        "php artisan optimize",
        "php artisan vendor:publish --tag=materializecss --force"
    ],
```



## Usage

There are differents methods to include Materialize CSS assets:

* **include_full()**
```php
    {!! MaterializeCSS::include_full() !!}
```
```html
    <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
```

* **include_all()**
```php
    {!! MaterializeCSS::include_all() !!}
```
```html
    <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
    <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
```

* **include_css()**
```php
    {!! MaterializeCSS::include_css() !!}
```
```html
    <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
```

* **include_js()**
```php
    {!! MaterializeCSS::include_js() !!}
```
```html
    <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
```

* **include_secure_css()**
```php
    {!! MaterializeCSS::include_secure_css() !!}
```
```html
    <link rel="stylesheet" href="https://yourdomain.com/materialize-css/css/materialize.min.css">
```

* **include_secure_js()**
```php
    {!! MaterializeCSS::include_secure_js() !!}
```
```html
    <script src="https://yourdomain.com/materialize-css/js/materialize.min.js"></script>
```

* **get_url_css($full=false, $secure=false)**
```php
    {!! MaterializeCSS::get_url_css() !!}
    {!! MaterializeCSS::get_url_css(true, false) !!}
    {!! MaterializeCSS::get_url_css(false, true) !!}
    {!! MaterializeCSS::get_url_css(true, true) !!}
```
```html
    /materialize-css/css/materialize.min.css
    http://yourdomain.com/materialize-css/css/materialize.min.css
    /materialize-css/css/materialize.min.css
    https://yourdomain.com/materialize-css/css/materialize.min.css
```

* **get_url_js($full=false, $secure=false)**
```php
    {!! MaterializeCSS::get_url_js() !!}
    {!! MaterializeCSS::get_url_js(true, false) !!}
    {!! MaterializeCSS::get_url_js(false, true) !!}
    {!! MaterializeCSS::get_url_js(true, true) !!}
```
```html
    /materialize-css/js/materialize.min.js
    http://yourdomain.com/materialize-css/js/materialize.min.js
    /materialize-css/js/materialize.min.js
    https://yourdomain.com/materialize-css/js/materialize.min.js
```
