<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

class AppServiceProvider extends ServiceProvider
{
 /**
  * Register any application services.
  *
  * @return void
  */
 public function register()
 {
  //修改Model Factory所使用的Faker之預設語系為繁中
  $this->app->singleton(\Faker\Generator::class, function () {
   return \Faker\Factory::create('zh_TW');
  });
 }

 /**
  * Bootstrap any application services.
  *
  * @return void
  */
 public function boot()
 {
    //提供資料給所有視圖
    View()->share('global_tel', '0212345678');
    if(Auth::check()){
        View()->share('cartContent', \Cart::getContent());
        View()->share('cartQty',\Cart::session(Auth()->user()->id)->getTotalQuantity());
    }else{
        View()->share('cartContent', []);
        View()->share('cartQty', 0);
    }

    //提供資料給部分視圖
    view()->composer(['demo.demoblade', 'shop'], function ($view) {
        $view->with('partial_tel', '0223456789');
    });
 }

 public function url($uri)
 {
    $protocol = Request::server('HTTP_X_FORWARDED_PROTO');
    return $protocol .'://themes.semicolonweb.com/html/canvas/' . $uri;
 }

}
