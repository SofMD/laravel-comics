@extends('layouts.main')

@section('main-content')

<section class="homecontainer">
    <div class="container">
        <ul class="cards">
            @foreach ($comics as $index => $comic)
            <li class="li-st">
                <a href="{{ route('comics-info', ['id' => $index] )}}">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <div class="text">{{$comic['series']}}</div>
                </a>
                
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