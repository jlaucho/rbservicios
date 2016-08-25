@extends('plantillas.main')

@section('link')

@stop

@section('tituloPagina')
	Registro de Vehiculos
@stop
@section('arribaDerecha')
		
@stop
@section('subtituloPagina')
	Datos de registro
@stop
@section('contenido')
	
	<div class="x_content">

    {!! Form::open(['route'=>'vehiculo.store', 'method'=>'POST', 'class'=>'form-horizontal form-label-left', 'id'=>'guardarUsuario']) !!}

      <div class="item form-group">
        {!! Form::label('id_user', 'Conductor *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-fot12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::select('id_user', $con, null, ['class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Seleccione el Conductor']) !!}
        </div>
      </div>    

      <div class="item form-group">
        {!! Form::label('marca', 'Marca *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('marca', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('modelo', 'Modelo *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('modelo', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('placa', 'Placa *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('placa', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('responsabilidadCivil', 'Fecha Venc. Responsabilidad Civil *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('responsabilidadCivil', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      
      
      
            
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
        {!! Form::reset('LIMPIAR', ['class'=>'btn btn-warning']) !!}
          {!! Form::submit('GUARDAR', ['class'=>'btn btn-success']) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@stop

@section('script')
  
  {!! JsValidator::formRequest('App\Http\Requests\UsuarioRequest', '#guardarUsuario'); !!}

@stop
@section('content')

@stop