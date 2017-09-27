@extends('front.partials.master')

@section('content')

    <div class="row">
        <!-- Arama Formu -->

            @foreach($hastaneler as $hastane)
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item active list-group-item-danger">
                        <i class="fa fa-h-square" aria-hidden="true"></i> {{$hastane->hastane_nick}}
                    </a>

                    @foreach($sonuclar as $sonuc)

                        @if($hastane->id==$sonuc->hastane_id)

                            <a href="#" class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> {{$sonuc->cevap_adi}}  <span class="badge progress-bar-danger">{{$sonuc->toplam}}</span></a>
                        @endif
                    @endforeach

                </div>
            </div>
            @endforeach

        <div class="col-md-4">
        </div>

    </div>


@endsection
