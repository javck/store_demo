{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<div class="container clearfix">
    @php
    $isTrue = false;
    $items = [
                ['title' => 'PS4', 'price' => 12000],
                ['title' => 'NS' , 'price' => 9000],
                ['title' => 'XBOX One' , 'price' => 15000],
            ];
    $items2 = [];
    $html = "<a href='http://goblinlab.org'>哥布林程式教育學苑</a>";
    $j = 0;
    @endphp

    <h3>for迴圈</h3>
    @for ($i = 0; $i < count($items); $i++)
        {{ $items[$i]['title']  . " " . $items[$i]['price'] }}
    @endfor

    <h3>while迴圈</h3>
    @while ($isTrue)

    @endwhile

    <h3>foreach迴圈</h3>
    @foreach ($items as $item)
        {{ $item['title']  . " " . $item['price'] }}
    @endforeach

    <h3>forelse迴圈</h3>
    @forelse ($items2 as $item)
        {{ $item['title']  . " " . $item['price'] }}
    @empty
        <span>沒有任何商品</span>
    @endforelse

    <h3>迴圈的loop參數</h3>
    @foreach ($items as $item)

        index:{{ $loop->index }}{{-- 索引 --}}
        iteration:{{ $loop->iteration }}{{-- 第幾個 --}}
        remaining:{{ $loop->remaining }}{{-- 還有幾個 --}}
        count:{{ $loop->count }}{{-- 總共幾個 --}}
        last:{{ $loop->last }}{{-- 是否最後一個 --}}
        first:{{ $loop->first }}{{-- 是否第一個--}}
        depth: {{ $loop->depth }}{{-- 幾層迴圈 --}}
        parent: {{ $loop->parent }}{{-- 父標籤 --}}
        <br>
    @endforeach

    <h3>輸出方式：</h3>
    {{ $html }}<br>
    {!! $html !!}

    <h3>全域共用變數</h3>
    global_tel:{{ $global_tel }}<br>
    partial_tel:{{ $partial_tel }}

</div>
@stop

