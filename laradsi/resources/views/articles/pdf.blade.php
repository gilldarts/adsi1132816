<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table,td,tr{
			border: 2px solid silver;

		}
		section{
			margin-left: 15%;
		}
		td,thead{
			font-size: 20px;
			font-family: Arial;
		}
		thead{
			background-color: black;
			color:white;
		}
	</style>
</head>
<body>
	<section>
		<h1>Lista de Articulos</h1>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Descripcion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $art)
				<tr>
					<td>{{ $art->name }}</td>
					<td>{{ $art->category->name }}</td>
					<td>{{ $art->content }}</td>
				</tr>
					
				@endforeach
			</tbody>
		</table>
		
	</section>
</body>
</html>