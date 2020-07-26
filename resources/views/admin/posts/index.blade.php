@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Lista de mis entradas
					<a class="btn btn-sm btn-primary float-right" href="{{ route('posts.create') }}">Crear entrada</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nombre</th>
									<th colspan="3"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($posts as $post)
								<tr>
									<td>{{ $post->id }}</td>
									<td>{{ $post->name }}</td>
									<td width="10px">
										<a class="btn btn-link" href="{{ route('posts.show', $post->id) }}">
											ver
										</a>
									</td>
									<td width="10px">
										<a class="btn btn-link" href="{{ route('posts.edit', $post->id)}}">
											modificar
										</a>
									</td>
									<td width="10px">
										{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-danger">
											eliminar
										</button>
										{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $posts->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection