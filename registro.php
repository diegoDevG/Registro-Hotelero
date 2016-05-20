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
    <script src="js/registro.js"></script>
    

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
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://hotelboyacaplaza.co/">Pagina Web</a>
                    </li>
                    <li>
                        <a href="#">Facturacion</a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Page Content -->
    <div class="container">

        <div id="encabezado" class="row">
            <div class="col-lg-12 text-center">
                <h1 styel="font-family: 'Roboto Condensed', sans-serif;">Registro de Clientes</h1>
                <!-- <p class="lead">Hotel Boyaca Plaza</p>-->
                <img src="img/logo.png" height="110" width="290">
            </div>
        </div>
        <div id="resultados"></div>
        <br><br><br>

        <form class="form-horizontal" action="php/registro.php" method= post id="">
            <div class="form-group">
                <label class="control-label col-xs-3">Nombre:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" id="inputname" name="Nombre" placeholder="Nombres y apellidos Completos" required>
                </div>
            </div>
            <div class="form-group form-inline">
                    <label class="control-label col-xs-3">Identificacion:</label>
                <div class="col-xs-6">
                    <select class="form-control" name="tipodoc"placeholder="tipo">
                          <option>R.C.</option>
                          <option>T.I.</option>
                          <option selected>C.C.</option>
                          <option>C.E.</option>
                          <option>Pasaporte</option>
                        </select>
                    <input type="number" class="form-control" id="inputid" name="Documento" placeholder="Numero" required>
                    <input type="text" class="form-control" id="de_doc" name="de_doc" placeholder="De:" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Nacionalidad:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="Nacionalidad" placeholder="Nacionalidad" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Fecha de Nacimiento </label>
                <div class="col-xs-6">
                    <input  type="text" class="form-control" name="F_nacimiento" placeholder="Click para seleccionar la fecha: Dia/Mes/Año" required id="datepicker">
                </div>
            </div>

                <div class="form-group">
                <label class="control-label col-xs-3">Ocupacion:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="ocupacion" placeholder="ocupacion" required>
                </div>
            </div>

            
            <div class="form-group form-inline">
                <label class="control-label col-xs-3">Empresa:</label>
                <div class="col-xs-6">
                    <input style="width:60%" type="text" class="form-control" name="empresa" placeholder="Empresa" required>
                    <input type="text" class="form-control" name="nit" placeholder="Nit" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Lugar de Procedencia:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="procedencia" placeholder="Ciudad" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Destino:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="destino" placeholder="A donde se dirije" required>
                </div>
            </div>
            <div class="form-group form-inline">
                <label class="control-label col-xs-3">Residencia:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="dir_residencia"placeholder="Direccion de residencia" required>
                    <input type="text" class="form-control" name="ciudad_residencia" placeholder="Ciudad" required>
                    <input style="width:27%;" type="text" class="form-control" name="pais_residencia" placeholder="Pais   " required>
                </div>
                
                <div class="col-xs-6">
                    
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-3" >Telefono:</label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Email:</label>
                <div class="col-xs-6">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
            </div>
            <!--<div class="form-group">
                <label class="control-label col-xs-3">F. Nacimiento:</label>
                <div class="col-xs-2">
                    <select class="form-control">
                        <option>Dia</option>
                    </select>
                </div>
                <div class="col-xs-2">
                    <select class="form-control">
                        <option>Mes</option>
                    </select>
                </div>
                <div class="col-xs-2">
                    <select class="form-control">
                        <option>Año</option>
                    </select>
                </div>
            </div>-->
    
            <script type="text/javascript">
            $(document).ready(function () {
                        
                        $('#datepicker').datepicker({
                            startView: 2,
                            format: "yyyy/mm/dd",
                            language: "es",
                            autoclose: true

                        });  
                    
                    });
            </script>
            
            <div class="form-group">
                <label class="control-label col-xs-3">Genero:</label>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input type="radio"  name="genero" value="Masculino" checked> Masculino
                    </label>
                </div>
                <div class="col-xs-2">
                    <label class="radio-inline">
                        <input type="radio" name="genero" value="Femenino"> Femenino
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Notas:</label>
                <div class="col-xs-6">
                    <textarea class="form-control" name="nota" placeholder="Notas del cliente" cols="30" rows="3"></textarea>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="enviar" id="enviar">
                    <!--<input type="reset" class="btn btn-default" value="Limpiar">-->
                </div>
            </div>

        </form>

    </div>
    <!-- /.container -->
    
</body> 

</html>
