@extends('front.partials.master')
@section('content')
<div class="container">
<h3>Yeni Kategori Ekle</h3>
    {!! Form::open(['url' => '/kategori_kayit','method'=>'POST','files'=>true]) !!}
    {!! Form::bsText('name','Kategori Adı') !!}
    {!! Form::bsText('detay','Kategori Detayı') !!}
    {!! Form::bsFile('resim',null,'Lütfen Kategori Resmini Seçiniz') !!}
    {!! Form::submit('Kaydet!')!!}
    {!! Form::close() !!}
</div>
@endsection