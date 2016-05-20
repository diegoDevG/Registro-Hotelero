<?php
	$host = "localhost";
	$user = "root";
	$Pass = "";
	$db = "gestionh";

	//$con= mysql_connect($host,$user,$Pass) or die("No se pudo establecer la conexion");
	//mysql_select_db($db,$con)or die("No se conecto a la bd"); 


	$conect = new mysqli($host,$user,$Pass,$db) or die("error" . mysql_errno($conect));

    //$conexion = new mysqli('localhost','root','','BoyacaPlaza')

	
?>