<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        {{ Html::style('css/bootstrap.min.css') }}

        {{ Html::style('css/bootstrap-theme.min.css') }}
        
        {{ Html::style('https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap4.min.css') }}

        <!-- [Library = DataTable] -->
        {{ Html::style('css/dataTable/datatables.1.10.12.min.css') }}

        <!-- [Library = Sweet Alert] -->
        {{ Html::style('css/sweetalert.css') }}
        
        {{ Html::style('css/main.css') }}

        {{ Html::script('js/vendor/jquery-1.11.2.min.js') }}

        {{ Html::script('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}
        
        {{ Html::script('js/vendor/bootstrap.min.js') }}

        <!-- [Library = Jquery DataTable] -->
        {{ Html::script('js/vendor/dataTable/datatables1.10.12.min.js') }}

    </head>
    <body>
    
<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Logotipo</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" ><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="#" ><span class="glyphicon glyphicon-cog"></span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Cerrar sesi&oacute;n</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

    <div class="container">
      @yield('content')
    </div>


    <!-- [Library = Sweet Alert] -->
    {{ Html::script('js/vendor/sweetalert.min.js') }}

    <!-- [Library = Jquery Validator] -->
    {{ Html::script('js/vendor/jqueryValidator/jquery.validate.min.js') }}

    {{ Html::script('js/main.js') }}

    </body>
</html>
