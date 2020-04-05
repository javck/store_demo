<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>建立商品</h3>
    {{-- 要上傳檔案 --}}
    {!! Form::open(['route' =>'items.store','files'=>true]) !!}
    {{-- 不上傳檔案 --}}
    {{-- {!! Form::open(['route' =>'items.store']) !!} --}}
        @include('items._form')
    {!! Form::close() !!}

</body>
</html>
