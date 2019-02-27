<?php

namespace sw\livedit\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use sw\livedit\Controllers\canvas;
use sw\livedit\Hello;
use sw\livedit\src\MainInterface;
class SwServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([__DIR__.'/../Public' => public_path('livedit'),], 'public');
      $this->publishes([__DIR__.'/../Resource/views/' => resource_path('views/swlivedit'),], 'views');
      $this->loadViewsFrom(__DIR__.'/../Resource/views/', 'swlivedit');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('sw\livedit\MainInterface', function ($app) {
        return new canvas();
      });
    }
}
