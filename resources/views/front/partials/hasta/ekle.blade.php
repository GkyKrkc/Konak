@extends('front.partials.master')

@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
            {!! Form::open(['url' => 'Hastalar','method'=>'POST']) !!}

            <div class="col-md-9 col-sm-6 panel">
                <h3><i class="fa fa-male" aria-hidden="true"></i> Hasta Bilgileri</h3>
                <hr class="panel-primary">
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::bsHidden('user_id',$user)!!}
                        {!! Form::bsDate('baslama_tarih')!!}
                        {!! Form::bsText('hasta_adi')!!}
                        {!! Form::bsSelect('uyruk',[null=>null,'TC'=>'TC','SRY'=>'SRY','3'=>'Diğer Mülteci'])!!}
                        {!! Form::bsText('yas')!!}
                        {!! Form::bsSelect('il_durum',[null=>null,'1'=>'İl İçi Sevk','2'=>'İl Dışı Sevk'])!!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::bsSelect('kategori',[null=>null,'1'=>'Yenidoğan','2'=>'Pediatrik','3'=>'Erişkin'])!!}
                        {!! Form::bsText('mernis_no')!!}
                        {!! Form::bsSelect('basamak',[null=>null,'1'=>'1.Basamak','2'=>'2.Basamak','3'=>'3.Basamak'])!!}
                        {!! Form::bsText('gun')!!}

                    </div>
                    <div class="col-md-12">
                        {!! Form::bsMetin('aciklama')!!}
                    </div>
                </div>
            </div>

                <div class="col-md-3 col-sm-6 panel">
                    <h3><i class="fa fa-h-square" aria-hidden="true"></i> Hastane Bilgileri</h3>
                    <hr class="panel-primary">

                    @foreach($hastaneler as $hastane)
                        <div class="form-group">
                            <label for="years">{{$hastane->hastane_nick}}</label>
                            <select name="hastane[{{$hastane->id}}]" class="form-control" id="years">
                                @foreach($cevaplar as $cevap)
                                    <option value="{{$cevap->id}}">{{$cevap->cevap_adi}}</option>
                                @endforeach
                            </select>
                        </div>
                @endforeach
                    {!! Form::submit('Kaydet',['class'=>'btn btn-danger'])!!}
                </div>

            {!! Form::close() !!}
        </div>



    </div>
@endsection