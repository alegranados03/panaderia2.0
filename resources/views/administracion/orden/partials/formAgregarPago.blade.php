{{ Form::hidden('idOrden',$orden,['class'=>'form-control'])}}
<div class="row">
	<div class="col-md-6">
		{{ Form::label('tipo_pago','Tipo de Pago:') }}
		{{ Form::select('tipo_pago',['Efectivo'=>'Efectivo', 'Tarjeta Crédito'=>'Tarjeta Credito'],null,['class'=> 'form-control','placeholder' =>'Seleccione...','required'])}}
	</div>
</div>
<br/>
<div class="row">
	<div class="col-md-6">
		{{ Form::label('recibido','Cantidad Recibida:') }}
		{{ Form::number('recibido',null,['class' => 'form-control','min' =>'0.01','step' => '0.01'])}}
	</div>
</div>
<br/>
<div class="row">
	<div class="col-md-6">
		{{ Form::label('cambio','Cambio:') }}
		{{ Form::number('cambio',null,['class' => 'form-control','min' =>'0.01','step' => '0.01'])}}
	</div>
</div>
<br/>
<div class="row">
	<div class="col-md-6">
		{{ Form::label('total_cancelar','Total a Cancelar:') }}
		{{ Form::number('total_cancelar',$total,['class' => 'form-control','min' =>'0.01','step' => '0.01'])}}
	</div>
</div>
<br/>
<div class="row pt-3">
	<div class="col-md-4">
		*Campos obligatorios
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{{ Form::submit('Guardar', ['class' => 'btn btn-block btn-lg btn-success']) }}
		</div>
	</div>
</div>
