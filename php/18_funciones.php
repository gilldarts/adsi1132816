<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//funcion sin
		function mostrar(){
			echo "<h1>hola</h1>";
		}
		mostrar();
		// funcion con
		function bienvenida($nombre, $titulacion){
			echo "bienvenido: ".$nombre;
			echo "<br>";
			echo "titulacion: ".$titulacion;
			echo "<br>";

		}
		bienvenida('roberto','analisis');
		//retorno valor
		function tiempoformacion($tiempo){
			return $tiempo." meses";
		}
		echo "su tiempo de formacion es: ".tiempoformacion(6);
		//con parametros opcionales
		function centroformacion($centro, $regional='caldas'){
			return "centro de formacion: ".$centro."<br> regional: ".$regional;
		}
		echo "<br>".centroformacion('comercio y servicios');
	?>
</body>
</html>