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
  .social_btn:hover{
  }
  .micro{
    margin-top: 20px; font-size: 14px !important;margin-bottom: 10px;background-color: #309af4; border-color: #309af4;
  }
  .micro:hover{background-color: #1a74c1 !important;}
  .git{
    margin-top: 0px; font-size: 14px !important;margin-bottom: 10px;background-color: #333333;border-color: #333333;
  }
  .git:hover{background-color: #191919 !important;}
  .google{
    margin-top: 0px; font-size: 14px !important;margin-bottom: 10px; 
  }
  .google:hover{ background-color: #fff !important; border: solid 1px #000 !important; }
  .atl{
    margin-top: 0px; font-size: 14px !important;margin-bottom: 10px;background-color: #57af3d;border-color: #57af3d;
  }
  .atl:hover{background-color: #489a2f !important; }
  .btn-outline-primary{
    color: white !important;
    font-family:Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif !important;
    transition:color .05s ease-in-out,background-color .05s ease-in-out,border-color .05s ease-in-out,box-shadow .05s ease-in-out;
  }
</style>
<div class="card card-primary">
  <div class="card-header"><h3 style="margin: auto;padding-top: 80px; color: #3e3e3e">WatchMyCrew</h3></div>

  <div class="card-body" style="width: 53%;padding: 20px 0px;">
    <form  action="admin.dashboard">
        @csrf
      <div class="form-group">
        <label class="for-email" for="email"> Enter your login details: </label>
        <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control" name="email" placeholder="My username" tabindex="1" value="" autofocus>
      </div>

      <div class="form-group">
        <div class="d-block">
          <div class="float-right">
            <a href="#" class="text-small">
              Forgot Password?
            </a>
          </div>
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Password" class="form-control" name="password" tabindex="2">
      </div>

      <!-- <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"{{ old('remember') ? ' checked': '' }}>
          <label class="custom-control-label" for="remember">Remember Me</label>
        </div>
      </div> -->

      <div class="form-group">
        <button class="ms-Button ms-Button--primary" tabindex="4" style="margin-bottom: -30px;margin-top: 20px;width: 100%;height: 40px;">
          <span class="ms-Button-label">Sign In</span>
        </button>
        <div class="mt-5 text-muted text-center res" style="color: #6c757d !important;">
          Don't have an account? <a href="#" style="color: #3081e0 !important">Sign Up</a>
        </div>        
        <div style="display: flex; margin-top: 20px;">
          <div class="line1"></div>
          <span class="lineor" style="margin-left: 5px; padding-right: 5px;"> or </span>
          <div class="line2"></div>
        </div>
        <a href="https://login.microsoftonline.com/" class="btn btn-outline-primary btn-lg btn-block social_btn micro" tabindex="4" style="">
          <img src="{{ asset('assets/img/small-logo.png') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Microsoft
        </a>
        <a href="https://github.com/login" class="btn btn-outline-primary btn-lg btn-block social_btn git" tabindex="4" style="">
          <img src="{{ asset('assets/img/git.webp') }}" style="width: 25px;margin-right: 2px;margin-bottom: 0px;"> Sign in with GitHub
        </a>
        <a href="https://id.atlassian.com/login/" class="btn btn-outline-primary btn-lg btn-block social_btn atl" tabindex="4" style="">
          <img src="{{ asset('assets/img/at.png') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Atlassian
        </a>
        <a href="https://accounts.google.com/" class="btn btn-outline-primary btn-lg btn-block social_btn google" tabindex="4" style="color: black !important;">
          <img src="{{ asset('assets/img/th.jpg') }}" style="width: 15px;margin-right: 2px;margin-bottom: 3px;"> Sign in with Google
        </a>
      </div>
    </form>
  </div>
</div>
@endsection
