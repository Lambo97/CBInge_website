<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Events;
use Calendar;
use App\User;
use App\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        view()->composer('layouts.footer', function($view){
            if(\Auth::check() and \Auth::user()->droit < 7)
            {
                \Auth::user()->update([
                    'last_login_at' => date("Y-m-d H:i:s")
                ]);
            }
            
            $view->with(['connectedNow' => User::connectedNow(), 'connectedToday' => User::connectedToday(), 'anniversaires' => User::anniversaire()]);
        });

        view()->composer('layouts.navbar', function($view){
            $view->with(['menus' => Menu::navMenu()]);
        });

        View::composer('layout', function ($view) {
            $events = Events::get();
            $event_list = [];
            foreach ($events as $key => $event){
                $event_list[] = Calendar::event(
                    $event->event_name,
                    true,
                    new \DateTime($event->start_date),
                    new \DateTime($event->end_date)
                );
            }
        
            $view->with('calendar_details', Calendar::addEvents($event_list));
        });
    }
}
