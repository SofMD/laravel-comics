@extends('layouts.main')

@section('main-content')
     <div>
          {{-- top --}}
          <section class="infoTop">
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
                         {{-- details --}}
                         <div class="greenBar  d-fl sp-bw">
                              <div>U.S. Price: <span>{{$comic['price']}}</span></div>
                              <div>AVAILABLE</div>
                         </div>

                         {{-- description --}}
                         <p>{{$comic['description']}}</p>
                    </div>
               </div>
               <div class="right">
                    {{-- adv --}}
                    <div class="adv">ADVERTISEMENT</div>
                    <a href="#">
                         <img src="{{ asset('images/adv.jpg')}}" alt="">
                    </a>
               </div>
          </section> 
     </div>
@endsection