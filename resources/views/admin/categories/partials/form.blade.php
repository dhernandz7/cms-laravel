<div id="app">
	<div class="form-group">
		{{ Form::label('body', 'Descripción') }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
	</div>
</div>