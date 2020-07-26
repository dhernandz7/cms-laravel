@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Modificar entrada  <strong>{{$post->id}}</strong>
				</div>
				<div class="card-body">
					{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
					<slug-component title="Nombre de la entrada" input="name" value="{{ $post->name}}"></slug-component>
					@include('admin.posts.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('importscript')
<script src="/js/vendor/ckeditor/ckeditor.js"></script>
<script>
	ClassicEditor.create(document.querySelector('#body'))
</script>
@endsection