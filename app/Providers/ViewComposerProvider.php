<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelsComposer;
use App\Models\Channel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //We will use view facade
        //if we want to share data in all views means every single view
            //View::share("channels",Channel::all());
        ///We can use view composer to share data with specific views
        /*View::composer(['post.create','channel.index'],function ($view){
            $view->with("channels",Channel::all());
        });
        */
        //We can also specify specifci directory so that in that direct all views can get this data
        /*
        View::composer(['post.*','channel.index'],function ($view){
            $view->with("channels",Channel::all());
        });
        */
        //We can put our logic in ceperate class
        View::composer(['post.*','channel.index'],ChannelsComposer::class);
    }
}
