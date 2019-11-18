<?php

namespace App\Providers;

use App\Gallery;
use App\News;
use App\Office;
use Illuminate\Support\ServiceProvider;

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
        /*$offices = Office::where('status',true)->get();
        $corporations = Gallery::where('type','corporation')->first()->gallery_detail;
        $news_latest = News::where('is_publish',true)->limit(4)->latest()->get();
        view()->share('offices',$offices);
        view()->share('corporations',$corporations);
        view()->share('news_latest',$news_latest);*/
    }
}
