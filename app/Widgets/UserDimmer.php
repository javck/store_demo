<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class UserDimmer extends BaseDimmer
{
 /**
  * The configuration array.
  *
  * @var array
  */
 protected $config = [];

 /**
  * Treat this method as a controller action.
  * Return view() or other content to display.
  */
 public function run()
 {
  //計算users表格的資料數
$count = Voyager::model('User')->count();
//$string = trans_choice('voyager::dimmer.user', $count);
$msg = "共有 $count 位使用者";

return view('voyager::dimmer', array_merge($this->config, [
 'icon'   => 'voyager-group', //ICON類別
 'title'  => "{$count}個使用者", //標題
 //'text'   => __('voyager::dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
 'text'   => $msg, //訊息內容
 'button' => [
  //'text' => __('voyager::dimmer.user_link_text'),
  'text' => '查看使用者', //按鈕文字
  'link' => route('voyager.users.index'), //按鈕連結
 ],
 'image'  => voyager_asset('images/widget-backgrounds/01.jpg'),
]));

 }

 /**
  * Determine if the widget should be displayed.
  *
  * @return bool
  */
 public function shouldBeDisplayed()
 {
  return Auth::user()->can('browse', Voyager::model('User'));
 }
}
