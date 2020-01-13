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
	echo '<h1>Rama de Rama</h1>';
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
	
	//Constantes
	//es un contenedor como una variable pero que no se puede cambiar el contenido
	define('nombre','Gustavo del Pozo');
	echo nombre . '<br/>';
	//nomb="nuevo"; no se puede
	
	echo 'existen constantes predefinidas<br/>';
	echo PHP_OS . '<br/>';
	echo PHP_VERSION. '<br/>';
	echo __TRAIT__;
	
	
	//operadores +-*/%(Resto<)
	//operadores de incremento ($variable ++;) o decremento ($variale--;) Preincremento ++$variable predecremento --$variable
	//Variables super globales
	//variables de servidor 
	echo($_SERVER['SERVER_NAME']. '<br>');
	echo $_SERVER['DOCUMENT_ROOT']. '<br>';
	echo $_SERVER['HTTP_ACCEPT_LANGUAGE']. '<br>';
	echo $_SERVER['HTTP_USER_AGENT'];
	echo $_SERVER['REMOTE_ADDR']. '<br>';
	
	
	
	
	
	?>
</body>
</html>