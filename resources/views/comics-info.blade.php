@extends('layouts.main')

@section('main-content')
     <div class="newscontainer">
          {{-- top --}}
          <section class="newsTop">
               <div class="comixcont">
                    {{-- cover comix  --}}
                    <img src="{{$comic['thumb']}}" alt="">
               </div>
          </section>

          {{-- bottom --}}
          <section class="classbottom d-fl sp-bw ">
               <div class="left">
                    <div class="MainNews">
                         {{-- titolo --}}
                         <h2>{{$comic['title']}}</h2>

                         {{-- description --}}
                         <p>{{$comic['description']}}</p>
                    </div>
               </div>
               <div class="right">
                    <div class="adv">ADVERTISEMENT</div>
                    <img src="{{ asset('images/adv.jpg')}}" alt="">
               </div>
          </section> 
     </div>
@endsection