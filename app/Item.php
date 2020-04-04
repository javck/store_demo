<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title','desc','price','enabled','pic_url','sell_at'];
}
