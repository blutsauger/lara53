<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use Auth;
use Carbon\Carbon;

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
        $age = Carbon::createFromDate(1992, 11, 9)->age;
        
        View::share('age', $age);
        View::share('myname', 'mutator');
        //View::share('auth', Auth::user());

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
