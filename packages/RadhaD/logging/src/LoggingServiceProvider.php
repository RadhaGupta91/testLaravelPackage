<?php
namespace RadhaD\logging;
use Illuminate\Support\ServiceProvider;

class LoggingServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'logging');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register()
    {
    }
}
?>