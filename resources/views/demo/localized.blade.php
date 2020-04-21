{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
    <div class="container clearfix">
        <p>
            {{ __('demo.hello') }}
        </p>
        <p>
            {{ __('demo.hello,you',['Name'=>'Zack']) }}
        </p>
        <p>
            {{ trans_choice('demo.apples',1) }}
        </p>
        <p>
            {{ __('Login') }}
            {{ __('voyager::bread.updated_order') }}
        </p>
    </div>
@stop
