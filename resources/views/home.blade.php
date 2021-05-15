@extends('frontend.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div id="particles">
  <div id="webcoderskull">
    <h1>PARTICLE BACKGROUND</h1>
    <p>Web Coder Skull Team</p>
    
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
