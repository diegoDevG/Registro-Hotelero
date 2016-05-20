
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
</html>
<?php
require_once('conexion.php');

$search="";
if (isset($_POST['search'])){
	$search=$_POST['search'];
}

$consulta ="SELECT * FROM clientes WHERE Documento LIKE '%".$search."%' OR Nombre LIKE '%".$search."%' LIMIT 10";
$resultado=$conect->query($consulta);
$fila =mysqli_fetch_assoc($resultado);
$total= mysqli_num_rows($resultado);

?>

<?php if($total>0 && $search!=''){ ?>
	<h3>Resultado de la busqueda</h3><br>
		
	<?php do { ?>

		<div  style="background-color:#F0F0F0; border-radius: 5px; padding:10px;"><a href="cliente.php?Documento=<?php echo $fila['Documento'] ?>&search=<?php echo $search?>"> <h4><?php echo "<strong> ".$fila['Nombre']."</strong>" ?></h4></a>
		<?php echo "<strong></strong> " .$fila['tipodoc'] ?>
		<?php echo "<strong></strong> " .$fila['Documento'] ?>
		<?php echo "<strong>de: </strong> " .$fila['de_doc'] ?> 
		<?php echo "<strong>Nacionalidad:</strong> " .$fila['Nacionalidad'] ?> 
		<?php echo "<strong>Fecha de Nacimiento:</strong> " .$fila['F_nacimiento'] ?> 
		<?php echo "<strong>Genero:</strong> " .$fila['genero'] ?>
		<br>
		<?php echo "<strong>Dir. Residencia:</strong> " .$fila['dir_residencia'] ?>
		<?php echo "<strong></strong> " .$fila['ciudad_residencia'] ?>
		<?php echo "<strong>,</strong> " .$fila['pais_residencia'] ?>
		<?php echo "<strong>Telefono:</strong> " .$fila['telefono'] ?>
		<?php echo "<strong>Email:</strong> " .$fila['email'] ?><br>
		<?php echo "<strong>Procedencia:</strong> " .$fila['procedencia'] ?>
		<?php echo "<strong>Destino:</strong> " .$fila['destino'] ?>
		<?php echo "<strong>Ocupacion:</strong> " .$fila['ocupacion'] ?>
		<?php echo "<strong>Empresa:</strong> " .$fila['empresa'] ?>
		<?php echo "<strong>Nit:</strong> " .$fila['nit'] ?><br>
		<?php echo "<strong>Notas: </strong> " .$fila['nota'] ?>
		<br><br>

		
 		 <!--<a class="btn btn-primary" href="php/reg.php?Documento=<?php  echo $fila['Documento'] ?>&search=<?php echo $search?>" ' 
		 	onclick="return confirm('Esta accion creara un nuevo registro en el historial del cliente, desea continuar?')" 
		 	' target='reg' onclick=\"alert(this.href, this.target, 'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;\'>Registrar</a> -->
		 <a class="btn btn-primary" href="ejreporte.php?Documento=<?php  echo $fila['Documento'] ?>&search=<?php echo $search?>" ' target='reg' onclick=\"alert(this.href, this.target, 'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;\'> <?php echo "Imprimir Registro"?></a>
		<!-- <a class="btn btn-primary" href="php/historial.php?Documento=<?php  echo $fila['Documento'] ?>&search=<?php echo $search?>" ' 
		 	' target='reg' onclick=\"alert(this.href, this.target, 'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;\'>Historial</a> -->
		 </div>
		 <br><br>

	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>


<?php }
	elseif ($total>0 && $search =='') echo "<br><br><br><h4 class='pager'>Ingrese un parametro de busqueda</h4>"; 
		
		else echo '<br><br><p class="pager">Consulta no encontrada! </p><div class ="pager"><a href="registro.php"><input type="text" class="btn btn-primary " value="Registrar nuevo cliente"></a></div>'; 
 ?>
 