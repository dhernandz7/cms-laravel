@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Lista de categorias
					<a class="btn btn-sm btn-primary float-right" href="{{ route('categories.create') }}">Crear categoria</a>
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
								@foreach($categories as $tag)
								<tr>
									<td>{{ $tag->id }}</td>
									<td>{{ $tag->name }}</td>
									<td width="10px">
										<a class="btn btn-link" href="{{ route('categories.show', $tag->id) }}">
											ver
										</a>
									</td>
									<td width="10px">
										<a class="btn btn-link" href="{{ route('categories.edit', $tag->id)}}">
											modificar
										</a>
									</td>
									<td width="10px">
										{!! Form::open(['route' => ['categories.destroy', $tag->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-danger">
											eliminar
										</button>
										{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $categories->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection