@extends('layouts.main')

@section('main-content')

<section>
    <div class="container">
        <ul class="cards">
            @foreach ($comics as $comic)
            <li class="li-st">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <div class="text">{{$comic['series']}}</div>
            </li>
                
            @endforeach
            
        </ul>

        {{-- bottone --}}
        <div class="btn-container">
            <button class=" main-button">load more</button>
        </div>


    </div>
</section>


    
@endsection