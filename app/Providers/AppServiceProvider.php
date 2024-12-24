<?php

namespace App\Providers;

use App\Composer\TestComposer;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        View::share('site_title', 'Based Laravel');
//        View::composer(['home.test', 'home.contact'], TestComposer::class);
//
//        view()->composer('home.index', function (\Illuminate\View\View $view) {
//            $testValue = 'Test value';
//            $view->with('test1', $testValue);
//        });
//
//        \view()->composer('home.*', function (\Illuminate\View\View $view) {
//            $menu = '<ul>';
//            $menu .= '<li><a href="' . route('home.index') . '">Home</a></li>';
//            $menu .= '<li><a href="' . route('home.test') . '">Test</a></li>';
//            $menu .= '<li><a href="' . route('home.contact') . '">Contact</a></li>';
//            $menu .= '</ul>';
//            $view->with('menu',$menu);
//        });

//        \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::except([
//            'posts'
//        ]);
    }
}
