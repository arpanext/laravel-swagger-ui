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
+--------+----------+-----------------------------------+-------------------------------+----------------------------------------------------------------------+------------+
| Domain | Method   | URI                               | Name                          | Action                                                               | Middleware |
+--------+----------+-----------------------------------+-------------------------------+----------------------------------------------------------------------+------------+
|        | GET|HEAD | api/v1/swagger/consoles           | api.v1.swagger.consoles.index | Arpanext\SwaggerUi\App\Http\Controllers\Api\Consoles\IndexController |            |
|        | GET|HEAD | api/v1/swagger/consoles/{id}      | api.v1.swagger.consoles.show  | Arpanext\SwaggerUi\App\Http\Controllers\Api\Consoles\ShowController  |            |
|        | GET|HEAD | swagger/consoles                  | swagger.consoles.index        | Arpanext\SwaggerUi\App\Http\Controllers\Consoles\IndexController     |            |
|        | GET|HEAD | swagger/consoles/{id}             | swagger.consoles.show         | Arpanext\SwaggerUi\App\Http\Controllers\Consoles\ShowController      |            |
+--------+----------+-----------------------------------+-------------------------------+----------------------------------------------------------------------+------------+
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger/consoles
```

[http://127.0.0.1:8000/swagger/consoles](http://127.0.0.1:8000/swagger/consoles)

## Testing

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-web-ui --configuration=vendor/arpanext/laravel-swagger-web-ui/phpunit.xml --do-not-cache-result --coverage-text --coverage-html=coverage/html/laravel-swagger-web-ui
```
