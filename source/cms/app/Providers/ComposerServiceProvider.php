<?php namespace App\Providers;

use Carbon\Carbon;
use View;
use Illuminate\Support\ServiceProvider;
use App\Models\Order;

class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('profile', 'App\Http\ViewComposers\ProfileComposer');

        // Using Closure based composers...
        View::composer('*', function ($view) {

        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}