<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadenas</title>
</head>
<body>
	<h1>cadenas</h1>
	<hr>
	<?php 
		$cadena1='adsi 1132816';
		$cadena2="hola mundo $cadena1";
		$cadena3='centro de procesos industriales';
		$cadena4='sena regional caldas';
		$cadenar=$cadena3." ".$cadena4;
	 ?>
	 <h2><?=$cadena2?></h2>
	 <hr>
	 <h3>la cadena: <?=$cadenar?> tiene <?= strlen($cadenar) ?> caracteres</h3>
	 <h3>la palabra procesos en la cadena <?=$cadenar?> esta en la posicion: <?= strpos($cadenar,'procesos') ?></h3>
</body>
</html>