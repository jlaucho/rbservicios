<?php /*
	Se carpuran los datos enviados del html
*/
$rif = $_REQUEST['rif'];
$nombre = $_REQUEST['nombre'];
$numFactura = 'Factura-'.$_REQUEST['numFactura'];
$fecha = $_REQUEST['fecha'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];

$codigo1 = $_REQUEST['codigo1'];
$cant1= $_REQUEST['cantidad1'];
$descripcion1 = $_REQUEST['descripcion1'];
$precioUnit1 = $_REQUEST['precioUnidad1'];
$total1 = $_REQUEST['total1'];

$codigo2 = $_REQUEST['codigo2'];
$cant2= $_REQUEST['cantidad2'];
$descripcion2 = $_REQUEST['descripcion2'];
$precioUnit2 = $_REQUEST['precioUnidad2'];
$total2 = $_REQUEST['total2'];

$codigo3 = $_REQUEST['codigo3'];
$cant3= $_REQUEST['cantidad3'];
$descripcion3 = $_REQUEST['descripcion3'];
$precioUnit3 = $_REQUEST['precioUnidad3'];
$total3 = $_REQUEST['total3'];

$codigo4 = $_REQUEST['codigo4'];
$cant4= $_REQUEST['cantidad4'];
$descripcion4 = $_REQUEST['descripcion4'];
$precioUnit4 = $_REQUEST['precioUnidad4'];
$total4 = $_REQUEST['total4'];

$codigo5 = $_REQUEST['codigo5'];
$cant5= $_REQUEST['cantidad5'];
$descripcion5 = $_REQUEST['descripcion5'];
$precioUnit5 = $_REQUEST['precioUnidad5'];
$total5 = $_REQUEST['total5'];

$codigo6 = $_REQUEST['codigo6'];
$cant6= $_REQUEST['cantidad6'];
$descripcion6 = $_REQUEST['descripcion6'];
$precioUnit6 = $_REQUEST['precioUnidad6'];
$total6 = $_REQUEST['total6'];

$codigo7 = $_REQUEST['codigo7'];
$cant7= $_REQUEST['cantidad7'];
$descripcion7 = $_REQUEST['descripcion7'];
$precioUnit7 = $_REQUEST['precioUnidad7'];
$total7 = $_REQUEST['total7'];

$codigo8 = $_REQUEST['codigo8'];
$cant8= $_REQUEST['cantidad8'];
$descripcion8 = $_REQUEST['descripcion8'];
$precioUnit8 = $_REQUEST['precioUnidad8'];
$total8 = $_REQUEST['total8'];

$codigo9 = $_REQUEST['codigo9'];
$cant9= $_REQUEST['cantidad9'];
$descripcion9 = $_REQUEST['descripcion9'];
$precioUnit9 = $_REQUEST['precioUnidad9'];
$total9 = $_REQUEST['total9'];

$codigo10 = $_REQUEST['codigo10'];
$cant10= $_REQUEST['cantidad10'];
$descripcion10 = $_REQUEST['descripcion10'];
$precioUnit10 = $_REQUEST['precioUnidad10'];
$total10 = $_REQUEST['total10'];

$codigo11 = $_REQUEST['codigo11'];
$cant11= $_REQUEST['cantidad11'];
$descripcion11 = $_REQUEST['descripcion11'];
$precioUnit11 = $_REQUEST['precioUnidad11'];
$total11 = $_REQUEST['total11'];




$baseImponible = $_REQUEST['baseImponible'];
$porcentaje_IVA = $_REQUEST['porcentaje_IVA'];
$iva = $_REQUEST['iva'];
$totalGeneral = $_REQUEST['totalGeneral'];


/* Se importa el archivo convert co la configuracion por defecto que va a tener el PDF*/

include('./ConvertToPDF.php');

/*Se crea el HTML que va a contener los datos de mi PDF*/

$html = '<table border"1" class="tabla1">
	<tr>
		<td style = "width:140px; height: 23px">&nbsp;</td>
		<td style = "width: 356px; ">'.$nombre.'</td>
		<td>'.$fecha.'</td>
	</tr>
	<tr>
		<td></td>
		<td style = "height: 23px">'.$rif.'</td>
		<td></td>
	</tr>
	<tr">
		<td style = "height: 23px"></td>
		<td colspan = "2">'.$direccion.'</td>

	</tr>
	<tr>
		<td  style = "height: 23px"></td>
		<td>'.$telefono.'</td>
		<td></td>
	</tr>
</table>


<table border"1" class="tabla2">
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo1.'</td>
		<td style = "width:70px; height: 23px">'.$cant1.'</td>
		<td style = "width:370px; height: 23px">'.$descripcion1.'</td>
		<td style = "width:45px; height: 23px">'.$precioUnit1.'</td>
		<td style = "width:150px; height: 23px">'.$total1.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo2.'</td>
		<td style = "width:70px; height: 23px">'.$cant2.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion2.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit2.'</td>
		<td style = "width:150px; height: 23px">'.$total2.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo3.'</td>
		<td style = "width:70px; height: 23px">'.$cant3.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion3.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit3.'</td>
		<td style = "width:150px; height: 23px">'.$total3.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo4.'</td>
		<td style = "width:70px; height: 23px">'.$cant4.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion4.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit4.'</td>
		<td style = "width:150px; height: 23px">'.$total4.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo5.'</td>
		<td style = "width:70px; height: 23px">'.$cant5.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion5.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit5.'</td>
		<td style = "width:150px; height: 23px">'.$total5.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo6.'</td>
		<td style = "width:70px; height: 23px">'.$cant6.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion6.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit6.'</td>
		<td style = "width:150px; height: 23px">'.$total6.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo7.'</td>
		<td style = "width:70px; height: 23px">'.$cant7.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion7.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit7.'</td>
		<td style = "width:150px; height: 23px">'.$total7.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo8.'</td>
		<td style = "width:70px; height: 23px">'.$cant8.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion8.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit8.'</td>
		<td style = "width:150px; height: 23px">'.$total8.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo9.'</td>
		<td style = "width:70px; height: 23px">'.$cant9.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion9.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit9.'</td>
		<td style = "width:150px; height: 23px">'.$total9.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo10.'</td>
		<td style = "width:70px; height: 23px">'.$cant10.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion10.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit10.'</td>
		<td style = "width:150px; height: 23px">'.$total10.'</td>
	</tr>
	<tr>
		<td style = "width:70px; height: 23px">'.$codigo11.'</td>
		<td style = "width:70px; height: 23px">'.$cant11.'</td>
		<td style = "width:345px; height: 23px">'.$descripcion11.'</td>
		<td style = "width:40px; height: 23px">'.$precioUnit11.'</td>
		<td style = "width:150px; height: 23px">'.$total11.'</td>
	</tr>
</table>


<table border"1" class="tabla3">
	<tr>
		<td style = "width:80px; height: 23px"></td>
		<td style = "width:70px; height: 23px">'.$baseImponible.'</td>
	</tr>
	<tr>
		<td style = "width:80px; height: 23px">'.$porcentaje_IVA.'</td>
		<td style = "width:70px; height: 23px">'.$iva.'</td>
	</tr>
	<tr>
		<td style = "width:80px; height: 23px"></td>
		<td style = "width:70px; height: 23px"><b>'.$totalGeneral.'</b></td>
	</tr>
</table>';

	 doPDF($numFactura,$html,true,'./stylePDF.css',true,'letter','portrait');
 ?>
