@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: rgb(80, 20, 120); color: white">{{ __('Login') }}</div>

                <div class="card-body">
                    @if(Session::has('msg'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">                      
                           {{Session::get('msg')}} 
                   
                        </div>

                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill shadow-sm " name="email" value="{{ old('email') }} " required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill shadow-sm " name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <div class="col-12  ">
                                
      
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link col-12 m-auto" style="color: rgb(80, 20, 120)" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                     @endif
                                
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 offset-3">
                                <button type="submit" style="background-color: rgb(00, 235, 185); color: white" class="btn rounded-pill col-3">
                                   <strong>{{ __('Login') }}</strong> 
                                </button>
                                <a class="btn rounded-pill col-3" style="background-color: rgb(00, 235, 185); color:white" href="{{ route('register') }}">
                                 <strong>{{ __('Registro') }}</strong>   
                                </a>

                       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
