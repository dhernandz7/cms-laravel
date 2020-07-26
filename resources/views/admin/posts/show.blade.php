@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Ver entrada <strong>{{$post->id}}</strong>
				</div>
				<div class="card-body">
					<p>
						<strong>Nombre:</strong>
						{{ $post->name}}
					</p>
					<p>
						<strong>Slug:</strong>
						{{ $post->slug}}
					</p>
					<p>
						<strong>Descripción:</strong>
						{{ $post->body}}
					</p>
					<a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}">
						Modificar entrada
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection