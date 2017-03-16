<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	<?php 	
	$ndia=date('w');
	if ($ndia==0) {
		echo "hoy es domingo, feliz fin de semana";
	}
	else{
		echo "no es fin de semana, a estudiar";
	}
	 ?>
</body>
</html>