<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Events;
use Calendar;
use App\User;
use App\Menu;
use App\BleusMenu;
use App\PostForum;
use App\ComitePv;
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
            if(\Auth::check() and \Auth::user()->droit <= 7)
            {
                $check_forum = PostForum::orderBy('created_at', 'desc')->first()->id - \Auth::user()->forum_check;
                $check_pv_comite = ComitePv::orderBy('created_at', 'desc')->first()->id - \Auth::user()->pv_comite_check;
                $view->with(['menus' => Menu::navMenu(), 'check_forum' => $check_forum, 'check_pv_comite' => $check_pv_comite]);
            }
            else
            {
                $view->with(['menus' => Menu::navMenu()]);
            }
            
        });
        view()->composer('bleus.layouts.bleusnavbar', function($view){
            if(\Auth::check() and \Auth::user()->droit <= 7)
            {
                $check_forum = PostForum::orderBy('created_at', 'desc')->first()->id - \Auth::user()->forum_check;
                $check_pv_comite = ComitePv::orderBy('created_at', 'desc')->first()->id - \Auth::user()->pv_comite_check;
                $view->with(['bleusmenus' => BleusMenu::navMenu(), 'check_forum' => $check_forum, 'check_pv_comite' => $check_pv_comite]);
            }
            else
            {
                $view->with(['bleusmenus' => BleusMenu::navMenu()]);
            }
            
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
