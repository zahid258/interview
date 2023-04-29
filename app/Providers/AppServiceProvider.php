<?php

namespace App\Providers;

use App\billing\BankPaymentGateway;
use App\billing\CreditPaymentGateway;
use App\billing\PaymentGatewayContract;

use App\mixins\StrMixins;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
