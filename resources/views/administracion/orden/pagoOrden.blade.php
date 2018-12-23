@extends('layouts.base')

@section('titulo')
Pagar Orden
@endsection

@section('content')

<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" align="center" style="font-size: 30px;font-weight: bold;">
                <div class="row">
                	<div class="col-md-12">
                	    Crear Nuevo Usuario                		
                	</div>                	
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            	{{ Form::open(['route' => 'usuarios.store', 'method' => 'POST','class' => 'form-group', 'autocomplete' => 'off' ])}}

            	@include('administracion.orden.partials.formAgregarPago')

            	{{Form::close()}}
            </div>
        </div>
</div>
@endsection