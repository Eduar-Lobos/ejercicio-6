<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title> ejercicio 6</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="problema">
	<h1>Ejercicio #6</h1>
	<p>	
		Cree un script que imprima las tablas de multiplicar a partir del 1 hasta un
		número dado cada tabla de multiplicar debe de imprimir los primeros 10
		resultados de cada tabla.(debe dar un formato adecuado para la lectura de cada
		tabla y que estas queden ordenadas).
	</p>
	</div>
	<div class="solucion">
	<?php

	for ($i=1; $i <11 ; $i++) { 
		echo "<br>";
		for ($j=1; $j <11 ; $j++) { 
			echo "<br>";
			print $i.'x'.$j.'='.($i*$j) ; 
		}
	}
	
	?>
	</div>
	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>