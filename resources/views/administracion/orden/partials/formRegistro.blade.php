<div class="row">
	<div class="col-md-6">
		{{ Form::label('estado_servicio','Estado de Servicio') }}
		{{ Form::select('estado_servicio',['PENDIENTE'=> 'Pendiente', 'ENTREGADA' => 'Entregada'],null,['class'=> 'form-control','required']) }}
    </div>
</div>


<div class="row">
	<div class="col-md-6">
		{{ Form::label('mesa_id','Estado de Servicio') }}
		{{ Form::select('mesa_id',$mesas,null,['class'=> 'form-control','placeholder' => 'Ninguna']) }}
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