<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    public function demo(){
        return view('demo');
    }
}
