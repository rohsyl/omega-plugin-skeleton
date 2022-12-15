<?php
namespace rohsyl\OmegaPlugin\[PluginName];

use rohsyl\OmegaCore\Utils\Common\Facades\Plugin as PluginManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class ServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('[PluginName]')
            ->hasConfigFile('[PluginName]')
            ->hasViews('omega-plugin-[PluginName]')
            ->hasRoute('web')
            ->hasMigrations([
                // list migration files here
            ])
            ;
    }

    public function packageBooted()
    {
        PluginManager::register(new Plugin());
    }
}