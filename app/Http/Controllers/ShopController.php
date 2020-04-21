<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ShopController extends Controller
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

        $cgies = \App\Cgy::where('enabled',true)->orderBy('sort','asc')->get();
        $items = \App\Item::where('enabled',true)->orderBy('created_at','asc')->limit(4)->get();
        $sliders = \App\Element::where('page','shop')->where('position','slider')->basic()->get();
        //compact()能夠幫你把變數打包成一個陣列，變數名稱作為鍵
        return view('shop', compact('item_name','price','title','cgies','items','sliders')); //用view()的第二參數搭配compact()傳遞參數包
        //return view('shop'); //沒傳變數的版本，現在會報錯
    }

    public function addCart(Request $request,$productId){
        if (Auth::check()) {
            $item      = Item::findOrFail($productId);
            $rowId     = $productId;
            $userID    = Auth::user()->id;

            //將商品1放入購物車
            \Cart::session($userID)->add(array(
                'id' => $rowId,
                'name' => $item->title,
                'price' => $item->price,
                'quantity' => 1,
                'attributes' =>  array(),
                'associatedModel' => $item
            ));
            return redirect('/shop');
        }else{
            return redirect('/login');
        }
    }

    public function updateCart(Request $request,$productId){
        if (Auth::check()) {
            $item      = Item::findOrFail($productId);
            $rowId     = $productId;
            $userID    = Auth::user()->id;

            //更新購物車內商品數量
            \Cart::session($userID)->update($rowId,array(
                'quantity' => -10, //數量更新多少而不是設為多少，-10意思是扣掉10個
            ));
            return redirect('/showCart');
        }else{
            return redirect('/login');
        }
    }

    public function removeCart(Request $request,$productId){
        if (Auth::check()) {
            $item      = Item::findOrFail($productId);
            $rowId     = $productId;
            $userID    = Auth::user()->id;

            //移除商品
            \Cart::session($userID)->remove($rowId);
            return redirect('/showCart');
        }else{
            return redirect('/login');
        }
    }

    public function showCart(Request $request){
        if(Auth::check()){
            //取得購物車內容
            $content = \Cart::session(Auth()->user()->id)->getContent();
            return $content;
            //取用屬性參考，echo不能用，只做範例
//             foreach($content as $row) {
//                 echo $row->id; // row ID
//                 echo $row->name;
//                 echo $row->quantity;
//                 echo $row->price;
//                 echo $row->attributes; //額外屬性
//                 echo $item->associatedModel->id; // 取得商品模型實例的流水號
//                 echo $item->associatedModel->title; // 取得商品模型實例的名稱
//                 echo $item->associatedModel->desc; // 取得商品模型實例的描述
//             }

        }else{
            return redirect('/login');
        }
    }

    public function checkCart(Request $request){
        if (Auth::check()) {
            $userID    = Auth::user()->id;

            //確認購物車是否為空的
            $isEmpty = \Cart::session($userID)->isEmpty();
            if($isEmpty){
                return "購物車是空的";
            }else{
                //取得購物車的商品數量
                return \Cart::session($userID)->getTotalQuantity() . '個商品';

            }
        }else{
            return redirect('/login');

        }
    }

    public function showTotal(Request $request){
        if (Auth::check()) {
            $userID    = Auth::user()->id;
            //取得小計
            $subtotal = \Cart::session($userID)->getSubTotal();
            //取得總計
            $total = \Cart::session($userID)->getTotal();

            return "Subtotal:$subtotal,Total:$total";
        }else{
            return redirect('/login');

        }
    }

    public function clearCart(Request $request){
        if (Auth::check()) {
            $userID    = Auth::user()->id;
            //清空購物車
            \Cart::session($userID)->clear();
            return redirect('/showCart');
        }else{
            return redirect('/login');

        }
    }

    //送出訂單
    public function checkout(Request $request){
        if (Auth::check()) {
            $userID    = Auth::user()->id;
            //建立訂單
            $order = \App\Order::create([
                'user_id' => $userID
            ]);

            //建立訂單明細
            $cartContent = \Cart::session($userID)->getContent();
            foreach ($cartContent as $row) {
                \App\OrderItem::create([
                    'order_id' => $order->id,
                    'item_id' => $row->id,
                    'qty' => $row->quantity
                ]);
            }
            //清空購物車
            \Cart::session($userID)->clear();
            flash('訂單已送出')->success()->important();

            return redirect('/shop');
        }else{
            return redirect('/login');

        }
    }

}
