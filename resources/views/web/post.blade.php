@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 offset-md-2">
		<h1>Lista de artículos</h1>
		@foreach($posts as $post)
		<div class="card mb-3">
			<div class="card-header">
				{{ $post->name}}
			</div>
			<div class="card-body">
				@if($post->file)
				<img alt="" class="img-fluid" src="{{$post->file}}">
				@endif
				{{ $post->excerpt }}
				<a class="float-right" href="#">Leer más</a>
			</div>
		</div>
		@endforeach
		{{ $posts->render() }}
	</div>
</div>
@endsection