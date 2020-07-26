@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Crear etiqueta
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'tags.store', 'method' => 'POST', 'autocomplete' => 'off']) !!}
					<div id="app">
						<slug-component title="Nombre de la etiqueta" input="name" value=""></slug-component>
					</div>
					@include('admin.tags.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection