@extends('front.partials.master')

@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
            {!! Form::open(['url' => 'Cevaplar','method'=>'POST']) !!}

            <div class="col-md-12 col-sm-6 panel">
                <h3><i class="fa fa-line-chart" aria-hidden="true"></i> Raporlama Kriterleri</h3>
                <hr class="panel-primary">
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::bsDate('baslama_tarih')!!}
                        {!! Form::bsDate('bitis_tarih')!!}

                            <div class="form-group">
                                <label for="years">Cevaplar</label>
                                <select name="cevap" class="form-control" id="years">
                                    <option></option>
                                    @foreach($cevaplar as $cevap)
                                        <option value="{{$cevap->id}}">{{$cevap->cevap_adi}}</option>
                                    @endforeach
                                </select>
                            </div>

                    </div>
                    <div class="col-md-6">
                        {!! Form::bsSelect('kategori',[null=>null,'1'=>'Yenidoğan','2'=>'Pediatrik','3'=>'Erişkin'])!!}
                        {!! Form::bsSelect('basamak',[null=>null,'1'=>'1.Basamak','2'=>'2.Basamak','3'=>'3.Basamak'])!!}
                    </div>
                </div>
                {!! Form::submit('Raporla',['class'=>'btn btn-danger'])!!}
            </div>



            {!! Form::close() !!}
        </div>



    </div>

@endsection
