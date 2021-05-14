<?php

namespace App\Providers;

use App\Http\View\Composers\ProfileComposer;
use App\Models\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        //
        $email = Config::where('konfig','email')->first();
        view()->share('email',$email->isi);
        $telp = Config::where('konfig','telp')->first();
        view()->share('telp',$telp->isi);
        // View::composer('profile', ProfileComposer::class);
    }
}
