@extends('layouts.base')

@section('titulo')
Detalle Producto
@endsection

@section('content')
{{ Form::model($producto,['route' => ['usuarios.update',$producto->id], 'method' => 'PUT','class' => 'form-group', 'autocomplete' => 'off' ])}}
	<div class="row">
		<div class="col-md-6">
			{{ Form::label('nombre_producto','Nombre del Producto') }}
			{{ Form::text('nombre_producto',null,['class'=> 'form-control', 'disabled']) }}
	    </div>
	</div>

	<div class="row">
	<div class="col-md-6">
		{{ Form::label('precio','Precio') }}
		{{ Form::number('precio',null,['class'=> 'form-control', 'disabled']) }}
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
			{{ Form::label('tipoProducto','Tipo de Producto') }}
			{{ Form::select('tipoProducto',
			['POSTRE' => 'Postre', 'BEBIDA' => 'Bebida'],null,['class'=> 'form-control', 'disabled']) }}
			</div>
			</div>
		<div class="row">
		<div class="col-md-6">
			{{ Form::label('imagen','Imagen del Producto') }}
			<img src="{{$producto->imagen}}">
			</div>
			</div>
	<br/>


	<div class="row">
		<div class="col-md-12">
			{{ Form::label('descripcion','Descripción') }}
			{{ Form::textarea('descripcion',null,['class'=> 'form-control', 'disabled', 'style' => 'resize:none']) }}
	    </div>
	</div>
{{ Form::close() }}
@endsection