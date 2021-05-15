
        

@extends('frontend.layouts.master')

@section('content')


<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Ledger Management</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                      @if (Route::has('login'))
                        @auth
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">home</a></li>
                          @else
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">login</a></li>
                             @if (Route::has('register'))
                             <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">register</a></li>
                             @endif
                        @endauth
                       @endif   

                    </ul>
                </div>
            </div>
        </nav>
    <div id="particles">
  <div id="webcoderskull">
    <h1>PARTICLE BACKGROUND</h1>
    <p>Web Coder Skull Team</p>
    
  </div>
</div>

        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>


@endsection

       
        
        
        
