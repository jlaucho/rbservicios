@extends('plantillas.main')

@section('title', 'Edicion Usuario')
@section('link')

@stop

@section('tituloPagina')
	Edicion de Usuario
@stop
@section('arribaDerecha')
		
@stop
@section('subtituloPagina')
	Datos de Usuario
@stop
@section('contenido')
	
	<div class="x_content">

    {!! Form::open(['route'=>['conductor.update', $con], 'method'=>'PUT', 'class'=>'form-horizontal form-label-left']) !!}

      <div class="item form-group">
        {!! Form::label('nameConductor', 'Nombre *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('nameConductor', $con->nameConductor, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('apellidoConductor', 'Apellido *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('apellidoConductor', $con->apellidoConductor, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('cedulaConductor', 'Cedula *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('cedulaConductor', $con->cedulaConductor, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('direccionConductor', 'Direcci&oacute;n *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('direccionConductor', $con->direccionConductor, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('emailConductor', 'Email *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('emailConductor', $con->emailConductor, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      
      
      
      
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
         
          {!! Form::submit('ACTUALIZAR', ['class'=>'btn btn-success']) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>

@stop

@section('script')

@stop
@section('content')

@stop