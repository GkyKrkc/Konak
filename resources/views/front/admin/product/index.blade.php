@extends('front.partials.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><i class="fa fa-list" aria-hidden="true"></i> Ürünler</h3>
            <ul class="list-group">
                @foreach($urunler as $urun)
                <li class="list-group-item">
                     {{$urun->name}} {{$urun->fiyat}} TL
                    <span class="pull-right">
                                        <a href="{{url('urunduzenle/'.$urun->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-check" data-toggle="tooltip" title="Sil"></i></a>

                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#resim{{$urun->id}}"><i class="fa fa-picture-o" aria-hidden="true" data-toggle="tooltip" title="Resim Ekle"></i> </a>
                                        <a href="{{route('urunler.edit',$urun->id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Sil"></i></a>
                                        <a href="{{url('urunsil/'.$urun->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                    </span>

                </li>

                    <!-- Modal Belge-->
                    <div class="modal fade" id="resim{{$urun->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><p class="text-danger">Konak:{{$urun->name}}</p></h4>
                                </div>
                                <div class="modal-body">


                                    <div class="span7 offset1">


                                        {!! Form::open(array('url'=>'resim_ekle/'.$urun->id,'method'=>'POST', 'files'=>true)) !!}
                                        <div class="control-group">
                                            <div class="controls">
                                                {!! Form::File('resim') !!}

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                    {!! Form::submit('Yükle !',['class'=>'btn btn-danger'])!!}
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>

        </div>
    </div>
</div>
    <div class=""></div>
@endsection