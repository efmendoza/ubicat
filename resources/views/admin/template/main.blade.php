  <!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plantilla/bootstrap/css/bootstrap.css')}}">
</head>
<body style="background-color: #A9E2F3">


<!--<div class="alert alert-info" role="alert"><h1 style="text-align: center;">Ubicat donde debes estar</h1></div>-->

<hr>
<br>

<section style="width:400px; margin: 0 auto">


<div class="panel panel-primary">
 <!-- <div class="panel-heading">
    <h3 class="panel-title">Registro de Usuarios</h3>
  </div>-->

  <div class="panel-body">

    
    @yield('content')
 
  </div>
</div>
</section>


<script src="{{asset('plantilla/jquery/jquery-3.1.0.js')}}"></script>

<script src="{{asset('plantilla/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>