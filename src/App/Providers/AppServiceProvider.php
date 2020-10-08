<?php

namespace Arpanext\SwaggerUi\App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->router->group(
            [
                'namespace' => 'Arpanext\SwaggerUi\App\Http\Controllers\Consoles',
                'middleware' => [
                    //
                ],
                'as' => 'swagger-ui.consoles.',
                'prefix' => '/swagger-ui/consoles',
            ],
            function () {
                require __DIR__ . '/../../routes/web.php';
            }
        );

        $this->app->router->group(
            [
                'namespace' => 'Arpanext\SwaggerUi\App\Http\Controllers\Api\Schemas',
                'middleware' => [
                    //
                ],
                'as' => 'api.v1.swagger-ui.schemas.',
                'prefix' => '/api/v1/swagger-ui/schemas',
            ],
            function () {
                require __DIR__ . '/../../routes/api.php';
            }
        );

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Arpanext/SwaggerUi');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../public/components' => public_path('vendor/arpanext/swagger-ui/components'),
            ], 'swagger-ui');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
