<?php namespace Bantenprov\Portal;

use Illuminate\Support\ServiceProvider;
use Bantenprov\Portal\Console\Commands\PortalCommand;

/**
 * The PortalServiceProvider class
 *
 * @package Bantenprov\Portal
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
        //$this->publicHandle();
        $this->publicImageHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('portal', function ($app) {
            return new Portal;
        });

        $this->app->singleton('command.portal', function ($app) {
            return new PortalCommand;
        });

        $this->commands('command.portal');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'portal',
            'command.portal',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('portal.php');

        $this->mergeConfigFrom($packageConfigPath, 'portal');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'portal');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/portal'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'portal');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/portal'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => resource_path('/assets'),
        ], 'portal-assets');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
/*
	public function publicHandle()
    {
        $packagePublicPath = __DIR__.'/public';

        $this->publishes([
            $packagePublicPath => base_path('public')
        ], 'portal-public');
    }
 */
    public function publicImageHandle()
    {
        $packagePublicPath = __DIR__.'/public/images';

        $this->publishes([
            $packagePublicPath => base_path('public/images')
        ], 'portal-public-image');
    }
}
