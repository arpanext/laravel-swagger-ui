<?php

namespace Arpanext\Swagger\Consoles\Ui\App\Providers;

use Illuminate\Support\Facades\Config;
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
                'namespace' => 'Arpanext\Swagger\Consoles\Ui\App\Http\Controllers',
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

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'Arpanext/Swagger/Consoles/Ui');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../public/components' => public_path('vendor/arpanext/swagger/consoles/ui/components'),
            ], 'swagger-consoles-ui');

            $this->publishes([
                __DIR__ . '/../../config' => config_path('vendor/arpanext'),
            ], 'swagger-consoles-ui');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Config::get('vendor.arpanext.swagger.consoles.ui.consoles') ?: $this->mergeConfigFrom(__DIR__ . '/../../config/swagger/consoles/ui/consoles.php', 'vendor.arpanext.swagger.consoles.ui.consoles');
    }
}
