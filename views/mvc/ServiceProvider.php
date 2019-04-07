<?php
/**
 * Created by PhpStorm.
 * User: cuongpm
 * Date: 7/23/18
 * Time: 10:30 AM
 */
namespace _namespace_;
use Illuminate\Support\ServiceProvider;
class _namespace_ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', _prefix_);
        $this->loadRoutesFrom(__DIR__ . '/router.php');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}