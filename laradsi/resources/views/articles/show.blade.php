@extends('layout-app.base')
@section('title', 'lista de articulos')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>lista de articulos</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('article') }}">lista articulo</a></li>
				<li>ver articulo</li>
			</ul>
			@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  {!!  html_entity_decode(session('status')) !!}
				</div>
			@endif
			<table class="table table-stripped table-bordered table-hover">
				<tr>
					<th>id</th>
					<td>{{ $article->id }}</td>
				</tr>
				<tr>
					<th>nombre</th>
					<td>{{ $article->name }}</td>
					
				</tr>
				<tr>
					<th>imagen</th>
					<td><img src="{{ asset($article->image) }}" width="100px"></td>
					
				</tr>
				<tr>
					
					<th>contenido</th>
					<td>{{ $article->content }}</td>
				</tr>
				<tr>
					
					<th>categoria</th>
					<td>{{ $article->category->name }}</td>
				</tr>

			</table>
		</div>
	</div>
@endsection('content')
