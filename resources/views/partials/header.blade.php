<header>

    <div class="container d-fl">
        {{-- logo --}}
        <img src="{{ asset('images/dc-logo.png')}}" alt="logo">

        {{-- navigazione --}}
        <div class="nav">
            <a href="{{ route('home') }}"
            @if (Request::route()->getName() === 'home') class="active" @endif
            >COMICS</a>
            <a href="{{ route('news') }}"
            @if (Request::route()->getName() === 'news') class="active" @endif
            >NEWS</a>
        </div>
    </div>


</header>