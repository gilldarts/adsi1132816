@extends('layout-app.base')
@section('title','editar articulo')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>editar articulo</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('article') }}">lista articulo</a></li>
				<li>editar articulo</li>
			</ul>

			@if (count($errors)>0)
				
				<div class="alert alert-danger alert-dismissible" role="alert">
				  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
					  @foreach($errors->all() as $message)
						<li>{{ $message }}</li>
					  @endforeach
				</div>
			
			@endif
			<hr>
			

			<form action="{{ url('article/'.$art->id) }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					{!! csrf_field()  !!}
					{{ method_field('put') }}
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $art->name }}">
					<br><br>
					<input type="file" name="image" accept="image/png">
					<br><br>
					<textarea name="content" class="form-control" placeholder="contenido">{{ $art->content }}</textarea>
					<br><br>
					<select name="category_id" >
						@foreach ($categories as $cat)
							<option value="{{ $cat->id }}" {{ $cat->id==$art->category_id ? 'selected="selected"' : '' }}>
								{{ $cat->name }}
							</option>
							
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="glyphicon glyphicon-send"></i> Guardar
					</button>
				</div>

			</form>
		</div>
	</div>
@endsection
