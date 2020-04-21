<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Cgy extends Model
{
    protected $table = 'cgies';

    protected function items(){
        //一對多簡易寫法
        return $this->hasMany(Item::class);
        //一對多完整寫法
        //return $this->hasMany(Item::class,"cgy_id","id");
    }

    //Accessor
    public function getPicAttribute($value){
        if(substr( $value, 0, 4 ) === "http" || substr( $value, 0, 5 ) === "https" ){
            return $value;
        }else{
            return Voyager::image($value);
        }
    }
}
