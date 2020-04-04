<?php

namespace App\Providers;

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
        //修改Model Factory所使用的Faker之預設語系為繁中
        $this->app->singleton(\Faker\Generator::class,function(){
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
        View()->share('global_tel','0212345678');

        //提供資料給部分視圖
        view()->composer(['demo','shop'],function($view){
            $view->with('partial_tel','0223456789');
        });
    }
}
