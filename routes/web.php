<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//回傳字串
Route::get('/hello',function(){
    return "Hello,World!";
});

//回傳視圖
Route::get('/', 'HomeController@index');

//Match，符合多種請求方法
Route::match(['get', 'post'], '/match', function() {
    return "Match Method";
});

//符合所有請求方法
Route::any('/any', function() {
    return "Any";
});

//指派給控制器的某個Action
Route::get('/home','HomeController@index');

Route::get('/demo','HomeController@demo');

Route::get('/shop','HomeController@shop');

//測試區路由=================================================
//測試新增資料
Route::get('/addItem','ItemController@store');
//測試更新資料
Route::get('/updateItem/{item}','ItemController@update');
//測試刪除資料
Route::get('/deleteItem/{item}','ItemController@destroy');
//=========================================================

//指派給控制器的某個Action，限定登入才能訪問
//Route::get('/home','HomeController@index')->middleware('auth');

//傳送單一參數
// Route::get('/items/{id}',function($id){
//     return "你購買的是第" . $id . "個商品";
// });

// //傳送多個參數
// Route::get('/items/{id}/{qty}', function ($id,$qty) {
//  return "你購買的是第" . $id . "個商品，共買了" . $qty . "個";
// });

// //參數非必填
// Route::get('/items/{id?}', function ($id = 1) {
//  return "你購買的是第" . $id . "個商品";
// });

//Route Model Binding
Route::get('/users/{user}',function(\App\User $user){
    return $user;
});


Route::resource('items', 'ItemController');

Route::get('/items/showCgy/{item}','ItemController@showCgy');
Route::get('/cgies/showItems/{cgy}','CgyController@showItems');
Route::get('/items/showOrders/{item}','ItemController@showOrders');
Route::get('/orders/showItems/{order}','OrderController@showItems');
Route::get('/orders/showContent/{order}','OrderController@showContent');

//Voyager套件加入的規則
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Accessor && Mutator==================================================

//測試Accessor
// Route::get('/accessor',function(){
//     $user = \App\User::findOrFail(1);
//     return $user->avatar;
// });

//測試魔法屬性Accessor
// Route::get('/magicAccessor',function(){
//     $user = \App\User::findOrFail(1);
//     return $user->roleName;
// });

//測試Mutator
// Route::get('/mutator',function(){
//     $user = \App\User::findOrFail(1);
//     $user->name = 'zack';
//     $user->save();
//     $user2 = \App\User::findOrFail(1);
//     return $user2->name;
// });
//測試屬性轉型
// Route::get('/casting',function(){
//     $item = \App\Item::findOrFail(1);
//     return gettype($item->price);
// });
//測試屬性轉型2
// Route::get('/casting2',function(){
//     $item = \App\Item::findOrFail(1);
//     return $item->toArray();
// });

//Session工作階段==================================
//存資料到Session
//Route::get('storesession','SessionController@store');

//從Session裡頭取資料
//Route::get('getsession','SessionController@get');

//從Session裡頭取資料
//Route::get('pullsession','SessionController@pull');

//確認Session裡頭是否有某筆資料
//Route::get('hassession','SessionController@exist');

//Route::get('deletesession','SessionController@delete');

Auth::routes();
// Route::group(['middleware' => ['web']], function () {
//     Auth::routes();
//     Route::get('login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'login']);
//     Route::post('login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'postLogin']);
//     Route::post('logout', ['uses' => 'Auth\VoyagerAuthController@logout', 'as' => 'logout']);
//     Route::get('admin/login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'voyager.login']);
//     Route::post('admin/login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'voyager.postlogin']);
//     Route::post('admin/logout', ['uses' => 'Auth\VoyagerAuthController@logout', 'as' => 'voyager.logout']);
// });


Route::get('/home', 'HomeController@index')->name('home');

//社群登入路由
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/policy','HomeController@policy');
