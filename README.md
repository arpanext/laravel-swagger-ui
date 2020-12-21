# Laravel Swagger Web Ui

## Installation

Install the package via composer:

```shell script
composer require arpanext/laravel-swagger-web-ui
```

Publish the assets files with:

```shell script
php artisan vendor:publish --provider=Arpanext\\SwaggerUi\\App\\Providers\\AppServiceProvider --tag="swagger-ui"
```

```shell
php artisan route:list
```

```shell
+--------+----------+-----------------------------------+------------------------------+----------------------------------------------------------------------+------------+
| Domain | Method   | URI                               | Name                         | Action                                                               | Middleware |
+--------+----------+-----------------------------------+------------------------------+----------------------------------------------------------------------+------------+
|        | GET|HEAD | api/v1/swagger/hub                | api.v1.swagger.hub.index     | Arpanext\SwaggerUi\App\Http\Controllers\Api\Hub\IndexController      |            |
|        | GET|HEAD | swagger                           | swagger.index                | Arpanext\SwaggerUi\App\Http\Controllers\Consoles\IndexController     |            |
+--------+----------+-----------------------------------+------------------------------+----------------------------------------------------------------------+------------+
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger/hub
```

[Swagger UI](http://127.0.0.1:8000/swagger)

## Testing

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-web-ui --configuration=vendor/arpanext/laravel-swagger-web-ui/phpunit.xml --do-not-cache-result --coverage-text --coverage-html=coverage/html/laravel-swagger-web-ui
```
