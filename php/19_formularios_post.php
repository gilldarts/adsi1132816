<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><h2>datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="nombre completo" value="<?php if (isset($_POST['nombre']))echo $_POST['nombre']; ?>">
			</div>
			<br>
			<div>
				<input type="text" name="email" placeholder="correo electronico" value="<?php if (isset($_POST['email']))echo $_POST['email']; ?>">
			</div>
			<br>
			<div>
				<input type="text" name="telefono" placeholder="numero telefono" value="<?php if (isset($_POST['telefono']))echo $_POST['telefono']; ?>">
			</div>
			<br>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
		<hr>
		<?php 
		if ($_POST) {
			// var_dump($_POST['nombre']);
			$errores=0;
			foreach ($_POST as $key => $value) {
				if (!$value) 
					$errores++;
			}
			if ($errores == 0) {
			$nombre=$_POST['nombre'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
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