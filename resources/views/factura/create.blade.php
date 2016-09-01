@extends('plantillas.main')

@section('title')
	Generacion de Factura
@stop

@section('link')
	<link rel="stylesheet" type="text/css" href="{{asset('factura/css/style.css')}}">
	<!--<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->
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
			<tr>
				<td>{!! Form::label('ODC', 'ODC:', []) !!}</td>
				<td>{!! Form::text('ODC', null, ['class'=>'ODC', 'placeholder'=>'Introduzca la ODC']) !!}</td>
				<td>
					{!! Form::label('', '', []) !!}
				</td>
			</tr>
			
		</tbody>
	</table>
	<hr>
	<?php $fecha = date("d/m/Y") ?>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							<div class="controls">
	                          <div class="col-md-11 xdisplay_inputx form-group has-feedback">
	                            <input type="text" class="form-control has-feedback-left" id="numFac" placeholder="Num. Factura" aria-describedby="inputSuccess2Status2" value="{{$numFac}}" disabled>
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
	                            <input type="text" class="form-control has-feedback-left" id="fechaFactura" name="fechaFactura" placeholder="Introduzca Fecha" aria-describedby="inputSuccess2Status2" value="{{$fecha}}" disabled>
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
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
				DESCRIPCION
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				P. UNIDAD
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				TOTAL
			</div>
		</div>
		<div class="form-group">
			
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[0]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[0]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[0]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[1]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[0]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[1]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[1]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[1]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[2]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[1]', null , ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row" >
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[2]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[3]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[2]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[3]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[3]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[4]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[4]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[4]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[4]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[5]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[5]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[5]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[5]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[6]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[6]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[6]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[6]', null, ['class'=>'form-control']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('codigo[7]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					{!! Form::text('cantidad[7]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 centro">
					{!! Form::text('descripcion[7]', null, ['class'=>'form-control']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('precioUnidad[]', null, ['class'=>'form-control precioU']) !!}
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					{!! Form::text('totalUnidad[7]', null, ['class'=>'form-control']) !!}
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
	<script src="{{asset('factura/js/scriptGenerarFactura.js')}}" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(document).ready(function () {
			$('#cliente').change(function () {
				var datos = $('#cliente').val();
				var token = $('#token').val();
				//alert('entro');
				$.ajax({
					url:"{{route('factura.cambiar')}}",
					type:'POST',
					headers: {'X-CSRF-TOKEN': token},
					data:{dato:datos},
					dataType:'JSON',
					success:function (argument) {
						$('#direccionEmpre').html(argument.direccionCli);
						$('#nombreEmpre').html(argument.nameCli);
						$('#RIF').html(argument.RIF_CedulaCli);
						$('#telefono').html(argument.telefonoCli);
						//alert(argument.direccion);
					}
				})
			});
		})
	</script>
@stop