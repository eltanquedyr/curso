<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Curso php</title>
</head>

<body>
	<h1>Gustavo del Pozo</h1>
	<?php
	//Titulo
	echo '<h3>Es mejor usar comillas simples que dobles porque usan menos recurso</h3>';
	$para_mostrar="solo cambia las comillas dobles por comillas simples";
	echo "Estoy usando comillas dobles y si $para_mostrar";
	echo 'Pasa esto $para_mostrar';
	/*Lista completa del programa*/
	echo '<ul>'
		.'<li>Primero</li>'
		.'<li>Segundo</li>'
		.'<li>Tercero</li>'
		.'</ul>'
		
	?>
	<?='Esto es un echo abreviado'?>
	<?php
	/*
	Tipos de datos
	entero (integer int)
	Coma flotante o decimales (float double)
	Cadenas o String 
	Boleano (true o false)
	Nulo Null
	Array o Vectores (Coleccion de datos)
	Objetos
	*/
	
	// $ + nombre crea la variable
	$numero=100;
	echo gettype($numero) .'<br/>';
	$decimal=8.5;
	echo gettype($decimal) .'<br/>';
	$texto='esto es un titulo';
	echo gettype($texto) .'<br/>';
	$boleano=true;
	echo gettype($boleano) .'<br/>';
	$nulo= null;
	echo gettype($nulo);
	//las variables no puede ser un numero despues del $ y no podemos usar el - ni ñ ni /  & ni ningun caracter raro ni ascento
	var_dump($texto); //muestra toda la info de la variable
	?>
</body>
</html>