<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ShopController extends Controller
{

    public function showCart(Request $request){
        if(Auth::check()){
            //取得購物車內容
            $content = \Cart::session(Auth()->user()->id)->getContent();
            return $content;
            //取用屬性參考，echo不能用，只做範例
//             foreach($content as $row) {
//                 echo $row->id; // row ID
//                 echo $row->name;
//                 echo $row->qty;
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

    public function addCart(Request $request){
        if (Auth::check()) {
            $productId = 1;
            $item      = Item::findOrFail($productId);
            $rowId     = $productId;
            $product2Id = 2;
            $item2      = Item::findOrFail($product2Id);
            $row2Id     = $product2Id;
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
            //將商品2放入購物車
            \Cart::session($userID)->add(array(
                'id' => $row2Id,
                'name' => $item2->title,
                'price' => $item2->price,
                'quantity' => 1,
                'attributes' =>  array(),
                'associatedModel' => $item2
            ));
            return redirect('/showCart');
        }else{
            return redirect('/login');
        }
    }

    public function updateCart(Request $request){
        if (Auth::check()) {
            $productId = 1;
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

    public function removeCart(Request $request){
        if (Auth::check()) {
            $productId = 1;
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

    public function checkCart(Request $request){
        if (Auth::check()) {
            $productId = 1;
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

}
