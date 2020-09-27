<?php

namespace Arpanext\SwaggerUiLpkg\App\Providers;

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
                'namespace' => 'Arpanext\SwaggerUiLpkg\App\Http\Controllers\Consoles',
                'middleware' => [
                    //
                ],
                'as' => 'swagger-ui-lpkg.consoles.',
                'prefix' => '/swagger-ui-lpkg/consoles',
            ],
            function () {
                require __DIR__ . '/../../routes/web.php';
            }
        );

        $this->app->router->group(
            [
                'namespace' => 'Arpanext\SwaggerUiLpkg\App\Http\Controllers\Api\Schemas',
                'middleware' => [
                    //
                ],
                'as' => 'api.v1.swagger-ui-lpkg.schemas.',
                'prefix' => '/api/v1/swagger-ui-lpkg/schemas',
            ],
            function () {
                require __DIR__ . '/../../routes/api.php';
            }
        );

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Arpanext/SwaggerUiLpkg');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../public/components' => public_path('vendor/arpanext/swagger-ui-lpkg/components'),
            ], 'swagger-ui-lpkg');
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
