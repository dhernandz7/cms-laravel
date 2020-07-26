@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Modificar etiqueta  <strong>{{$tag->id}}</strong>
				</div>
				<div class="card-body">
					{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
					<div id="app">
						<slug-component title="Nombre de la etiqueta" input="name" value="{{ $tag->name }}"></slug-component>
					</div>
					@include('admin.tags.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection