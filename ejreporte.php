<?php
	 require_once'php/conexion.php';
	ob_start();
?>

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

<style type="text/css">
	
	p {
		font-size: 9px;
		padding: 15px;
	}
	table, th, td {
    
	}
th,  {
    padding: 0px 15px 5px 15px;;

}
span{
	text-align: center;
}

td#t01, {
    width:150px;
    
}
td#t02 {
    width:150px;
    
}
td#t03 {
    width:150px;
    
}
td#t04 {
    width:150px;
    
}
td#t05 {
    width:150px;
    
}
td#tdfrom{
	 width:150px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
} 

</style>


<page>

	<table style="padding: 0px 15px 0px 15px;">
		<tr>
			<th style="border: 0px solid black;">CONVENCIONES Y SERVICIOS ESPECIALES<br>Lina Maria Acevedo Nit 33.366.257-7</th>
			<th style="border: 0px solid black;"> <img src="img/boreau.png" height="40" width="90">  </th>
			<th style="border: 0px solid black;">REGISTRO HOTELERO</th>
			<th style="color:white; border: 0px solid black;" ;>loremimpumsumdollarloremi</th>
		</tr>
	</table>
	<table style="padding: 0px 15px 0px 15px;">
		<tr>
			<td  style="width:250px;">
				Nombre/Name:
			</td>
			<td id="t01">
				Nacionalidad/Nacionality
			</td>
			<td>
				Identificacion/Identification
			</td>
			<td colspan="2"  style="width:150px;"></td>
		</tr>
		<tr>
			<td >
				<?php echo "<strong> ".$fila['Nombre']."</strong>"  ?>
			</td>
			<td id="t02">
				<?php echo  $fila['Nacionalidad'] ?> 
			</td>
			<td>
				<?php echo $fila['tipodoc'] ?> # <?php echo $fila['Documento'] ?>  
			</td>
			<td>
				<?php echo "De/From:   " .$fila['de_doc'] ?>
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td id="t03">
				
			</td>
			<td>
				___#
			</td>
			<td>
				De/From:
			</td>
		</tr>
		<tr>
			<td style="width">
				
			</td>
			<td id="t04">
				
			</td>
			<td>
				 ___#
			</td>
			<td>
			De/From:
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td id="t05">
				
			</td>
			<td>
				___#
			</td>
			<td>
				De/From:
			</td>
		</tr>
	</table>
	<table style=" border: 1px solid black; padding: 0px 15px 0px 15px;">
	  <tr style=" border: 1px solid black;">
	    <td style="width:150px; font-size: 11px "><?php echo "<strong>Direccion / Address<br></strong> " .$fila['dir_residencia'] ?></td>
	    <td style="width:100px; font-size: 11px; border: 1px solid black; "><?php echo "<strong>Ciudad /City<br></strong> " .$fila['ciudad_residencia'] ?></td>
	    <td style="width:100px; font-size: 11px; border: 1px solid black; "><?php echo "<strong>Pais / Country<br></strong> " .$fila['pais_residencia'] ?></td>
	    <td style="width:150px; font-size: 11px; border: 1px solid black;"><?php echo "<strong>Fecha de Nacimiento / Birth Date</strong> " .$fila['F_nacimiento'] ?> </td>
	    <td style="width:195px; font-size: 11px; border: 1px solid black;"><?php echo "<strong>Ocupacion / Occupation</strong><br> " .$fila['ocupacion'] ?></td>
	  </tr>
	  <tr>
	    <td colspan="2" style="border: 1px solid black; font-size: 11px; border-collapse: collapse;"><?php echo "<strong>Empresa:</strong> " .$fila['empresa'] ?> </td>
	    <td style="font-size: 11px;"> <?php echo "<strong>Nit:</strong> " .$fila['nit'] ?></td>
	   
	    <td style="font-size: 11px;"><?php echo "<strong>Telefono:<br></strong> " .$fila['telefono'] ?></td>
	    <td style="font-size: 11px;"><?php echo "<strong>email:<br></strong> " .$fila['email'] ?></td>
	  </tr>
	  <tr>
	  	<td colspan="3" style="font-size: 11px;"><?php echo "<strong>Procedencia/ coming from: </strong> " .$fila['procedencia'] ?></td>
	  	
	  	<td colspan="2" style=" font-size: 11px; border: 1px solid black;"><?php echo "<strong>Destino/ destination: </strong> " .$fila['destino'] ?></td>
	  	<td> </td>
	  </tr>

	</table>
	<table style="padding: 0px 15px 0px 15px;">
		<tr>
			<td style="width:723px; font-size: 12px;">Motivo Viaje / Reason of your trip:         <input type="checkbox"> Recreacion /Tourism <input type="checkbox"> Negocios /Business <input type="checkbox"> Salud /Health <input type="checkbox"> Otros /Others</td>
		</tr>
	</table>
	<table style="padding: 0px 15px 0px 15px;">
		<tr>
			<td style="width:119px; font-size: 10px;">Habitacion / Room:</td>
			<td colspan="2" style="width:80px; font-size: 10px;">          Ocupantes</td>
			
			<td style="width:60px; font-size: 10px;">Check In:</td>
			<td style="width:40px; font-size: 10px;">Dia</td>
			<td style="width:40px; font-size: 10px;">Mes</td>
			<td style="width:40px; font-size: 10px;">Año</td>
			<td style="width:80px; font-size: 10px;">Hora</td>
			<td style="width:128px; font-size: 10px;">Forma de Pago / Payment<br></td>
		</tr>
		<tr>
			
			<td style="width:119px; font-size: 10px;">Tarifa / Rate:</td>
			<td style="width:80px; font-size: 10px;">Adultos</td>
			<td style="width:80px; font-size: 10px;">Niños</td>
			<td style="width:60px; font-size: 10px;">Check Out:</td>
			<td style="width:40px; font-size: 10px;">Dia</td>
			<td style="width:40px; font-size: 10px;">Mes</td>
			<td style="width:40px; font-size: 10px;">Año</td>
			<td style="width:80px; font-size: 10px;">Hora</td>
			<td style="width:128px; font-size: 10px;"><br></td>
			
		</tr>

	</table>
<br>           
<table style="padding: -10px 0px -10px 0px;">
<tr>
<td style="border: 0px solid black; width:723px; text-align: center; font-size: 10px;"><strong>CONTRATO DE HOSPEDAJE</strong></td></tr></table>                                                   
        <P style="text-align: justify;">

<strong>DERECHOS Y DE LEGACIDNES DEL HOTEL</strong>- A) EL HOTEL, suministrará al HUESPED el servicio de hospedaje de una habitación y sus accesorios, mediante el pago delos cánones y precios vigentes en el momento de la prestación del servicio y  de acuerda a los siguientes planes. La tarifa y el plan son las que aparecen en la tarjeta de registro hotelero.  La prestación de estos servicios estará sujeta a disponibilidad ya los horarios, turnos o existencias físicas de los insumos, bienes facilidades o espacios necesarios para ella, B) EL HOTEL. Podrá en cualquier  momento, disponer el cambio de habitación y EL HUESPED deberá aceptarlo. C) EL HOTEL, tiene disponible a la vista del público las tarifas, precios del servicio y hora de iniciación y salida a las cuales se sujeta el HUÉSPED. D) EL HOTEL, tiene derecho de retención y prenda sobre el equipaje y bienes de posesión del HUÉSPED, derechos que se harán efectivos por el incumplimiento de las obligaciones por parte del HUÉSPED. En este caso EL HOTEL podrá retener en prenda los mencionados equipajes y bienes durante un plazo de treinta (30) días, contados a partirse la fecha del incumplimiento, vencido el cual, EL HOTEL podrá disponer libremente de los objetos pignorados y con su producto cubrir las obligaciones pendientes incluyendo interés más un (20%) por concepto de costos y gastos. El excedente, si lo hubiere, será puesto a disposición del HUÉSPED y en caso de déficit quedan a salvo las acciones del acreedor. E) Si ELHOTEL se encuentra en la imposibilidad de cumplir con una reservación aceptada por escrito, siempre que haya prepago o se ve forzado a terminar anticipadamente el hospedaje a plazo de terminado, deberá obtener alojamiento  para el HUESPED en otro establecimiento de tarifa similar. Si la tarifa del hotel sucedáneo es inferior,  EL HOTEL reembolsara  la diferencia al HUÉSPED y si es superior se asumirá por EL HOTEL.  La decisión será siempre del HOTEL pero procurara que en lo posible no haya diferencia de tarifas. <br><br>

