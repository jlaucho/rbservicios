$(document).ready(function(){
	//PARA COLOCAR EL FORMATO POR DEFECTO Y LA FECHA EN ESPAÑOL

	jQuery(function($){
	   $.datepicker.regional['es'] = {
	      closeText: 'Cerrar',
	      prevText: '<Ant',
	      nextText: 'Sig>',
	      currentText: 'Hoy',
	      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
	      monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
	      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
	      dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
	      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
	      weekHeader: 'Sm',
	      dateFormat: 'dd/mm/yy',
	      firstDay: 1,
	      isRTL: false,
	      showMonthAfterYear: false,
	      yearSuffix: ''};
	   $.datepicker.setDefaults($.datepicker.regional['es']);
}); 

	//en todas las casillas de fechas del sistema
	$('#fecha').datepicker();
	
	
});
