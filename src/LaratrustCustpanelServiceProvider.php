LaratrustCustpanelServiceProvider

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
        // dan memberinya namespace 'laratrust-panel'
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laratrust-panel');
    }

    public function register()
    {
        //
    }
}
