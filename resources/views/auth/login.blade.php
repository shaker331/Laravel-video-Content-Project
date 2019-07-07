@extends('back-end.layout.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"></a>
          </div>
        
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Home</a>
                @else
                    <a href="{{ route('login') }}"></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
</div>
</nav> 
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('Login') }}</h4>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="row ">
                                <div class="col-md-10">
                                  <div class="form-group " style=" margin-left: 80px">
                                    <label class="bmd-label-floating" style="font-size:medium">{{ __('E-Mail Address') }}</label><br><br>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                                </div>
                                
                                <div class="col-md-10">
                                  <div class="form-group" style=" margin-left: 80px">
                                    <label class="bmd-label-floating" style="font-size:medium">{{ __('Password') }}</label><br><br>
                                    <input type="password"  id="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                                </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check text_left">
                                    <input class="" style="color:lightcoral" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label " for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
