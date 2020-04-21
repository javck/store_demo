<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = "order_item";
    protected $fillable = ['order_id','item_id','qty'];
}
