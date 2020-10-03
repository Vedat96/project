<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Game;



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
        Schema::defaultStringLength(191);
    

        if(Auth::check()){
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => password_hash($request->input('password'),PASSWORD_BCRYPT)

            ]);
        }

        View::share('id','$user_id');
        View::share('','$user');

        View::share('games', '$games');



        // $users = User::all();

            // $user = User::find($user->id );
            

            // View::share('id', $user->id);

        // View::composer('*', function($view){
        //     $view->with('auth',Auth::user())
        // });

        // View::composer('*', function ($view) {
        //     $view->with('games',$games);
        // });


        View::composer('*', function ($view) {
            $view->with('auth',Auth::user());
        });
    }
}