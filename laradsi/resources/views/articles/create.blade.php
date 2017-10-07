@extends('layout-app.base')
@section('title','adicionar articulo')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>adicionar articulo</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{ url('article') }}">lista articulo</a></li>
				<li>adicionar articulo</li>
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
			

			<form action="{{ url('article') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					{!! csrf_field()  !!}
					<input type="text" name="name" class="form-control" placeholder="Nombre">
					<br><br>
					<input type="file" name="image" accept="image/png">
					<br><br>
					<textarea name="content" class="form-control" placeholder="contenido"></textarea>
					<br><br>
					<select name="category_id">
						@foreach ($categories as $cat)
							<option value="{{ $cat->id }}">
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
