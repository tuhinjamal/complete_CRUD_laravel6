@extends('frontend.layouts.master')

@section('content')


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
         <!-- Authentication Links -->
        @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

            </li>
        @endguest  
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
</div>



@endsection
