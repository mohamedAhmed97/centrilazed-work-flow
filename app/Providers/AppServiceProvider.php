<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;
use View;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        app()->singleton('lang', function() {
            if (session()->has('lang')) {
                return session()->get('lang');
            } else {
                return 'en';
            }
        });

        Schema::defaultStringLength(191);
        $settingEN = Setting::find(1);
        View::share('settingEN', $settingEN);
        $settingAR = Setting::find(2);
        View::share('settingAR', $settingAR);
        $settingTR = Setting::find(3);
        View::share('settingTR', $settingTR);
        $settingRO = Setting::find(4);
        View::share('settingRO', $settingRO);
        $settingPR = Setting::find(5);
        View::share('settingPR', $settingPR);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
