# Laravel Swagger Consoles

## Installation

Install the package via composer:

```shell script
composer require arpanext/laravel-swagger-consoles
```

Publish the assets files with:

```shell script
php artisan vendor:publish --provider=Arpanext\\Swagger\\Consoles\\App\\Providers\\AppServiceProvider --tag="swagger-consoles"
```

Update the config file in config/vendor/arpanext/swagger/schemas/index.php:

```php
return [
    'swagger' => [
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
|        | GET|HEAD | swagger/consoles                  | swagger.consoles.index       | Arpanext\Swagger\Consoles\App\Http\Controllers\Swagger\Consoles\IndexController   |            |
|        | GET|HEAD | swagger/consoles/{id}             | swagger.consoles.show        | Arpanext\Swagger\Consoles\App\Http\Controllers\Swagger\Consoles\ShowController    |            |
+--------+----------+-----------------------------------+------------------------------+-----------------------------------------------------------------------------------+------------+
```

[http://127.0.0.1:8000/swagger/consoles](http://127.0.0.1:8000/swagger/consoles)

## Testing

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-consoles --configuration=vendor/arpanext/laravel-swagger-consoles/phpunit.xml --do-not-cache-result --coverage-text --coverage-html=coverage/html/laravel-swagger-consoles
```
