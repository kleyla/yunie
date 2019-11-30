
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/cart.png')}}">
   <link rel="icon" type="image/png" href="{{ asset('img/cart.png')}}">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
     Yuniexpress
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- CSS Files -->
   <link href="{{ asset('css/material-kit.css?v=2.0.6')}}" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="{{ asset('demo/demo.css')}}" rel="stylesheet" />
 </head>
 
 <body class="login-page sidebar-collapse">
   @yield('contenido')
   <!--   Core JS Files   -->
   <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('js/plugins/moment.min.js')}}"></script>
   <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
   <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="{{ asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
   <!--  Google Maps Plugin    -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
   <script src="{{ asset('js/material-kit.js?v=2.0.6')}}" type="text/javascript"></script>
 </body>
 
 </html>