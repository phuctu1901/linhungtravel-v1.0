<?php

namespace App\Providers;

use App\Footer;
use App\Info;
use App\Page;
use App\PostCategory;
use App\Slider;
use App\TourCategory;
use App\TourCategoryParent;
use App\WebConfig;
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
        $sliders=Slider::where('isActive',1)->get();
        $tour_categories=TourCategory::all('id', 'title', 'parent_id','slug','count');
        $tour_parents=TourCategoryParent::all('id', 'title');
        $post_categories=PostCategory::all();
        $config=WebConfig::all()->first();
        $pages=Page::where('isActive',1)->get();
        $footer=Footer::all();
        $info=Info::all()->first();
        view()->share(['tour_categories'=>$tour_categories, 'tour_parents'=>$tour_parents, 'sliders'=>$sliders,'footer'=>$footer,'post_categories'=>$post_categories,'config'=>$config,'menu_pages'=>$pages,'info'=>$info]);
    }
}
