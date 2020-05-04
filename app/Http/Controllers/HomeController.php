<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Notify;

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

    public function sendMail(){
        //撰寫收信人資料
        $to = collect([['name' => '哥布林',
                        'email' => 'info@goblinlab.org']]);

        //準備信件內容參數
        $params = ['title' => '恭喜得到報名優惠',
                    'content' => '請立刻到官網來查詢優惠內容，時間有限，敬請把握!!'];
        Mail::to( $to )->send( new Notify($params) );
        flash('已發信成功')->success()->important();
        return redirect('/shop');

    }
}
