<?php

namespace Arpanext\Swagger\Consoles\App\Providers;

use Config;
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
                'namespace' => 'Arpanext\Swagger\Consoles\App\Http\Controllers',
                'middleware' => [
                    //
                ],
                'as' => 'swagger.',
                'prefix' => '/swagger',
            ],
            function () {
                require __DIR__ . '/../../routes/web.php';
            }
        );

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Arpanext/Swagger/Consoles');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../public/components' => public_path('vendor/arpanext/swagger/consoles/components'),
            ], 'swagger-consoles');

            $this->publishes([
                __DIR__ . '/../../config' => config_path('vendor/arpanext'),
            ], 'swagger-consoles');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Config::get('vendor.arpanext.swagger.consoles.index') ?: $this->mergeConfigFrom(__DIR__ . '/../../config/swagger/consoles/index.php', 'vendor.arpanext.swagger.consoles.index');
    }
}
