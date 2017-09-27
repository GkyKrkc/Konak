@extends('front.partials.master')
@section('content')
<div class="container">
<h3>Ürün Güncelle</h3>

    {!! Form::model($item,['route' => ['urunler.update',$item->id],'method'=>'PUT']) !!}
    <select name="kat_id" class="form-control">
        <option selected value="{{$item->kat_id}}">{{$item->categories->name}}</option>
        @foreach($kategoriler as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->name}}</option>

        @endforeach
    </select>
    {!! Form::bsText('name','Ürün Adı') !!}
    {!! Form::bsText('fiyat','Ürün Fiyatı') !!}
    {!! Form::bsText('detay','Ürün Hakkında Kısa Açıklama') !!}
    {!! Form::bsMetin('aciklama','Ürün Detayı ve Sunum Şekli') !!}
    {!! Form::submit('Güncelle!')!!}
    {!! Form::close() !!}
</div>
@endsection