<strong>DERECHOS Y OBLIGACIONES DEL HUÉSPED.</strong>: A) EL HUÉSPED declara conocerla tarifa, cánones y precios del HOTEL y admite que estas se modifiquen sin previo aviso. B) EL HUESPED se obliga a pagar su valor de contado en dinero efectivo, en el momento de la prestación de respectivo servicio y en todo caso al momento del cese de la permanencia del HUÉSPED en EL HOTEL. El día hotelero comprende el lapso de 24 horas de permanencia del huésped, a partir de la iniciación que fija EL HOTEL. La utilización parcial del día hotelero causa el pago de la tarifa completa. C) EL HUÉSPED será responsable hasta por la culpa leve de sus obligaciones y las de sus acompañantes. Cualquier persona no registrada que haga uso del alojamiento exclusivamente reservado al HUÉSPED deberá registrarse y pagar un sobrecargo del 100% sobre el canon vigente D) EL HUÉSFED deberá observar una conducta decorosa  y vestir de manera apropiada. EL HOTEL se abstendrá de prestar sus servicios cuando el comportamiento o la indumentaria del HUÉSPED no sea la adecuada. E) EL HUÉSPED admite que la práctica de deportes, ejercicios físicos, conducción de naves o vehículos, utilización de instrumentos o herramientas y, en general, toda la actividad que signifique un riesgo implica que EL HUESPED tiene habilidades y el conocimiento que le permiten asumir dichos riesgos, así como la responsabilidad  en caso de que sufra cualquier daño o lesión de la cual exima expresamente al HOTEL. F) EL HUÉSPED se compromete a utilizarlos muebles, equipos y, en general, las facilidades del HOTEL de manera adecuada, conservandolas en el estado en que se encuentran y, por tanto, responderá  por cualquier daño o pérdida de los elementos y bienes del HOTEL, hasta por la culpa leve, En caso tie pérdida o daño total o parcial de los bienes del HOTEL por causa atribuible al HUESPED o sus dependientes, este reconocerá el precio fijado por EL HOTEL, más el 50% a título de pena o multa. G) EL HUÉSPED reconoce la autoridad del Gerente del HOTEL, en caso de controversia o conflicto, así como el derecho de inspección a vigilancia que tos funcionarios del HOTEL tienen para garantizarla adecuada utilización de las unidades habitacionales de uso común. Este derecho se ejercerá  de manera razonable e incluye la facultad de penetrar o registrar la habitación cuando a juicio del Gerente del HOTEL sea preciso. EL HUÉSPED a su vez se obliga a observar los  horarios y formas fijadas por el HOTEL para la prestación  de sus servicios y facilitar el acceso a sus empleados para las labores de rutina en la habitación. <br><br>

<strong>TERMINACIÓN DEL CONTRATO:</strong> El contrato de hospedaje termina: A) Por vencimiento del plazo fijo pactado: B) Por incumplimiento de cualquiera do las obligaciones de las partes. El incumplimiento del HUÉSPED no lo exonerará del pago del canon completo por el plazo pactado; C) Cuando el contrato sea celebrado día a día, o sea, cuando no consta expresamente en la tarjeta de registro hotelero el termino de permanencia del huésped en EL HOTEL, el contrato  dará por terminado al vencimiento del día hotelero fijado según el contrato: D) Cuando el contrato sea a plazo determinado, terminará por et vencimiento de este, en cuyo caso EL HOTEL podrá disponer de la habitación. En caso de terminación anticipada EL HUÉSPED deberá pagar la tarifa correspondiente al plazo completo, amenes que exista causa razonable que, a juicio del HOTEL, ameriten la terminación anticipada del contrato, como son la calamidad doméstica, enfermedad del HUÉSPED  del grupo a su cargo, problemas de cupo aéreo, etc. <br><br>

<strong>DESACUERDO DE LA TERMlNAClÓN.-</strong> Si surge desacuerdo entre EL HUÉSPED y EL HOTEL en cuanto a terminación del contrato, EL HOTEL además dela suspensión del servicio, tomará todas las necesarias para que le HUESPED pueda disponer de su equipaje y objetos personales o los trasladara a un depósito seguro y adecuado sin responsabilidad del HOTEL.<br><br>

<strong>PRUEBA DEL CONTRATO. </strong> El contrato de hospedaje se prueba mediante la tarjeta de registro hotelero que EL HOTEL expida, aceptada por la firma del HUÉSFED la cual hace constar que es te se adhiere a las estipulaciones aquí contenidas. EL HUÉSPED acepta expresamente que la "suma liquidada de  dinero que conste en la factura, prestará mérito ejecutivo.<br><br>

