@extends('layouts.app')


@section('content')

<div class="wrap">
    <div class="nazione-dischi">
        <div class="container">
            @foreach ($nazioni as $nazione_artista => $nazione)
                <h1>{{$nazione_artista}}</h1>
                    <div class="card-container">
                        @foreach ($nazione as $paese)
                            <div class="card">
                                <img src="https://img.mercatinomusicale.com/p_z/40/06/4240640_1437163310.jpg" alt="">
                                <h3>{{$paese['titolo']}}</h3>
                                <h4>{{$paese['artista']}}</h4>
                                <p>{{$paese['genere']}}</p>
                                <p>{{$paese['anno']}}</p>
                                <p>{{$paese['numero_tracce']}}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
        </div>
    </div>
</div>



@endsection

@section('title-page', 'Dischi-Nazionalità-Home')
