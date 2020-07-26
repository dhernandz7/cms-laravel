@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Ver etiqueta  <strong>{{$tag->id}}</strong>
					<a class="btn btn-sm btn-primary float-right" href="{{ route('tags.edit', $tag->id) }}">
						Modificar etiqueta
					</a>
				</div>
				<div class="card-body">
					<p>
						<strong>Nombre:</strong>
						{{ $tag->name}}
					</p>
					<p>
						<strong>Slug:</strong>
						{{ $tag->slug}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection