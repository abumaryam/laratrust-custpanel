<?php

namespace Abumaryam\LaratrustCustpanel;

use Illuminate\Support\ServiceProvider;

class LaratrustCustpanelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Memberitahu Laravel untuk me-load route dari paket kita
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Memberitahu Laravel untuk me-load view dari paket kita
        // dan memberinya namespace 'laratrust-custpanel'
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laratrust-custpanel');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laratrust-custpanel'),
        ], 'laratrust-panel-views');
    }

    public function register()
    {
        //
    }
}
