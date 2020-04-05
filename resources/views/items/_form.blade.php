
    {!! Form::hidden('hidden', 'momo') !!}
    <div class="form-group">
        {!! Form::label('cgy_id', '商品分類') !!}
        {!! Form::select('cgy_id', $cgies, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('title', '商品名稱') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('isRecommend', '是否為推薦') !!}
        {!! Form::checkbox('isRecommend', 1, false) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', '價格') !!}
        {!! Form::number('price', 0) !!}
    </div>
    <div class="form-group">
        {!! Form::label('stock', '數量') !!}
        {!! Form::number('stock', 1, ['min'=>1,'max'=>10]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('desc', '商品介紹') !!}
        {!! Form::textarea('desc', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pic_url', '商品圖網址') !!}
        {!! Form::text('pic_url', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pic', '商品圖') !!}
        {!! Form::file('pic', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('enabled', '是否上架') !!}
        {!! Form::radio('enabled', 1, true) !!}
        {!! Form::radio('enabled', 0, false) !!}
    </div>
    {!! Form::submit('送出') !!}
    {!! Form::reset('重置') !!}
    {{-- 錯誤顯示包 --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
