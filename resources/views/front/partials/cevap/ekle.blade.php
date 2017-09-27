@extends('front.partials.master')

@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
                <div class="col-md-12 col-sm-12 panel">
                    <h3><i class="fa fa-male" aria-hidden="true"></i> Hastane Cevap Durum Bilgileri</h3>
                    <hr class="panel-primary">
                    {!! Form::open(['url' => 'Cevaplar','method'=>'POST']) !!}
                    {!! Form::bsText('cevap_adi')!!}
                    {!! Form::bsText('cevap_detay')!!}
                    {!! Form::submit('Kaydet',['class'=>'btn btn-danger'])!!}
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
@endsection