<div class="row">
	<div class="col-md-3">   
		{{ Form::label('primerNombre','Primer Nombre') }}
		{{ Form::text('primerNombre',null,['class'=> 'form-control','required']) }}          		
    </div>
   	<div class="col-md-3">   
		{{ Form::label('segundoNombre','Segundo Nombre') }}
		{{ Form::text('segundoNombre',null,['class'=> 'form-control']) }}          		
    </div>
	<div class="col-md-3">   
		{{ Form::label('primerApellido','Primer Apellido') }}
		{{ Form::text('primerApellido',null,['class'=> 'form-control','required']) }}          		
    </div>
	<div class="col-md-3">   
		{{ Form::label('segundoApellido','Segundo Apellido') }}
		{{ Form::text('segundoApellido',null,['class'=> 'form-control']) }}          		
    </div>               
</div>
<br/>
<div class="row">
	<div class="col-md-3">   
		{{ Form::label('sexo','Sexo') }}
		{{ Form::select('sexo',['M' => 'Masculino', 'F' => 'Femenino'],null,['class'=> 'form-control','required']) }}          		
    </div> 
    <div class="col-md-3">   
		{{ Form::label('email','E-Mail') }}
		{{ Form::text('email',null,['class'=> 'form-control']) }}          		
    </div>
	<div class="col-md-6">   
		{{ Form::label('direccion','Direccion') }}
		{{ Form::text('direccion',null,['class'=> 'form-control','required']) }}          		
    </div>       		 
</div>
<br/>
<div class="row">
	<div class="col-md-3">   
		{{ Form::label('role','Puesto') }}
		{{ Form::select('role',[],null,['class'=> 'form-control']) }}          		
    </div>
</div>
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