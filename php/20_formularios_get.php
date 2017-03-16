<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get">
		<fieldset>
			<legend><h2>datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="nombre completo" value="<?php if (isset($_GET['nombre']))echo $_GET['nombre']; ?>">
			</div>
			<br>
			<div>
				<input type="text" name="email" placeholder="correo electronico" value="<?php if (isset($_GET['email']))echo $_GET['email']; ?>">
			</div>
			<br>
			<div>
				<input type="text" name="telefono" placeholder="numero telefono" value="<?php if (isset($_GET['telefono']))echo $_GET['telefono']; ?>">
			</div>
			<br>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
		<hr>
		<?php 
		if ($_GET) {
			// var_dump($_GET['nombre']);
			$errores=0;
			foreach ($_GET as $key => $value) {
				if (!$value) 
					$errores++;
			}
			if ($errores == 0) {
			$nombre=$_GET['nombre'];
			$email=$_GET['email'];
			$telefono=$_GET['telefono'];
			echo "<li> nombre: ".$nombre."</li>";
			echo "<li> email: ".$email."</li>";
			echo "<li> telefono: ".$telefono."</li>";
			}else{
				echo "<li>debe llenar todos los campos</li>";
			}

		}
		?>
	</form>
</body>
</html>