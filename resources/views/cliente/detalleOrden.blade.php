@extends('layouts.baseCliente')

@section('titulo')
Carrito
@endsection

@section('links')
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('OneTech/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('OneTech/styles/cart_responsive.css')}}">
@endsection

@section('content')
	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title" align="center"><h1>Ordenes Pendientes</h1></div>
						<table width="100%" cellpadding="0">
									        	<tr  align="center">
									        		<th width="31%">Panaderia Lila</th>
									        		<th width="30%"></th>
									        		<th width="20%" rowspan="2"><img src="{{asset('img/logo.png')}}" width="100px" height="100px"></th>
									        	</tr>
									        	<tr>
									        		<th style="text-align: justify;">Dirección: Avenida Monseñor Romero y Final Calle 5 de Noviembre entre 21ª y 23ª Calle Oriente, una cuadra al norte del Mercado San Miguelito.</th>
									        	</tr>
									        	<tr>
									        		<td colspan="3">
									        		</td>
									        	</tr>
									        </table>
									        <br/>
									        <table border="solid" width="100%" cellpadding="0">
									        	<tr align="center" style="background-color: rgba(0,0,0,0.2);">
									        		<th>Cantidad</th>
									        		<th>Descripcion</th>
									        		<th>Costo Unitario</th>
									        		<th>Total</th>
									        	</tr>
									        		@if(Session::has('carrito'))
											        	@foreach($productos as $prod)
											        	<tr align="center">
												        	<td>{{$prod['cantidad']}}</td>
												        	<td>{{$prod['elemento']->nombre_producto}}</td>
												        	<td>
												        		@php
																	 $x = $prod['precio']/$prod["cantidad"];
																@endphp
																$ {{$x}}
												        	</td>
												        	<td>$ {{$prod['precio']}}</td>
												        </tr>	
											        	@endforeach
											        	<tr>
												    		<td align="right" colspan="3"><strong>Total:</strong></td>
												    		<td align="center">$ {{$precioTotal}}</td>
										      			</tr>
											        	@else

											        	@endif
									        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
<script src="{{asset('OneTech/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('OneTech/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('OneTech/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('OneTech/plugins/easing/easing.js')}}"></script>
<script src="{{asset('OneTech/js/cart_custom.js')}}"></script>
@endsection