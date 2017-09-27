@extends('front.partials.master')

@section('content')
    <h2>Hastaneler</h2>
    <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default btn-danger">Yeni Hastane</button>
    </div>
    <hr>
    <ul class="list-group">
        @foreach($hastaneler as $hastane)

            <li class="list-group-item">
                <span class="badge">{{$hastane->hastane_basamak}}</span>
                <a href="{{route('Hastaneler.edit',$hastane->id)}}"> {{$hastane->hastane_adi}}</a>
            </li>
        @endforeach

    </ul>
    {{ $hastaneler->links() }}

@endsection
