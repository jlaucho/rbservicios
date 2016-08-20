@extends('plantillas.main')

@section('link')

@stop

@section('tituloPagina')
	Edicion de Clientes
@stop
@section('arribaDerecha')
		
@stop
@section('subtituloPagina')
	Datos de registro
@stop
@section('contenido')
	
	<div class="x_content">

    {!! Form::open(['route'=>['cliente.update', $cli], 'method'=>'PUT', 'class'=>'form-horizontal form-label-left']) !!}

      <div class="item form-group">
        {!! Form::label('nameCli', 'Nombre *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('nameCli', $cli->nameCli, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('RIF_CedulaCli', 'RIF / Cedula *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('RIF_CedulaCli', $cli->RIF_CedulaCli, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('direccionCli', 'Direcci&oacute;n *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('direccionCli', $cli->direccionCli, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('telefonoCli', 'Telefono *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::text('telefonoCli', $cli->telefonoCli, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      <div class="item form-group">
        {!! Form::label('descripcionCli', 'Descripcion *', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!! Form::textarea('descripcionCli', $cli->descripcionCli, ['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required']) !!}
        </div>
      </div>
      
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <input type="reset" class='btn btn-primary'></input>
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