@extends('plantillas.main')

@section('title')
	Generacion de Factura
@stop

@section('link')
	<link rel="stylesheet" type="text/css" href="{{asset('factura/css/style.css')}}">
@stop

@section('tituloPagina')
	Generacion de Factura
@stop

@section('subtituloPagina')
	Introduzca los datos para la generacion de la factura
@stop

@section('contenido')

<div class="form-group">
	{!! Form::open(['route'=>'guardar.store', 'method'=>'POST', 'class'=>'form-horizontal form-label-left']) !!}

	{!! Form::label('cliente', 'Seleccione el Cliente:', []) !!}
				{!! Form::hidden('_token', csrf_token(), ['id'=>'token']) !!}
				{!! Form::select('cliente', $cli, '', ['class'=>'form-control', 'placeholder'=>'Seleccione el cliente']) !!}
	<table class="table  table-striped table-hover">
		<thead>
			<tr>
				<th colspan='3'>Datos de La empresa</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class = 'td10'>{!! Form::label('nombreEmpre', 'Nombre:', []) !!}</td>
				<td class = 'td60'>{!! Form::label('','', ['class'=>'negro', 'id'=>'nombreEmpre']) !!}</td>
				<td class = 'td30'>{!! Form::label('', '', []) !!}</td>
			</tr>
			<tr>
				
				<td>{!! Form::label('direccionEmpre', 'Direccion:', []) !!}</td>
				<td>{!! Form::label('','', ['class'=>'negro', 'id'=>'direccionEmpre']) !!}</td>
				<td>{!! Form::label('', '', []) !!}</td>
			</tr>
			<tr>
				<td>{!! Form::label('', 'RIF:', []) !!}</td>
				<td>{!! Form::label('', '', ['class'=>'negro', 'id'=>'RIF']) !!}</td>
				<td>
					
                        
                    
				</td>
			</tr>
			<tr>
				<td>{!! Form::label('telefono', 'Telefono:', []) !!}</td>
				<td>{!! Form::label('', '', ['class'=>'negro', 'id'=>'telefono']) !!}</td>
				<td>
					{!! Form::label('', '', []) !!}
				</td>
			</tr>
			
		</tbody>
	</table>
	<hr>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							<div class="controls">
	                          <div class="col-md-11 xdisplay_inputx form-group has-feedback">
	                            <input type="text" class="form-control has-feedback-left" id="numFac" placeholder="Num. Factura" aria-describedby="inputSuccess2Status2">
	                            <span class="fa fa-hand-o-right form-control-feedback left" aria-hidden="true"> </span>
	                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </div>
                        </div>
						</th>
						<th></th>
						<th></th>						
						<th>
							<div class="controls">
	                          <div class="col-md-11 xdisplay_inputx form-group has-feedback">
	                            <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Introduzca Fecha" aria-describedby="inputSuccess2Status2">
	                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"> </span>
	                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
	                          </div>
                        </div>
						</th>
					</tr>
					
			</table>
		</div>
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				CODIGO
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				CANTIDAD
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
				DESCRIPCION
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				P. UNIDAD
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				TOTAL
			</div>
		</div>
		<div class="form-group">
			
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo1', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad1', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion1', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad1', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total1', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total[2]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total[3]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo4', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad4', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion4', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad4', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total4', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo5', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad5', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion5', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad5', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total5', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo6', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad6', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion6', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad6', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total6', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo7', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad7', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion7', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad7', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total7', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo8', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad8', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 centro">
					{!! Form::text('descripcion8', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('precioUnidad8', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('total8', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<br>
				<br>
				<br>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<h4>
						{!! Form::label('baseImpo', 'Base Imponible', ['class'=>'label label-default']) !!}
					</h4>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						{!! Form::text('baseImpo', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<h4>
						{!! Form::label('porIVA', '%IVA', ['class'=>'label label-default']) !!}
					</h4>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('porIVA', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 centro">
					<h4>
						{!! Form::label('iva', 'IVA', ['class'=>'label label-default']) !!}
					</h4>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						{!! Form::text('iva', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<h4>
						{!! Form::label('total', 'Total a Cancelar', ['class'=>'label label-default']) !!}
					</h4>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						{!! Form::text('total', null, ['class'=>'form-control']) !!}
				</div>
			</div>
		</div>

		{!! Form::submit('Generar Factura', ['class'=>'btn btn-success']) !!}
		{!! Form::reset('LIMPIAR', ['class'=>'btn btn-warning']) !!}

	{!! Form::close() !!}

</div>
@stop
@section('script')
	<script src="{{asset('js/moment/moment.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/datepicker/daterangepicker.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#single_cal2').daterangepicker({
	          singleDatePicker: true,
	          calender_style: "picker_2"
	        }, function(start, end, label) {
	          console.log(start.toISOString(), end.toISOString(), label);
	        });
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#empresa').change(function () {
				var datos = $('#empresa').val();
				var token = $('#token').val();
				$.ajax({
					url:"{{route('factura.cambiar')}}",
					type:'POST',
					headers: {'X-CSRF-TOKEN': token},
					data:{dato:datos},
					dataType:'JSON',
					success:function (argument) {
						$('#direccionEmpre').html(argument.direccion);
						$('#nombreEmpre').html(argument.name);
						$('#RIF').html(argument.RIF);
						$('#telefono').html(argument.telefono);
						//alert(argument.direccion);
					}
				})
			});
		})
	</script>
@stop