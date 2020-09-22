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
  .ms-Icon{
    font-size: 17px;
  }
  .navbar .ms-Button{
    min-width:53px;
    padding: 4px 5px 6px;
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
    background-color: #faf9f8;
    box-shadow:-28px 0 24px -42px rgb(0 0 0);
  }
.collapsible {
  color: #333;
  cursor: pointer;
  padding: 9px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}


.collapsible:after {
  content: "\02C7";
  font-size: 35px;
  padding-top: 15px;
  margin-bottom: -20px;
  float: right;
  margin-left: 5px;
  color: #848b90;
}
li button:focus{
  outline: unset;
}
.active1:after {
 content: "\02C6";
  color: #848b90;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0s ease-out;
  background-color: #f1f1f1;
}
.content a {
  padding-top: 7px !important;
  padding-bottom: 7px !important;
  padding-left: 62px !important;
}
.content .active {
  background-color: #e0ccff;
}
.ms-Panel {
  box-shadow: -38px 0 6px -41px rgb(0 0 0);
}
.ms-Panel-closeButton .ms-Icon--Cancel{
  margin-top: 54px;
}
.ms-Panel{
  padding-top: 40px;
}
.user-m .ms-Button{
  color: white;
  height: auto;
  min-width: auto;
}
.ms-Button{
  color: white;
}
.user-m .ms-Button:hover{
  color: white;
  text-decoration:none;
}
.user-m .ms-Button--danger{
  background-color: #949494;
}
.ms-Icon:before{
  font-size: 15px;
  padding-top: 2px;
}
.role-sel, .update-sel{
  background-color: unset !important;
  border-radius: 0px !important;
  height: 40px !important;
}
.title-label{
  font-weight: bold;
}
.card-body td, .card-body th, .card-body label{
  font-family: Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif;
}
.user-m .table-striped tbody tr:nth-of-type(odd){
  background-color: unset;
}
.user-m table td,.user-m table th {
  height: 50px !important;
  border-top: 1px solid #b9bdbf;
}
.user-m table{
  margin-bottom: 0px;
}
.user-m table .action{
  text-align: right;
  margin-right: 100px;
}
.user-m .card-header{
  border-bottom-color:#ececec !important;
}
.ms-Icon--Cancel{
  padding-right: 10px;
  padding-left: 10px;
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
          <label class="ms-Label" style="color: white; font-size: 19px;margin:6px 4px 4px 15px; margin-left: 15px;">License2Code</label>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg main-navbar" style="margin-top: -10px;">
        @include('admin.partials.topnav')
      </nav>
      <div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 220px;right: 5px;position: absolute;z-index: 0;"></div>
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
  var PanelExamples = document.getElementsByClassName("ms-help");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        new fabric['Panel'](PanelExamplePanel);
      });
    }());
  }
  var PanelExamples = document.getElementsByClassName("ms-setting");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        new fabric['Panel'](PanelExamplePanel);
      });
    }());
  }

  /////////////////////side bar menu///////////////////
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active1");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
  /////////////////////select box///////////////////////////
</script>