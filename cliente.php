<?php require_once('php/conexion.php') ?>

<?php 
$search="";
if (isset($_GET['search'])){
    $search=$_GET['search'];
}

$Documento="";
if (isset($_GET['Documento'])){
    $Documento=$_GET['Documento'];
}

$consulta ="SELECT * FROM clientes WHERE Documento =".$Documento."";
$resultado=$conect->query($consulta);
$fila =mysqli_fetch_assoc($resultado);
$total= mysqli_num_rows($resultado);

 ?>
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
    }h3{
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
                        <a href="registro.php">Nuevo Cliente</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Page Content -->
    <div class="container">

        <div id="encabezado"class="row">
            <div class="col-lg-12 text-center">
                <h1>Registro de Clientes</h1>
                <!-- <p class="lead">Hotel Boyaca Plaza</p>-->
                <img src="img/logo.png" height="110" width="290">
            </div>
        </div>
        
       
        <div class="pager" id="resultados">

             <h3 style="color:#666; background-color:#FFF; font-family: 'Roboto Condensed', sans-serif;"><?php echo "<strong></strong> ".$fila['Nombre'] ?></h3>
            <?php echo "<strong>Documento: </strong> " .$fila['tipodoc'] ?>
            <?php echo "<strong></strong> " .$fila['Documento'] ?> 
            <?php echo "de: " .$fila['de_doc'] ?>        <br>
            <?php echo "<strong>Nacionalidad:</strong> " .$fila['Nacionalidad'] ?>  <br>
            <?php echo "<strong>Fecha de Nacimiento:</strong> " .$fila['F_nacimiento'] ?> <br>
            <?php echo "<strong>Genero:</strong> " .$fila['genero'] ?> <br>
            <br> <br><br>

        <form class="form-horizontal" action="php/actualizar.php" method= "post" id="">
            <input type="hidden" name="Documento" value="<?php echo '$Documento';?>">
            <div class="form-group">
                <label class="control-label col-xs-3"></label>
                <div class="col-xs-4">
                <?php echo "<input type='hidden' class= 'form-control' name='Documento' size='20' value='".$fila['Documento']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Nombre:</label>
                <div class="col-xs-6">
                    <?php echo "<input type='text' class= 'form-control' name='Nombre' size='20' value='".$fila['Nombre']."'>" ?>
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
                    <?php echo"<input type='number' class='form-control' name='Documento' required value='".$fila['Documento']."'>"?>
                    <?php echo "<input type='text' class= 'form-control' name='de_doc' size='20' value='".$fila['de_doc']."'>" ?>
                    
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Nacionalidad:</label>
                <div class="col-xs-6">
                    <?php echo "<input type='text' class= 'form-control' name='Nacionalidad' size='20' value='".$fila['Nacionalidad']."'>" ?>
                    
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Fecha de Nacimiento </label>
                <div class="col-xs-6">
                    <?php echo "<input type='text' class= 'form-control' name='F_nacimiento' required id='datepicker' size='20' value='".$fila['F_nacimiento']."'>" ?>
                    
                </div>
            </div>

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
            <div class="form-group form-inline">
                <label class="control-label col-xs-3">Direccion de residencia:</label>
                <div class="col-xs-6">
                <?php echo "<input type='text' class= 'form-control' name='dir_residencia' size='18' value='".$fila['dir_residencia']."'>" ?>
                <?php echo "<input type='text' class= 'form-control' name='ciudad_residencia' size='18' value='".$fila['ciudad_residencia']."'>" ?>
                <?php echo "<input type='text' class= 'form-control' name='pais_residencia' size='18' value='".$fila['pais_residencia']."'>" ?>
                </div>

            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Telefono:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='telefono' size='20' value='".$fila['telefono']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Email:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='email' size='20' value='".$fila['email']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Lugar de Procedencia:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='procedencia' size='20' value='".$fila['procedencia']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Destino:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='destino' size='20' value='".$fila['destino']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Ocupacion:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='ocupacion' size='20' value='".$fila['ocupacion']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Empresa:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='empresa' size='20' value='".$fila['empresa']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Nit:</label>
                <div class="col-xs-4">
                <?php echo "<input type='text' class= 'form-control' name='nit' size='20' value='".$fila['nit']."'>" ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Notas:</label>
                <div class="col-xs-4">
                <textarea cols='30' rows='4' class= 'form-control' name='nota' size='20'><?php echo $fila['nota']; ?></textarea>
                </div>
            </div><br>


            
            <div style ="float: center; padding: 0px 600px 0px 0px;"class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary " value="Acualizar" name="enviar" id="enviar">
                    
            </div>
        </form>
           
        </div>
        <br><br><br><br><br><br>

        

    </div>
    <!-- /.container -->
    
</body>

</html>