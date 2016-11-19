<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubicat</title>

    <!-- Bootstrap Core CSS -->
   <!-- Bootstrap Core CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('plantilla/bootstrap/css/bootstrap.css')}}">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{asset('plantilla/menus/metisMenu/metisMenu.min.js')}}">
   

    <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('plantilla/menus/dist/css/sb-admin-2.css')}}">


    <!-- Custom Fonts -->

 <link rel="stylesheet" href="{{asset('plantilla/menus/vendor/font-awesome/css/font-awesome.min.css')}}">
   

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inicio de sesion</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                               <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordar Contraseña
                                    </label>
                                </div>-->
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="http://localhost/ubicaT/public/admin/users?page=1" class="btn btn-lg btn-success btn-block">Ingresar</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- jQuery -->
    <script src="{{asset('plantilla/jquery/jquery-3.1.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('plantilla/bootstrap/js/bootstrap.js')}}"></script>
   
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('plantilla/menus/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
     <script src="{{asset('plantilla/menus/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>