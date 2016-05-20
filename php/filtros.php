<!DOCTYPE html>
<!-- Archivo que arroja los resultados de busqueda en la pagina principal -->
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
    }h3{
        color:#666;
        background-color:#FFF;
        font-family: 'Roboto Condensed', sans-serif;
    }
    td, tr, th{
    	padding: 2px 5px 2px 5px ;
    }
    </style>
    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Bootstrap datepicker js -->
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/ajax.js"></script>
    
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="container">
	<div class="row">
            <div class="col-lg-12 text-center">
                 
                <img src="../img/logo.png" height="110" width="290">
                <h3>Filtro por mes</h3>
            </div>
        </div>
	<?php require_once('conexion.php') ?>


<?php
$mes = $_GET["mes"];

$consulta = "SELECT  * FROM clientes WHERE MONTH(F_nacimiento) = ".$mes."";

$resultado=$conect->query($consulta);
$fila =mysqli_fetch_assoc($resultado);

?>


	<h4 text-center>Resultado de la busqueda</h4><br>
<?php
	echo "<table border=2 width='70%' align=center>
   <tr>
      <th> Nombre </th>
      <th> Genero </th>
      <th> Ciudad Residencia</th>
      <th> Fecha Cumpleaños </th>
      <th> Email </th>
      <th> Telefono </th>

      

   </tr>";
   ?>
		
	<?php do { ?>

	<?php	
		echo "<tr>";
  echo " <td> ".$fila['Nombre']. " </td>";  
  echo " <td> ".$fila['genero']. " </td>";
  echo "<td> ".$fila['ciudad_residencia']. " </td>"; 
  echo "<td> ".$fila['F_nacimiento']. " </td>";
  echo "<td> ".$fila['email']. " </td>";
  echo "<td> ".$fila['telefono']. " </td>";
  
      
  echo "</tr>";

		
 	?>	 

	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php  echo "</table>;"  ?>



	</div>
</body>
</html>

 