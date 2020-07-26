@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Modificar categoria  <strong>{{$category->id}}</strong>
				</div>
				<div class="card-body">
					{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
					<slug-component title="Nombre de la categoria" input="name" value="{{ $category->name}}"></slug-component>
					@include('admin.categories.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection