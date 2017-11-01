<?php
/**
 * Created by PhpStorm.
 * User: leonardom
 * Date: 10/31/17
 * Time: 3:30 PM
 */

namespace Hangar\LaravelErrorReporting\Providers;


use Illuminate\Support\ServiceProvider;
use Hangar\LaravelErrorReporting\Exceptions\Handler as THIExceptionHandler;


class LaravelErrorReportingServiceProvider extends ServiceProvider
{
    const INTERNAL_NAMESPACE = 'thi-laravel-error-reporting';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../../config/thi-laravel-error-reporting.php';

        $this->mergeConfigFrom($configPath, self::INTERNAL_NAMESPACE);
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', self::INTERNAL_NAMESPACE);

        $this->app->extend(\App\Exceptions\Handler::class, function ($handler, $app) {
            return new THIExceptionHandler($app); //($handler, $app['exceptions.repository']);
        });
    }

    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path(sprintf('%s.php', self::INTERNAL_NAMESPACE));
    }
}