@extends('plantillas.main')

@section('title', 'Registrar Cliente')
@section('link')

@stop

@section('tituloPagina')
	Registro de Cliente
@stop
@section('arribaDerecha')
		
@stop
@section('subtituloPagina')
	Datos de registro
@stop
@section('contenido')
	
	<div class="x_content">

    {!! Form::open(['route'=>'cliente.store', 'method'=>'POST', 'class'=>'form-horizontal form-label-left']) !!}

      <div class="item form-group">
        {!! Form::label('nameCli', 'Nombre *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('nameCli', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('RIF_CedulaCli', 'RIF *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('RIF_CedulaCli', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('direccionCli', 'Direcci&oacute;n *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('direccionCli', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('telefonoCli', 'Telefono *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('telefonoCli', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('descripcionCli', 'Descripci&oacute;n *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::textarea('descripcionCli', null, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
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

@stop
@section('content')

@stop