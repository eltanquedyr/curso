<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Curso php</title>
</head>

<body>
	<h1>Gustavo del Pozo</h1>
	<h3>Estructura de control</h3>
	<?='Condicionales'?>
	<?php
	
	/*if(condicion) {
		instruciones
	}else{
		otras instruciones
	}*/
	$color="rojos";
	if($color=='rojo'){
		echo 'Color Rojo';
	}else{
		echo 'No es rojo';
	}
	
	/*Operadores de comparacion
	== igual
	=== identico (tine que coincidir que sea todo igual incluso el tipo de dato)
	!= no es igual
	<> diferente
	!== no es identico
	< menor que
	>mayor igual
	<= menor e igual
	>= mayor e igual
	
	Operadores logicos
	
	&& and
	|| or
	! no
	
	
	
	*/
		$num=0;
	goto marca;
	switch($condicion){
		case 1:
			echo 'Lunes;';
			break;
		case 2:
			echo 'Martes';
			break;
		case 3:
			echo 'Miercoles';
			break;
		case 4:
			echo 'Jueves';
			break;
		case 5:
			echo 'Viernes';
			break;
		default:
			echo 'Fin de semana';
			break;
	}

	antes:
			echo 'Lunes;';
			echo 'Martes';
			echo 'Miercoles';
			echo 'Jueves';
			echo 'Viernes';
			echo 'Fin de semana';
	
	while($num<=5){
		echo 'se ejecuta si la condición es verdadera';
		$num++;
	}
	//goto
	exit;
	marca:
	echo 'Estoy acá';
	goto antes;
	?>
</body>
</html>