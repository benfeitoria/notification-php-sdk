<?php
namespace Benfeitoria\Notification\SDK\Providers;

use Illuminate\Support\ServiceProvider;

class NotificationSDKServiceProvider extends ServiceProvider{

    public function boot(){
        $this->publishes([
            __DIR__.'/../Config/benfeitoria-notification.php' => config_path('benfeitoria-notification.php')
        ], 'config');


    }

    public function register()
    {

    }
}