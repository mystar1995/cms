@extends('layouts.auth-master')

@section('content')
<style type="text/css">
  input, button, a{
    border-radius: 0px !important;
  }
  .form-group{
    margin-bottom: 0px;
  }
  .alert-primary{
    display: none;
  }
  .btn-login{
    margin-top: 15px;
    background-color: #3081e0;
    color: white;
    font-size: 14px !important;
  }
  .res{
    margin-top: 38px !important;
  }
  .for-email{
    font-size:16px !important;
    color: #c5c5c5;
    padding: 5px;
  }
  .card-header{
    padding-bottom: 0px; border:none;
    margin-bottom: -25px;
  }
  .card-header h3{
    color: black;
  }
  #email{
    margin-bottom: -5px;
  }
  .line1, .line2{
    width: 44%; height: 2px; background-color: #c5c5c5; margin-top: 10px;
  }
  .btn-outline-primary{
    border-color:#c5c5c5;
    color:#c5c5c5;
    margin-bottom: 80px;
  }
</style>
<div class="card card-primary">
  <div class="card-header"><h3 style="margin: auto;padding-top: 80px; color: #3e3e3e">License2Code</h3></div>

  <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group">
        <label class="for-email" for="email"> Select your sign-in perfer- </label>
        <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="My username" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
        @if(App::environment('demo'))
        <small id="emailHelpBlock" class="form-text text-muted">
            Demo Email: admin@example.com
        </small>
        @endif
      </div>

      <div class="form-group">
        <div class="d-block">
          <div class="float-right">
            <a href="{{ route('password.request') }}" class="text-small">
              Forgot Password?
            </a>
          </div>
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
        @if(App::environment('demo'))
        <small id="passwordHelpBlock" class="form-text text-muted">
            Demo Password: 1234
        </small>
        @endif
      </div>

      <!-- <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"{{ old('remember') ? ' checked': '' }}>
          <label class="custom-control-label" for="remember">Remember Me</label>
        </div>
      </div> -->

      <div class="form-group">
        <button type="submit" class="ms-Button ms-Button--primary" tabindex="4" style="margin-bottom: -30px;margin-top: 20px;width: 100%;height: 40px;">
          <span class="ms-Button-label">Sign In</span>
        </button>
        <div class="mt-5 text-muted text-center res" style="color: #6c757d !important;">
          Don't have an account? <a href="{{ route('register') }}" style="color: #3081e0 !important">Sign Up</a>
        </div>        
        <div style="display: flex; margin-top: 20px;">
          <div class="line1"></div>
          <span class="lineor" style="margin-left: 5px; padding-right: 5px;"> or </span>
          <div class="line2"></div>
        </div>
        <a href="https://login.microsoftonline.com/" class="btn btn-outline-primary btn-lg btn-block" tabindex="4" style="margin-top: 20px; color: black !important;font-size: 14px !important;">
          <img src="{{ asset('assets/img/small-logo.png') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Microsoft
        </a>
      </div>
    </form>
  </div>
</div>
@endsection
