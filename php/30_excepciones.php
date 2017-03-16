<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>excepciones (try,throw,catch)</title>
</head>
<body>
	<?php 
		function verificaredad($edad){
			if ($edad>=18) {
				echo "<h3>es mayor de edad</h3>";
			}else{
				throw new Exception("usted no puede votar");
				
			}
		}
		try{
			verificaredad(15);
		}catch(Exception $e){
			echo "error: ".$e->getMessage();
		}
	 ?>
</body>
</html>