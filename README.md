# Laravel Swagger Consoles Ui

## Installation

Install the package via composer:

```shell script
composer require arpanext/laravel-swagger-consoles-ui
```

Publish the assets files with:

```shell script
php artisan vendor:publish --provider=Arpanext\\Swagger\\Consoles\\Ui\\App\\Providers\\AppServiceProvider --tag="swagger-consoles-ui"
```

Update the config file in config/vendor/arpanext/swagger/consoles.php:

```php
return [
    'default' => [
        'url' => 'http://127.0.0.1:8000/api/v1/swagger/schemas',
    ],
];
```

```shell
php artisan route:list
```

```shell
+--------+----------+-----------------------------------+------------------------------+-----------------------------------------------------------------------------------+------------+
| Domain | Method   | URI                               | Name                         | Action                                                                            | Middleware |
+--------+----------+-----------------------------------+------------------------------+-----------------------------------------------------------------------------------+------------+
|        | GET|HEAD | swagger/consoles/{id}             | swagger.consoles.show        | Arpanext\Swagger\Consoles\Ui\App\Http\Controllers\Swagger\Consoles\ShowController |            |
+--------+----------+-----------------------------------+------------------------------+-----------------------------------------------------------------------------------+------------+
```

[http://127.0.0.1:8000/swagger/consoles/default](http://127.0.0.1:8000/swagger/consoles/default)

## Testing

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-consoles-ui --configuration=vendor/arpanext/laravel-swagger-consoles-ui/phpunit.xml --do-not-cache-result --coverage-text --coverage-html=coverage/html/laravel-swagger-consoles-ui
```
