<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    protected $table = 'cgies';

    protected function items(){
        //一對多簡易寫法
        return $this->hasMany(Item::class);
        //一對多完整寫法
        //return $this->hasMany(Item::class,"cgy_id","id");
    }
}
