<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend><h1>calcular dias vividos</h1></legend>
			<input type="text" name="dia" placeholder="dia">
			<input type="text" name="mes" placeholder="mes">
			<input type="text" name="ano" placeholder="año">
			<br>
			<input type="submit" value="send">
		</fieldset>
	</form>
	<?php 
		if ($_POST) {
			$dia=$_POST['dia'];
			$mes=$_POST['mes'];
			$ano=$_POST['ano'];
			$factual=mktime(0,0,0,date('m'),date('d'),date('Y'));
			$fnacim=mktime(0,0,0,$mes,$dia,$ano);
			$ftotal=$factual-$fnacim;
			$ftotal=(((($ftotal/60)/60)/24)/365);
			echo "<h3>".floor($ftotal)."</h3>";
		}
	 ?>
</body>
</html>