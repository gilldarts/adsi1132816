<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>matrices</h1>
	<hr>
	<?php 
	//larga
		$vh1="volkwagen";
		$vh2="renault";
		$vh3="chevrolet";
		$vh4="mazda";
		$vh5="ford";
	// corta indices automaticos
		$vehiculos=array('volkwagen','renault','chevrolet','mazda','ford');
	// indices manuales
		$vehiculos[5]='kia';
		$vehiculos[6]='fiat';
		$vehiculos[7]='toyota';
		$vehiculos[8]='hyundai';
		echo "<h2>numericos</h2>";
		var_dump($vehiculos);

	//asociativos
		$referencias= array('volkwagen'=> 'golf', 'renault'=>'duster','chevrolet'=> 'traker','mazda'=> 'cx6','ford'=> 'fusion');
		$referencias['kia']='picanto';
		$referencias['fiat']='palio';
		$referencias['toyota']='prado';
		$referencias['hyundai']='i30';

		echo "<h2>asociativos</h2>";

		var_dump($referencias);

	//multidimenionales
		$familias=array('stark'=>array('snow','arya'),'targaryen'=>array('danaerys'),'lannister'=>array('jaime'));
		echo "<h2>multidimenionales</h2>";
		var_dump($familias);
	 ?>
</body>
</html>