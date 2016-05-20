<?php

include("conexion.php");

if($_POST['buscando'])
{
	$buscar=$_POST['palabra']
	
			// Conexión a la base de datos y seleccion de registros

			$sql = "select * from clientes where Documento = ‘$buscar’ ";
			$datos = mysql_query($sql, $con);
			
			echo "<table border='1'>";
			while ($renglon=mysql_fetch_array($datos)) {
				echo "<tr>";
				echo "<td>". $renglon['Nombre']."</td>";
				echo "<td>". $renglon['Documento']."</td>";
				echo "</tr>";
			}
		
	echo "</table>";
}
?>