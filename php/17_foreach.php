<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$lenguajes =array('java','phyton');
		foreach ($lenguajes as $indice => $value) {
			echo "<li>".$value."</li>";
		}
	 ?>
</body>
</html>