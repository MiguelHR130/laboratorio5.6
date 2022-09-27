<!DOCTYPE html>
<html lang="es">

<head>
<style>
div1 {text-align: center;}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
    <meta name="author" content="Incanatoit.com">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Laboratorio San Miguel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons -->
    <link href="css/plantilla.css" rel="stylesheet">
    <div1>
    <img src="..\img\logo5.png"  width="700" height="150">    
    </div1>
   

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">
    <header class="app-header navbar">
  
        <div>
            <a  class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-user-unfollow"></i> Cerrar sesión</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form>
        </div>
        
    </header>

    <div class="app-body">

        @if(Auth::check())
            @if(Auth::user()->idrol==1)
                @include('plantilla.sidebar')
            @endif
        @endif
       
        <!-- Contenido Principal -->
        @yield('contenido')
        <!-- /Fin del contenido principal -->
    </div>

    
    </div>
    <footer class="app-footer">
        <span><a href="http://www.google.com/">Sistema de Gestión Laboratorio San Miguel</a> &copy; 2022</span>
       
    </footer>

    <script src="js/app.js"></script>
    <script src="js/plantilla.js"></script>

</body>

</html>