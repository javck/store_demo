<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //顯示Dashboard頁
    public function index()
    {
        return view('home');
    }

    //顯示Blade示範頁
    public function demo(){
        return view('demo.demoblade');
    }

    //顯示政策頁
    public function policy(){
        return view('policy');
    }

    public function localized(){
        return view('demo.localized');
    }

    public function showflashMsg(){
        flash('訊息內容!')->success(); //外框為綠色
        //flash('訊息內容!')->error(); //外框為紅色
        //flash('訊息內容!')->warning(); //外框為黃色
        //flash('訊息內容!')->overlay(); //以overlay來渲染
        //flash()->overlay('訊息內容','標題'); //以overlay來渲染，並加上標題
        //flash('訊息內容')->important();  //為Flash Message加上關閉功能
        //flash('訊息內容')->error()->important(); //外框為紅色，為Flash Message加上關閉功能

        return view('demo.flashmessage');
    }
}
