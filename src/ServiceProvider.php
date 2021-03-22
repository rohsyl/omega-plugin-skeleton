<?php
namespace rohsyl\OmegaPlugin\[PluginName];

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as SP;
use rohsyl\OmegaCore\Utils\Common\Facades\Plugin as PluginManager;

class ServiceProvider extends SP
{

    public function register() {

    }

    public function boot() {

        $this->publishes([
            __DIR__.'/../resources/views/overt' => resource_path('views/vendor/omega-plugin-[PluginName]/overt'),
        ]);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/omega/plugin/[PluginName]'),
        ], 'public');

        // load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'omega-plugin-[PluginName]');

        PluginManager::register(Plugin::NAME, new Plugin());
    }
}