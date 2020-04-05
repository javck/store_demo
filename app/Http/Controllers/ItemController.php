<?php

namespace App\Http\Controllers;

use App\Item;
use App\Cgy;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{

    public function __construct()
    {
        //保護控制器裡的所有方法均需要登入才能訪問，除了index
        //$this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "商品列表";

        //查詢items表格的所有資料
        $items = Item::get();

        //查詢items表格的所有資料
        //$items = Item::all();

        //查詢items表格的所有資料，用id排序從大排到小
        //$items = Item::orderBy('id', 'desc')->get();

        return $items;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cgies = Cgy::pluck('title','id');
        return view('items.create',compact('cgies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        //取得資料示範===================================
        //取得所有資料
        //dd($request->all());
        //只取title.price和enabled欄位
        //dd($request->only('title','price','enabled'));
        //取得除_token外的所有欄位
        //dd($request->except('token'));

        //驗證資料示範===================================
        //控制器驗證
        // $this->validate($request,[
        //     'title' => 'required|max:5',
        //     'desc' => 'required'
        // ]);
        // dd('驗證成功');

        //手動驗證
        // $validator = Validator::make($request->all(),
        // [
        //     'title' => 'required|max:5',
        //     'desc' => 'required'
        // ]);
        // if($validator->fails()){
        //     return redirect(route('items.create'))->withErrors($validator)->withInput();
        // }
        // dd('驗證成功');


        //建立資料示範===================================
        //建立資料的第一種作法
        //$data = ['title' => 'PS4', 'pic_url' => 'http://demo.test/1.jpg', 'desc' => 'ps4的描述', 'price' => '12000'];
        //Item::create($data);

        //建立資料的第二種作法
        // $item = new Item();
        // $item->title = 'PS4';
        // $item->pic_url = 'http://demo.test/1.jpg';
        // $item->desc = 'ps4的描述';
        // $item->price = 12000;
        // $item->save();

        //建立資料的第三種作法
        // $item = new Item($data);
        // $item->save();
        Item::create($request->only(['title','pic_url','desc','price','enabled','cgy_id']));
        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "你購買的是第" . $id . "個商品";

        //用主鍵id查詢資料
        //$item = Item::find($id);

        //用主鍵id查詢資料，找不到就報錯
        //$item = Item::findOrFail($id);

        //下條件查詢，id欄位是$id，找出第一筆
        //$item = Item::where('id',$id)->first();

        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $cgies = Cgy::pluck('title','id');
        return view('items.update',compact('item','cgies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // $item->price = 20000;
        // $item->save();
        dd($request->all());
        $item->update($request->only(['title', 'pic_url', 'desc', 'price', 'enabled', 'cgy_id']));
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/items');
    }

    //顯示商品的分類
    public function showCgy(Item $item)
    {
        return $item->cgy;
    }

    //顯示商品屬於哪些訂單
    public function showOrders(Item $item)
    {
        return $item->orders;
    }
}
