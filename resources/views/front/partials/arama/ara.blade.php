@extends('front.partials.master')

@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
            {!! Form::open(['url' => 'Ara','method'=>'POST']) !!}

            <div class="col-md-12 col-sm-12 panel">
                <h3><i class="fa fa-male" aria-hidden="true"></i> Hasta Arama Paneli</h3>
                <hr class="panel-primary">
                {!! Form::bsDate('baslama_tarih')!!}
                {!! Form::bsDate('bitis_tarih')!!}
                {!! Form::bsText('mernis_no')!!}
                {!! Form::bsText('hasta_adi')!!}
                {!! Form::bsSelect('kategori',[null=>null,'1'=>'Yenidoğan','2'=>'Pediatrik','3'=>'Erişkin'])!!}
                {!! Form::bsSelect('basamak',[null=>null,'1'=>'1.Basamak','2'=>'2.Basamak','3'=>'3.Basamak'])!!}
                {!! Form::submit('Ara !',['class'=>'btn btn-danger'])!!}
                {!! Form::close() !!}
            </div>

        </div>



    </div>
@endsection