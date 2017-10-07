@extends('layout-app.base')
@section('title', 'lista de articulos')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de articulos</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('article/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
			<a href="{{ url('articles/pdf') }}" class="btn btn-success"><i class="glyphicon glyphicon-file"></i> Exportar PDF</a>
			<a href="{{ url('articles/excel') }}" class="btn btn-success"><i class="glyphicon glyphicon-file"></i> Exportar EXCEL</a>
			<br><br>
			<form class="form-inline" action="{{ url('article/search') }}" method="post">
				<div class="form-group">
					{!! csrf_field()  !!}
					<input type="search" name="name" class="form-control" placeholder="Buscar" autocomplete="off" id="name">
					
				</div>
			</form>
			@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  {!!  html_entity_decode(session('status')) !!}
				</div>
			@endif
			
			<br><br>
			<table class="table table-stripped table-bordered table-hover">
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>acciones</th>
				</tr>

			<tbody class="tbody">
				
				@foreach($articles as $art)
					<tr>
						<td>{{ $art->id }}</td>
						<td>{{ $art->name }}</td>
						<td>
							<a class="btn btn-default" href="{{ url('article/'.$art->id) }}">
								<i class="glyphicon glyphicon-search"></i>
							</a>
							<a class="btn btn-default" href="{{ url('article/'.$art->id.'/edit') }}">
								<i class="glyphicon glyphicon-pencil"></i>
							</a>
							<form action="{{ url('article/'.$art->id) }}" method="post" style="display:inline-block;">
								{{ method_field('delete') }}
								{!! csrf_field()  !!}
								<button type="button" class="btn btn-danger btn-delete">
									<i class="glyphicon glyphicon-trash"></i>
								</button>
							</form>
							{{-- <a class="btn btn-danger" href="{{ url('') }}">
								<i class="glyphicon glyphicon-trash"></i>
							</a> --}}
						</td>
					</tr>
				@endforeach
			</tbody>

			</table>
			
		</div>
	</div>
@endsection('content')
