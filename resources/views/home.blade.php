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
      <li class="nav-item active">
        <a class="nav-link" href=" {{route('ledgermodel.viewer')}} ">View Ledger</a>
      </li>
    </ul>
     <li class="nav-item active">
        <a class="nav-link" href=" {{route('ledgermodel.add')}} ">Add Ledger</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    @if (session('status'))
    <a href="#" class="btn btn-primary">{{ session('status') }}</a>
  
     @endif
  </div>
  <div class="card-footer text-muted">
   Hey You are logged in!
  </div>
</div>


@endsection