<strong>SEGUROS.-</strong> Para responder por riesgos que afectan tanto a la persona como a los bienes del HUÉSPED. EL HOTEL tiene a su disposición una póliza de seguro hotelero. Si EL HUÉSPED toma el seguro mencionado deberá pagar la prima diaria que la compañía de seguros ha señalado, la cual se adicionará a la factura de alojamiento. En todo caso al ocurrir un siniestro la responsabilidad del HOTEL se limita al cubrimiento del seguro. Si EL HUÉSPED se abstiene de tomar este seguro asume la totalidad de los riesgos cubiertos porta póliza y en caso de siniestro renuncia a reclamación alguna respecto del HOTEL Esta póliza de seguro es de carácter voluntario.
<br><br>
<strong>RESPONSABILIDAD PORPERDIDA:-</strong> si no media entrega al HOTEL de los objetos que EL HUESPED desea que se custodien, se exonera  al HOTEL de toda responsabilidad en caso de pérdida, por tanto, los objetos de valor como joyas cámaras, dinero, equipos o utensilios que permanezcan en la habitación o áreas de servicios diferentes a las que ELHOTEL dispone para depósitos estarán bajo el único riesgo del HUESPED ya que en este caso EL HOTEL no asume responsabilidad alguna, en caso de pérdida o deterioro. EL HUÉSPED autoriza al HOTEL para llenar los espacios en blanco en la tarjeta de registro hotelero. <br>
El Hotel no se hace responsable por la pérdida, deterioro o hurto de vehículos u objetos  dejados en el parqueadero, en tanto que es un servicio que el hotel presta gratuitamente.<br>
 <strong>"ADVERTENCIA: En desarrollo con lo dispuesto en el articula 11 dela Ley 519 de 2001, EL HOTEL advierte al HUESPED que la explotación y el abuso sexual  de menores de edad en el país son castigados penal  y civilmente conforme a las disposiciones legales vigentes“.</strong> <br><br>


<strong>AUTORIZACIÓN:</strong> a) Autorizo (amos) de manera irrevocable a CONIENCIONES Y SERVICIOS ESPECIALES para fines estadísticos de control,  supervisión o información comercial, consulte o repone ante la central de entidades financieras (CIFIN) o cualquier otra entidad que maneje bases de datos con los mismo fines,  información referente a mi persona, empresa, comportamiento crediticio comercial  y en general el cumplimiento de todas mis obligaciones. b) Acepto que los registros permanecerán por los términos previstos en los reglamentos de las perspectivas centrales de información.  c) Me comprometo con convenciones y servicios especiales a informar por escrito y oportunamente cualquier cambio de datos, cifras y demás información, así como suministrar la totalidad delos soportes documentales exigidos y a actualizar dicha información con una periocidad como mínimo anual. d) Declaro y acepto que la información suministrada es veraz que todo proceso de vinculación y aprobación queda sujeto a validación. e) Los datos suministrados en este formato, pueden ser utilizados para el envió de información promocional de de su interés. Esta información no será suministrada a terceros.  SEGUROS Para responder por riesgos que afecten a personas como a los bienes del HUÉSPED, EL HOTEL tiene a su disposición una póliza de seguro si el huésped toma el seguro mencionado deberá pagar la prima diaria que la compañía de seguros ha señalado, la cual se adicionara a la tarifa del alojamiento.  En todo caso al ocurrir un siniestro la responsabilidad del HOTEL, se limita al cubrimiento del seguro Si el HUÉSPED se sostiene de tomar este seguro asume la totalidad de los riesgos cubiertos por la póliza y en caso de siniestro renuncia a la reclamación alguna respecto del HOTEL Para electo de la presente cláusula del HUÉSPED expresamente declara que ingresa los siguientes objetos de valor. En constancia de haber leído, entendido esta información, firmo el presente documento.
</P>
<table style="padding: 0px 15px 0px 15px;">
<tr>
<td style="padding: 0px 15px 0px 180px; border: 0px solid black;">
	MARCA
</td>
<td style="padding: 0px 15px 0px 180px; border: 0px solid black;"> SERIAL</td>
</tr>
<tr>
<td style="padding: 0px 15px 0px 180px; border: 0px solid black;">
	
</td>
<td ></td>
<td style="padding: 0px 15px -100px 50px; border: 0px solid black;">FIRMA / SIGNATURE</td>
</tr>
</table>
<table style="padding: 0px 15px 0px 15px;">
<tr>
	<td style="border: 0px solid black;">Computador portatil:</td>
	<td style="border: 0px solid black;">__________________________</td>
	<td style="border: 0px solid black;">__________________________</td>
</tr>
<tr>
	<td style="border: 0px solid black;">Cámara Fotografica:</td>
	<td style="border: 0px solid black;">__________________________</td>
	<td style="border: 0px solid black;">__________________________</td>
</tr>
<tr>
	<td style="border: 0px solid black;">Filmadora:</td>
	<td style="border: 0px solid black;">__________________________</td>
	<td style="border: 0px solid black;">__________________________</td>
</tr>
<tr>
	<td style="border: 0px solid black;">Otros:</td>
	<td style="border: 0px solid black;">____________________________</td>
	<td style="border: 0px solid black;">__________________________</td>
	<td style="border: 0px solid black;">____________________________</td>
</tr>
</table>
</page>

<?php
$content = ob_get_clean();
require_once('html2pdf/html2pdf.class.php');
$pdf=new HTML2PDF('P','A4','fr','utf-8');
$pdf->writeHTML($content);
#$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output('Registro.pdf');
?>
