@extends('layouts.app')


@section('content')

<div class="container">
    <div class="dischi-container">
        <div class="card-dischi">
            @foreach ($nazioni as $nazione_artista => $nazione)
                <h1>{{$nazione_artista}}</h1>
                @foreach ($nazione as $paese)
                    <p>{{$paese['artista']}}</p>
                    <p>{{$paese['genere']}}</p>
                    <p>{{$paese['titolo']}}</p>
                    <p>{{$paese['anno']}}</p>
                    <p>{{$paese['numero_tracce']}}</p>
                @endforeach
            @endforeach
        </div>
    </div>
</div>




@endsection

@section('title-page', 'Dischi-Nazionalità-Home')
