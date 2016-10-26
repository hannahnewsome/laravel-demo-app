<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Forms\ProfileForm;
use App\Http\Controllers\ProfilesController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
