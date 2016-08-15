@extends('plantillas.main')

@section('link')

@stop

@section('tituloPagina')
	Registro de Conductores
@stop
@section('arribaDerecha')
		
@stop
@section('subtituloPagina')
	Datos de registro
@stop
@section('contenido')
	
	<div class="x_content">

    {!! Form::open(['route'=>'conductor.store', 'method'=>'POST', 'class'=>'form-horizontal form-label-left', 'id'=>'guardarUsuario']) !!}

      <div class="item form-group">
        {!! Form::label('nameConductor', 'Nombre *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('nameConductor', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('apellidoConductor', 'Apellido *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('apellidoConductor', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('cedulaConductor', 'Cedula *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('cedulaConductor', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('direccionConductor', 'Direcci&oacute;n *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('direccionConductor', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('emailConductor', 'Email *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('emailConductor', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      
      
            
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <input type="reset" class='btn btn-primary'></input>
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