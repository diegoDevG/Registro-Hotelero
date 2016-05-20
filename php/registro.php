<?php require_once('conexion.php') ?>

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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Bootstrap datepicker js -->
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/registro.js"></script>
    

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
                <a class="navbar-brand" href="#">Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Pagina Web</a>
                    </li>
                    <li>
                        <a href="#">Facturacion</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="row">
            <div class="col-lg-12 text-center">
                <h1>Registro de Clientes</h1>
                <!-- <p class="lead">Hotel Boyaca Plaza</p>-->
                <img src="../img/logo.png" height="110" width="290">
            </div>
        </div>
</body>

</html>
<?php



$tabla="clientes";

$nom=$_POST['Nombre'];
$doc=$_POST['Documento'];
$tipo=$_POST['tipodoc'];
$dedoc=$_POST['de_doc'];
#$de=$_POST['de_doc'];
$nac=$_POST['Nacionalidad'];
$fn=$_POST['F_nacimiento'];
$oc=$_POST['ocupacion'];
$em=$_POST['empresa'];
$nit=$_POST['nit'];
$prov=$_POST['procedencia'];
$des=$_POST['destino'];
$res=$_POST['dir_residencia'];
$city=$_POST['ciudad_residencia'];
$pais=$_POST['pais_residencia'];
$tel=$_POST['telefono'];
$mail=$_POST['email'];
$gen=$_POST['genero'];
$nota=$_POST['nota'];


$sentencia="INSERT INTO ".$tabla." (Nombre,Documento,tipodoc,de_doc,Nacionalidad,F_nacimiento,ocupacion,empresa,nit,procedencia,destino,
	dir_residencia,ciudad_residencia,pais_residencia,telefono,email,genero,nota) VALUES ('$nom','$doc','$tipo','$dedoc','$nac','$fn','$oc','$em','$nit','$prov','$des',
	'$res','$city','$pais','$tel','$mail','$gen','$nota')";

#$sentencia="INSERT INTO ".$tabla." (Nombre,Documento,tipodoc,Nacionalidad,F_nacimiento,ocupacion,
#	ciudad_residencia,pais_residencia,telefono,email,genero,nota) VALUES ('$nom','$doc','$tipo','$nac','$fn','$oc','$city','$pais','$tel','$mail','$gen','$nota')";

if(mysqli_query($conect,$sentencia)){ 
            echo '<div class="pager">El cliente ha sido registrado en la base de datos</div>'; echo "<br>";
            echo '<div class="pager"><a href="../registro.php"><input type="text" class="btn btn-primary" value="Registrar nuevo cliente"></a>
                                <a href="../index.php"><input type="text" class="btn btn-primary" value="Imprimir registro"></a></div>';
    }else{ 
               print "<br>No se ha añadido el registro a la tabla mediante procesos<br>"; 
            print "Error : ". mysqli_error($conect); 
            exit(); 
    } 


#mysql_query("INSERT INTO clientes(Nombre,Documento,Nacionalidad,F_nacimiento,procedencia,destino,
#	dir_residencia,ciudad_residencia,telefono,email,genero) values('$nom','$doc','$nac','$fn','$prov','$des',
#	'$res','$city','$tel','$mail','$gen')")or die(mysql_error());


?>
