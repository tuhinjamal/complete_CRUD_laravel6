
        

@extends('frontend.layouts.master')

@section('content')


<!-- Navigation-->
@guest
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
                       @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">This app is developed by Tuhin Jamal</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">This is a easy solution of ledger management in one touch</p>
                        
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>


@endsection

       
        
        
        
