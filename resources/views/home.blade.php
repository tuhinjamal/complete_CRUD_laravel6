@extends('frontend.layouts.master')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">

     @if (Route::has('login'))
     @auth
    <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @endauth
    @endif

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        @guest
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <span class="sr-only">(current)</span></a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
              <a class="dropdown-item" href="#">{{ Auth::user()->email }}</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  @endguest  
            </div>
          </li>
      </ul>
  </div>
</nav>



<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">To use the ledger facility clik the button below</p>
  <hr class="my-4">
  <p>experiance a new better smooth ledger management system</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{route('ledgermodel.master')}}" role="button">Ledger</a>
  </p>
</div>


@endsection
