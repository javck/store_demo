<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>變更商品{{ $item->id }}</h3>
    {!! Form::model($item,['route' =>['items.update',$item->id],'files'=>true]) !!}
    @method('put')
    @include('items._form')
    {!! Form::close() !!}

</body>

</html>
