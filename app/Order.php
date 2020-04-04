<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 protected function items()
 {
  //多對多關係完整寫法
  return $this->belongsToMany(Item::class, "order_item")->withPivot('qty', 'desc');
  //多對多關係簡易寫法
  //return $this->belongsToMany(Item::class)->withPivot('qty', 'desc');
 }
}
