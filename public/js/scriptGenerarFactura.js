/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


;$(document).ready(function () {
	$('#formFactura').validate({
		rules:{
			nombre:{
				required:true
			},
            rif:{
                required:true
            }
		},
           /*     submitHandler:function (){
                    var datos = {
                        nombre:$('#nombre').val(),
                        rif:$('#rif').val(),
                        direccion:$('#direccion').val(),
                        telefono:$('#telefono').val(),
                        fecha:$('#fecha').val(),
                        codigo:$('#codigo').val(),
                        cantidad:$('#cantidad').val(),
                        descripcion:$('#descripcion').val(),
                        precioUnidad:$('#precioUnidad').val(),
                        total:$('#total').val(),
                        baseImponible:$('#baseImponible').val(),
                        iva:$('#iva').val(),
                        totalGeneral:$('#totalGeneral').val(),
                    };
                   /* $.ajax({
                        data: datos,
                        url:'./php/PDF_factura.php',
                        type: "POST",
                        /*success:function (argument) {
                        	alert(argument);
                        }
                        
                    })
                }*/
	});
});
jQuery(document).ready(function() {
    $(".precioUnidad").blur(function() {

        var precioUni1 = $('#precioUnidad1').val()*1;
        var precioUni2 = $('#precioUnidad2').val()*1;
        var precioUni3 = $('#precioUnidad3').val()*1;
        var precioUni4 = $('#precioUnidad4').val()*1;
        var precioUni5 = $('#precioUnidad5').val()*1;
        var precioUni6 = $('#precioUnidad6').val()*1;
        
           
        if(precioUni1 > 0){
        $('#precioUnidad1').val(precioUni1.toFixed(2));
        }
        if(precioUni2 > 0){
        $('#precioUnidad2').val(precioUni2.toFixed(2));
        }
        if(precioUni3 > 0){
        $('#precioUnidad3').val(precioUni3.toFixed(2));
        }
        if(precioUni4 > 0){
        $('#precioUnidad4').val(precioUni4.toFixed(2));
        }
        if(precioUni5 > 0){
        $('#precioUnidad5').val(precioUni5.toFixed(2));
        }
        if(precioUni6 > 0){
        $('#precioUnidad6').val(precioUni6.toFixed(2));
        }
      
    })
});
$(document).ready(function () {
    $('#porcentaje_IVA, #precioUnidad1, #precioUnidad2, #precioUnidad3, #precioUnidad4, #precioUnidad5, #precioUnidad6').change(function () {
        //se declaran las variables para la realizacion de los calculos
        var total1 = 0, total2 = 0, total3 = 0, total4 = 0, total5 = 0, total6 = 0;
        var porcentaje_IVA = $('#porcentaje_IVA').val();
        var baseImponible;
        var totalGeneral;

        //En este punto capturamos todos los valores de la pagina

        total1 = $('#precioUnidad1').val()*$('#cantidad1').val();
        total2 = $('#precioUnidad2').val()*$('#cantidad2').val();
        total3 = $('#precioUnidad3').val()*$('#cantidad3').val();
        total4 = $('#precioUnidad4').val()*$('#cantidad4').val();
        total5 = $('#precioUnidad5').val()*$('#cantidad5').val();
        total6 = $('#precioUnidad6').val()*$('#cantidad6').val();

        //Procedemos a escribir los totales en sus respectivas casillas
        
        $('#total1').val(total1.toFixed(2));

        if(total2 > 0){
        $('#total2').val(total2.toFixed(2));
        }
        if(total3 > 0){
        $('#total3').val(total3.toFixed(2));
        }
        if(total4 > 0){
        $('#total4').val(total4.toFixed(2));
        }
        if(total5 > 0){
        $('#total5').val(total5.toFixed(2));
        }
        if(total6 > 0){
        $('#total6').val(total6.toFixed(2));
        }
        //procedemos a realizar los calculos para la obtencion de los valores

        baseImponible = total1+total2+total4+total4+total5+total6;
        $('#baseImponible').val(baseImponible.toFixed(2));
        $('#iva').val((baseImponible * porcentaje_IVA/100).toFixed(2));
        totalGeneral = parseFloat(baseImponible) + parseFloat($('#iva').val());
        totalGeneral = totalGeneral.toFixed(2);
        $('#totalGeneral').val(totalGeneral);

    })
})
