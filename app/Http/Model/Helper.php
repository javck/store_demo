<?php
namespace App\Http\Model;

use Request;
class Helper
{
 public static function url($uri)
 {
    if (Request::secure()) {
        $protocol = 'https';
    }else{
        $protocol = 'http';
    }
    return $protocol . '://themes.semicolonweb.com/html/canvas/' . $uri;
 }
}
