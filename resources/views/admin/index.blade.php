@extends('plantillas.main')

@section('title', 'Pagina de Inicio')

@section('tituloPagina')
	Pagina de Inicio
@stop

@section('link')
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}">
	<!--<link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">-->
@stop

@section('arribaDerecha')
		<div class="input-group">
		    <input type="text" class="form-control" placeholder="Search for...">
		    <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go!</button>
		    </span>
	  	</div>
@stop
@section('subtituloPagina')
	Detalle usuarios registrados
@stop
@section('contenido')
	
	<div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Cedula</th>
                          <th>Direccion</th>
                          <th>Email</th>
                          <th>Tipo</th>
                          <th>Acci&oacute;n</th>
                        </tr>
                      </thead>


                      <tbody>
                      	@foreach ($user as $usr)
							<tr>
	                      		<td>{{$usr->name}}</td>
	                      		<td>{{$usr->apellido}}</td>
	                      		<td>{{$usr->cedula}}</td>
	                      		<td>{{$usr->direccion}}</td>
	                      		<td>{{$usr->email}}</td>
                            <td>{{$usr->type}}</td>
	                      		<td>
	                      			<ul class="nav navbar-right panel_toolbox">
				                      <li><a href="{{route('admin.edit', $usr->id)}}"><i class="fa fa-wrench" style="color: #58D3F7;"></i></a>
				                      </li>
				                      <li><a href="{{route('admin.destroy', $usr->id)}}"><i class="fa fa-close" style="color: #F78181;"></i></a>
				                      </li>
				                    </ul>                     			
	                      		</td>
                      		</tr>
                      	@endforeach
                      </tbody>
                    </table>
                  </div>

@stop

@section('script')
	<script src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<!--<script src="{{ asset('js/custom.js') }}" type="text/javascript" charset="utf-8"></script>-->
	<!--<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js">-->
	<script>
  /*INICIO PROBANDO LA DESINCORPORACION DE FUNCIONES*/
      $(document).ready(function() {/*
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();*/
/*FIN DE PROBANDO LA DESINCORPORACION DE FUNCIONES*/
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
@stop
@section('content')

@stop