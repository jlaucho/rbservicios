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
		<td style = "width: 348px; ">'.$nombre.'</td>
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