<div id="app">
	<div class="form-group">
		{{ Form::label('category_id', 'Categoria') }}
		{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('file', 'Imagen') }}
		{{ Form::file('file') }}
	</div>
	<fieldset class="form-group">
		<div class="row">
			{{ Form::label('status', 'Estado', ['class' => 'col-form-label col-sm-2 pt-0']) }}
			<div class="col-sm-10">
				<div class="form-check">
					<label class="form-check-label">
						{{ Form::radio('status', 'PUBLISHED', null, ['class' => 'form-check-input']) }}
						Publicado
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						{{ Form::radio('status', 'DRAFT', null, ['class' => 'form-check-input']) }}
						Borrador
					</label>
				</div>
			</div>
		</div>
	</fieldset>
	<div class="form-group">
		{{ Form::label('tags', 'Etiquetas') }}
		<div class="text-justify">
			@foreach($tags as $tag)
				<div class="form-check form-check-inline">
					<label class="form-check-label">
						{{ Form::checkbox('tags[]', $tag->id, null, ['class' => 'form-check-input']) }} {{ $tag->name}}
					</label>
				</div>
			@endforeach
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('excerpt', 'Extracto') }}
		{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => 2]) }}
	</div>
	<div class="form-group">
		{{ Form::label('body', 'Descripción') }}
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 5]) }}
	</div>
	<div class="form-group">
		{{ Form::submit('Guardar', ['class' => 'btn btn-primary'])}}
	</div>
</div>