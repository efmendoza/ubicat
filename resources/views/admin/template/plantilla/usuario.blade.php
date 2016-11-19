
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Default')</title>

    <!-- Bootstrap Core CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('plantilla/bootstrap/css/bootstrap.css')}}">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{asset('plantilla/menus/metisMenu/metisMenu.min.js')}}">
   

    <!-- Custom CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('plantilla/menus/dist/css/sb-admin-2.css')}}">


    <!-- Custom Fonts -->

 <link rel="stylesheet" href="{{asset('plantilla/menus/vendore/font-awesome/css/font-awesome.min.css')}}">
   

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   
                </button>
                <a class="navbar-brand" href="#">Aplicacion Ubicat 1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
              <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>-->
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><h4>Menu</h4></a>
                        </li>
                                              
                                                                                            
                        <li>
                            <a href="#">Gestione Cursos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="http://localhost/ubicaT/public/admin/cursos/create">Cursos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                                             
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

       
            <div class="row">
                <div class="col-lg-12">
                   <!-- <h1 class="page-header">UbicaT</h1>-->
                </div>
              
            </div>
            <!-- /.row -->
            <div class="panel-body">

            @include('flash::message')
            @yield('content')
 
            </div>
          
        </div>
        <!-- /#page-wrapper -->

    </div>
   
   <footer>
       
         <div class="text-center">

         <a href="#"><a class="btn btn-social-icon btn-bitbucket" href="https://bitbucket.org/product"><i class="fa fa-bitbucket"></i></a></a>
         <a class="btn btn-social-icon btn-dropbox" href="https://www.dropbox.com/es/"><i class="fa fa-dropbox"></i></a>
         <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
         <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
         <a class="btn btn-social-icon btn-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>                            
         <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/iniciarsesion?lang=es"><i class="fa fa-twitter"></i></a>
      
         </div>

   </footer>
   

    <!-- jQuery -->
    <script src="{{asset('plantilla/jquery/jquery-3.1.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('plantilla/bootstrap/js/bootstrap.js')}}"></script>
   
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('plantilla/menus/vendore/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
     <script src="{{asset('plantilla/menus/dist/js/sb-admin-2.js')}}"></script>
   

</body>

</html>