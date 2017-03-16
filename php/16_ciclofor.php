<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div{
			width: 100%;
			height: 20px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php 
		$color=0;
		for ($i=100; $i >= 0; $i--) { 
			echo "<div style='background-color: rgb(".$i."%,0%,0%)'></div>";
		}
	 ?>
</body>
</html>