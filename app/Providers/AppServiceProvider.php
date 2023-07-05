<?php

namespace App\Providers;

use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function ($app) {
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'z7wjmdrj8vrws5pw',
                    'publicKey' => 'pg2w4vcx58gy6sxb',
                    'privateKey' => 'ef3a9522df878605e0882a3fde674f6d',
                ]
            );
        });
    }
}
