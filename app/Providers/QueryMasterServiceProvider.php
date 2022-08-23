<?php

namespace App\Providers;

use App\Query\Query;
use Illuminate\Support\ServiceProvider;

class QueryMasterServiceProvider extends ServiceProvider
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
        $this->app->bind('query',function(){
            return new Query();
        });
    }
}
