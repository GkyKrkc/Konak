@extends('front.partials.master')
@section('content')
    <div class="container">
        <h3>Yeni Ürün Ekle</h3>
        {!! Form::open(['url' => '/urun_kayit','method','POST','files'=>true]) !!}
        <select name="kat_id" class="form-control">
            @foreach($kategoriler as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
            @endforeach
        </select>
        {!! Form::bsText('name','Ürün Adı') !!}
        {!! Form::bsText('fiyat','Ürün Fiyatı') !!}
        {!! Form::bsText('detay','Ürün Hakkında Kısa Açıklama') !!}
        {!! Form::bsMetin('aciklama','Ürün Detayı ve Sunum Şekli') !!}
        {!! Form::bsFile('resim',null,'Lütfen Kategori Resmini Seçiniz') !!}
        {!! Form::submit('Kaydet!')!!}
        {!! Form::close() !!}
    </div>
@endsection