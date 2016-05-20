<?php require_once('php/conexion.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tecnored.co">

    <title>Registro de Clientes-Hotel Boyacá Plaza x</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    #encabezado{
        color:#666;
        background-color:#FFF;
        font-family: 'Roboto Condensed', sans-serif;
    }
    </style>
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap datepicker js -->
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/ajaxreg.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Principal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Pagina Web</a></li>
                    <li><a href="#">Facturacion</a></li>
                    <li><a href="registro.php">Nuevo Cliente</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Filtrar por:</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cumpleaños <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="php/filtros.php?mes=1" target="_blank">Enero</a></li>
                              <li><a href="php/filtros.php?mes=2" target="_blank">Febrero</a></li>
                              <li><a href="php/filtros.php?mes=3" target="_blank">Marzo</a></li>
                              <li><a href="php/filtros.php?mes=4" target="_blank">Abril</a></li>
                              <li><a href="php/filtros.php?mes=5" target="_blank">Mayo</a></li>
                              <li><a href="php/filtros.php?mes=6" target="_blank">Junio</a></li>
                              <li><a href="php/filtros.php?mes=7" target="_blank">Julio</a></li>
                              <li><a href="php/filtros.php?mes=8" target="_blank">Agosto</a></li>
                              <li><a href="php/filtros.php?mes=9" target="_blank">Septiembre</a></li>
                              <li><a href="php/filtros.php?mes=10" target="_blank">Octubre</a></li>
                              <li><a href="php/filtros.php?mes=11" target="_blank">Noviembre</a></li>
                              <li><a href="php/filtros.php?mes=12" target="_blank">Diciembre</a></li>
                            </ul>
                            </li>
                            <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genero <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="php/filtros.php?genero=Masculino">Masculino</a></li>
                              <li><a href="php/filtros.php?genero=Femenino">Femenino</a></li>
                            </ul>
                            </li>
                    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!-- Page Content -->
    <div class="container">

        <div id="encabezado"class="row">
            <div class="col-lg-12 text-center">
                <h1>Registro de Clientes</h1>
                <!-- <p class="lead">Hotel Boyaca Plaza</p>-->
                <img src="img/logo.png" height="110" width="290"></img>
            </div>
        </div>
        <br><br><br>
        <form class="col-lg-12" action="" method="post" name="search_form" id="search_form">
            <div class="input-group" style="width:340px;text-align:center;margin:0 auto;">
                <input type="text" name="search" id="search" class="form-control input-lg" placeholder="Ingrese su busqueda">
            </div>
        </form>
        <div  id="resultados"></div>
        <br><br><br><br><br><br>


    </div>
    <!-- /.container -->
</body>

  </html>