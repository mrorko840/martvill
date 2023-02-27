<?php

namespace Modules\Razorpay\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Razorpay\Processor\PreProcessor;

class RazorpayServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('RazorHandler', function () {
            return new PreProcessor;
        });
    }
}
