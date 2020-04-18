<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Session工作階段示範
class SessionController extends Controller
{
    
    //存資料到Session
    public function store(Request $request){
        $request->session()->put('name','zack');
        session(['name2' => 'zack']);
        return '已存入Session';
    }

    //從Session裡頭取資料
    public function get(Request $request){
        //return $request->session()->get('name','anonymous');
        //return session('name2','anonymous2');
        return $request->session()->all();
    }

    //從Sessin裡頭取資料並刪除
    public function pull(Request $request){
        return $request->session()->pull('name','anonymous');
    }

    //從Sessin裡頭刪除資料
    public function delete(Request $request){
        //刪除單筆資料
        //$request->session()->forget('name');
        //刪除多筆資料
        //$request->session()->forget(['name','name2']);
        //刪除所有資料
        $request->session()->flush();
    }

    //確認Session裡頭是否有某筆資料
    public function exist(Request $request){
        if($request->session()->exists('name')){
            return '存在';
        }else{
            return '不存在';
        }
        // if($request->session()->has('name')){
        //     return '存在';
        // }else{
        //     return '不存在';
        // }
    }


}
