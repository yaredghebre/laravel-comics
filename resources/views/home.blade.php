@extends('layouts.app')

@section('content')
<div class="comics-container">
    <div class="comics-container-title-box">CURRENT SERIES</div>
    
    <button class="comics-container-button"> LOAD MORE</button>


    <div class="cards-container container">
        <div class="row row-cols-6 g-3">
            @foreach ($comics as $card)
                <div class="col">
                    <div class="card">
                        <img src="{{ $card['thumb']}}" alt="">
                    </div>
                    <h5 class="text-white text-center">{{ $card['series'] }}</h5>

                </div>
            @endforeach
        </div>
    </div>


</div>
@endsection
