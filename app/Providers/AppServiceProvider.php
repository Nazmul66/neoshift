<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Models\BasicInfo;
use App\Models\Banner;
use App\Models\Counter;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\About;
use App\Models\Blog;
use App\Models\PortfolioCategory;
use App\Models\PortfolioManage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('*', function ($view)
        {
            $settings                = BasicInfo::first();
            $banner                  = Banner::first();
            $counter                 = Counter::first();
            $about                   = About::first();
            $testimonials            = Testimonial::where('status', 1)->get();
            $teams                   = Team::where('status', 1)->get();
            $blogs                   = Blog::where('status', 1)->get();
            $portfolioCategories     = PortfolioCategory::where('status', 1)->get();
            $portfolioManages        = PortfolioManage::where('status', 1)->get();

            $view->with([
                'settings'               => $settings,
                'banner'                 => $banner,
                'counter'                => $counter,
                'testimonials'           => $testimonials,
                'teams'                  => $teams,
                'about'                  => $about,
                'blogs'                  => $blogs,
                'portfolioCategories'    => $portfolioCategories,
                'portfolioManages'       => $portfolioManages,
            ]);
    
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
