<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Stisla Laravel') &mdash; {{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/css/fabric.min.css" />
  <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/css/fabric.components.min.css" />

  <!-- CSS Libraries -->
<style type="text/css">
  .left-img{
    cursor: pointer;
    margin-top: -4px;
    margin-right: -10px !important;
  }
  .ms-Button--indigo{
    height: 50px;
    background-color: #5c2d91;
    border: 1px solid #5c2d91;
  }
  .ms-Button--indigo:hover{
    height: 50px;
    background-color: #3c1765;
    border: 1px solid #3c1765;
  }
  .ms-Panel{
    background-color: #f3f2f1;
    box-shadow:-28px 0 24px -42px rgb(0 0 0);
  }
</style>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg">
        <div class="">
          <label class="ms-Label" style="color: white; font-size: 20px;margin: 4px; margin-left: 15px;">License2Code</label>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg main-navbar" style="margin-top: -10px;">
        @include('admin.partials.topnav')
      </nav>
      <div class="navbar-top" style="height: 50px; margin-top: 50px; background-color: #f3f2f1;left: 250px;right: 5px;position: absolute;z-index: 0;"></div>
      <div class="main-sidebar">
        @include('admin.partials.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        @include('admin.partials.footer')
      </footer>
    </div>
  </div>

  <script src="{{ route('js.dynamic') }}"></script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>  
  <script src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/js/fabric.min.js"></script>
  @yield('scripts')
</body>
</html>


<script type="text/javascript">
  var PanelExamples = document.getElementsByClassName("ms-PanelExample");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        new fabric['Panel'](PanelExamplePanel);
      });
    }());
  }
</script>