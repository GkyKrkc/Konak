@extends('front.partials.master')

@section('content')
    <div class="row">

        <!-- Arama Formu -->
        <div class="col-md-12">
            <form role="form" action="/HastaAra" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="text" name="key" placeholder="Hasta Arama Paneli" required/>
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></button>
                            <a href="Ara" class="btn btn-danger"> Detaylı Ara</a>
                        </span>
                        </span>
                    </div>
                </div>
                <!-- Search Field -->

            </form>
        </div>
        <!-- Arama Bitiş -->

        <div class="col-md-12">

            <h4><i class="fa fa-male" aria-hidden="true"></i> Sonuçlar</h4>
            <ul class="list-group">
                @foreach($veriler as $hasta)
                    <li class="list-group-item">
                                    <span class="pull-right">
                                        <a href="{{url('Akis/'.$hasta->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-clock-o" aria-hidden="true" data-toggle="tooltip" title="Akış Ekle"></i> </a>
                                        <a href="{{route('Hastalar.edit',$hasta->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil" data-toggle="tooltip" title="Düzenle"></i> </a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc{{$hasta->id}}"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="Sonuç"></i> </a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#belge{{$hasta->id}}"><i class="fa fa-file-text-o" aria-hidden="true" data-toggle="tooltip" title="Belge"></i> </a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                    </span>

                        {{$hasta->hasta_adi}}

                    </li>
                    <!-- Modal Sonuc-->
                    <div class="modal fade" id="sonuc{{$hasta->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><p class="text-danger"> Hasta:{{$hasta->hasta_adi}} Sevk Sonucu</p></h4>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(['url' => 'Sonuc/'.$hasta->id,'method'=>'POST']) !!}
                                    <ul class="list-group">
                                        <li class="list-group-item"   style="border: none">
                                            <label class="checkbox-inline">
                                                @if($hasta->durum)
                                                    <input type="checkbox" checked name="durum"  value="sonlandi">
                                                @else
                                                    <input type="checkbox" name="durum"  value="sonlandi">
                                                @endif
                                                Sonlandır
                                            </label>
                                        </li>
                                        <li class="list-group-item"   style="border: none">
                                            <label class="checkbox-inline">
                                                @if($hasta->olumsuz)
                                                    <input type="checkbox" checked name="olumsuz"  value="olumsuz">
                                                @else
                                                    <input type="checkbox" name="olumsuz"  value="olumsuz">
                                                @endif
                                                İlimizde İlgili Branşta Hekim Yok !
                                            </label>
                                        </li>
                                        <li class="list-group-item"   style="border: none">
                                            <label class="checkbox-inline">
                                                @if($hasta->askom)
                                                    <input type="checkbox" checked name="askom" value="askom" >
                                                @else
                                                    <input type="checkbox" name="askom" value="askom" >
                                                @endif
                                                Askom Vakası İçin Değerlendirmeye Al
                                            </label>
                                        </li>
                                    </ul>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                    {!! Form::submit('Kaydet',['class'=>'btn btn-danger'])!!}
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
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
                @endforeach
            </ul>
        </div>

    </div>
@endsection
