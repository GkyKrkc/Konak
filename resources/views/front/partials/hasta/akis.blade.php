@extends('front.partials.master')

@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
                <div class="col-md-3 col-sm-6 panel">
                    <h3><i class="fa fa-male" aria-hidden="true"></i> Hasta Bilgileri</h3>
                    <hr>

                    <a href="{{route('Hastalar.edit',$hasta->id)}}" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href="{{url('Yaz/'.$hasta->id)}}" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-print" aria-hidden="true"></span></a>
                    <a href="{{url('Yaz/'.$hasta->id)}}" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span></a>
                    <hr>
                    <ul class="list-group hastabilgi panel panel-success" >
                        <li class="list-group-item" style="border: none;"><strong>Hasta Adı:</strong></strong>{{$hasta->hasta_adi}}</li>
                        <li class="list-group-item" style="border: none;"><strong>Mernis No:</strong></strong>{{$hasta->mernis_no}}</li>
                        <li class="list-group-item" style="border: none;"><strong>Yaş:</strong></strong>{{$hasta->yas}}</li>
                        @if($hasta->kategori=1)
                        <li class="list-group-item" style="border: none;"><strong>Kategori:</strong></strong>Yenidoğan</li>
                        @elseif($hasta->kategori=2)
                        <li class="list-group-item" style="border: none;"><strong>Kategori:</strong></strong>Pediatrik</li>
                        @elseif($hasta->kategori=2)
                        <li class="list-group-item" style="border: none;"><strong>Kategori:</strong></strong>Erişkin</li>
                        @endif
                        <li class="list-group-item" style="border: none;"><strong>{{$hasta->basamak}}.Basamak Yoğun Bakım İhtiyacı</strong></strong></li>
                        <li class="list-group-item" style="border: none;"><strong>Açiklama:</strong></strong>{{$hasta->aciklama}}</li>
                    </ul>

                    @if($belgeler->count()>0)
                    <h3><i class="fa fa-file-text" aria-hidden="true"></i> Belgeler</h3>
                    <ul class="list-group">
                    @foreach($belgeler as $belge)

                          <li class="list-group-item">
                            <a href="{{asset('uploads/'.$belge->orginal_filename)}}" class="btn btn-primary btn-xs view-pdf" data-toggle="modal" data-target="#belge{{$belge->id}}">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                                {{$belge->orginal_filename}}
                            </a>
                            <span class="pull-right">
                                <a href="{{url('Belge/Sil/'.$belge->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Sil </a>
                            </span>
                          </li>
                    @endforeach
                        </ul>
                    @else

                    <hr>
                            <a href="#" class="btn btn-danger btn-block btn-xs" data-toggle="modal" data-target="#belge{{$hasta->id}}"><i class="fa fa-file-text-o" aria-hidden="true" data-toggle="tooltip" title="Belge"></i> Belge Ve Döküman Ekle </a>

                        <!-- Modal Belge-->
                        <div class="modal fade" id="belge{{$hasta->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><p class="text-danger"> Hasta:{{$hasta->hasta_adi}} Sevk Sonucu</p></h4>
                                    </div>
                                    <div class="modal-body">


                                        <div class="span7 offset1">


                                            {!! Form::open(array('url'=>'Belge/'.$hasta->id,'method'=>'POST', 'files'=>true)) !!}
                                            <div class="control-group">
                                                <div class="controls">
                                                    {!! Form::File('file[]', array('multiple'=>true)) !!}

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                        {!! Form::submit('Kaydet',['class'=>'btn btn-danger'])!!}
                                    </div>

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    @endif

                    </div>
                <div class="col-md-6 col-sm-6 panel panel-danger">
                    <h3><i class="fa fa-clock-o" aria-hidden="true"></i> Akış Bilgileri</h3>
                    <hr>
                    {!! Form::open(['url' => 'Akis/Kayit/'.$hasta->id,'id'=>'akis','method'=>'POST']) !!}
                    {!! Form::bsHidden('patient_id',$hasta->id)!!}
                    {!! Form::bsHidden('user_id',$user)!!}
                    {!! Form::bsTime('time',$time)!!}
                    {!! Form::bsMetin('aciklama')!!}
                    {!! Form::submit('Kaydet',['class'=>'btn btn-danger col-md-pull-8','id'=>'akis_btn'])!!}

                    {!! Form::close() !!}

                    <div id="timeline">


                        <!--due -->
                        @foreach($akislar as $akis)
                        <div class="row timeline-movement pull">

                            <div class="col-sm-offset-0 col-sm-12  timeline-item">
                                <div class="row">
                                    <div class="col-sm-offset-0 col-sm-12">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li><span class="importo">{{$akis->time}}</span></li>
                                                <li><span class="causale">{{$akis->aciklama}}</span> </li>
                                                <li>
                                                    <p>
                                                        <small class="text-muted">
                                                            <i class="glyphicon glyphicon-time"></i>
                                                            {{$akis->created_at}}
                                                            <strong>
                                                                {{$akis->created_at->diffForHumans()}}
                                                            </strong>
                                                            <i class="glyphicon glyphicon-user"></i>
                                                            <strong>
                                                                {{ $akis->user->name}}
                                                            </strong>
                                                        </small>
                                                        <span class="pull-right">


                                        <a href="{{url('Akis/Sil/'.$akis->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Sil </a>
                                    </span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
                <div class="col-md-3 col-sm-6 panel">
                    {!! Form::model($hasta,['url'=>'Akis/Hastane/',$hasta->id,'method'=>'PUT']) !!}
                    <h3><i class="fa fa-h-square" aria-hidden="true"></i> Hastane Bilgileri</h3>
                    <hr>
                    {!! Form::bsHidden('kategori',$hasta->kategori)!!}
                    {!! Form::bsHidden('hasta_id',$hasta->id)!!}

                    @foreach($hastaneler as $hastane)
                        @foreach($sonuclar as $sonuc)
                            @if($sonuc->hastane_id==$hastane->id)
                                <div class="form-group">
                                    <label for="years">{{$hastane->hastane_nick}}</label>
                                    <select name="hastane[{{$hastane->id}}]" class="form-control" id="years">
                                        @foreach($cevaplar as $cevap)
                                            @if($sonuc->cevap_id==$cevap->id)
                                                <option class="text-danger" selected value="{{$sonuc->cevap_id}}">{{$cevap->cevap_adi}}</option>
                                            @endif
                                            <option  value="{{$cevap->id}}">{{$cevap->cevap_adi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        @endforeach

                    @endforeach
                    {!! Form::submit('Kaydet',['class'=>'btn btn-block btn-danger'])!!}
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
@endsection