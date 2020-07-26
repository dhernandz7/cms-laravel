@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Crear entrada
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'autocomplete' => 'off', 'files' => true]) !!}
					<div id="app">
						<slug-component title="Nombre de la entrada" input="name" value=""></slug-component>
					</div>
					@include('admin.posts.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('importscript')
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create(document.querySelector('#body'))
    .catch(error=>{
        console.error(error);
    });                                             
</script>
@endsection