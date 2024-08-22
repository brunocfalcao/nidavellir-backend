<?php

namespace Nidavellir\Backend;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutes();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'backend');

        View::composer('*', 'Nidavellir\Backend\Http\View\Composers\SidebarComposer');

        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components');
    }

    protected function loadRoutes()
    {
        $routesPath = __DIR__.'/../routes/web.php';

        Route::middleware([
            'web',
        ])
            ->group(function () use ($routesPath) {
                include $routesPath;
            });
    }
}
