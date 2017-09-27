@extends('front.partials.master')

@section('content')
    <h2>Yeni Hastane</h2>


    {!! Form::model($hastane,['route' => ['Hastaneler.update',$hastane->id],'method'=>'PUT']) !!}

    {!! Form::bsText('hastane_adi')!!}
    {!! Form::bsText('hastane_nick')!!}
    {!! Form::bsSelect('hastane_basamak',[null=>null,'1'=>'Birinci Basamak','2'=>'İkinci Basamak','3'=>'Üçüncü Basamak'])!!}
    {!! Form::bsSelect('hastane_kategori',[null=>null,'1'=>'Kamu Hastanesi','2'=>'Üniversite Hastanesi','3'=>'Özel Hastanesi'])!!}
    {!! Form::bsMetin('hastane_detay')!!}

    <br>


    <br>

    {!! Form::submit('Kaydet',['class'=>'btn btn-danger'])!!}
    {!! Form::close() !!}

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection