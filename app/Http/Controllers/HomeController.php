<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //顯示商店頁
    public function shop()
    {
        //$data = ['item_name' => "Laravel5.8從入門到實戰" , 'price' => 2400];
        //return view('shop')->with($data); //用with()傳遞參數包

        //return view('shop',$data); //用view()的第二參數傳遞參數包

        $item_name = "Laravel5.8從入門到實戰";
        $price     = 2400;
        $title = "Laravel";
        //compact()能夠幫你把變數打包成一個陣列，變數名稱作為鍵
        return view('shop', compact('item_name','price','title')); //用view()的第二參數搭配compact()傳遞參數包
        //return view('shop'); //沒傳變數的版本，現在會報錯
    }

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

    public function showflashMsg(){
        //flash('訊息內容!')->success(); //外框為綠色
        //flash('訊息內容!')->error(); //外框為紅色
        //flash('訊息內容!')->warning(); //外框為黃色
        //flash('訊息內容!')->overlay(); //以overlay來渲染
        //flash()->overlay('訊息內容','標題'); //以overlay來渲染，並加上標題
        //flash('訊息內容')->important();  //為Flash Message加上關閉功能
        flash('訊息內容')->error()->important(); //外框為紅色，為Flash Message加上關閉功能

        return view('demo.flashmessage');
    }
}
