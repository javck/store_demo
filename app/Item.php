<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Voyager;

class Item extends Model
{
    use Translatable;

    protected $fillable = ['title','desc','price','enabled','pic_url','sell_at','cgy_id'];

    protected $translatable = ['title', 'desc'];
    //示範屬性轉型
    // protected $casts = [
    //     'price' => 'string',
    //     'created_at' => 'datetime:Y-m-d'
    // ];

    //該商品的分類
    protected function cgy(){
        //一對一關係完整寫法
        //return $this->belongsTo(Cgy::class, 'cgy_id', 'id');
        //一對一關係簡易寫法
        return $this->belongsTo(Cgy::class);
    }

    //該商品屬於哪些訂單
    protected function orders(){
        //多對多關係完整寫法
        return $this->belongsToMany(Order::class,"order_item");
        //多對多關係簡易寫法
        //return $this->belongsToMany(Order::class);

    }

    public function getPicUrlAttribute($value){
        if(substr( $value, 0, 4 ) === "http" || substr( $value, 0, 5 ) === "https" ){
            return $value;
        }else{
            return Voyager::image($value);
        }
    }



}
