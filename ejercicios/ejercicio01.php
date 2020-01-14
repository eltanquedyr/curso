<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	function mostraArray($array){
		$texto="";
		foreach($array as $ver){
			$texto .= $ver . '<br/>';
		}
		return $texto;
	}
	
	$numero = array(rand(),rand(0, 2100),rand(2000, 2001),rand( 0, 2000),rand(),rand(),rand(),rand());
	/*foreach($numero as $ver){
		echo $ver . '<br/>';
	}*/
	echo mostraArray($numero);
	echo'<hr>';
	sort($numero);
	echo mostraArray($numero);
	/*
	foreach($numero as $ver){
		echo $ver . '<br/>';
	}*/
	echo'<hr>';
	echo count($numero);
	echo'<hr>';
	if(isset($_GET['valor'])){
		echo 'Lo trajo<br/>';
	}
	if(isset($_GET['valor'])){
		echo 'Trae valor<br>';
		$buscar=$_GET['valor'];
	}else{
		$buscar=2000;
	}
	$indice=array_search($buscar,$numero);
	if(empty($indice)){
		echo 'No está el '.$buscar;
	}else{
		echo "El $buscar está en el indice $indice ";
	}
	echo'<hr>';
	$cientoveinte=array();
	for($i=0;$i < 120; $i++){
		array_push($cientoveinte,rand(0, 120));
		echo $cientoveinte[$i];
		if($i%20 == 0){
			echo '<br/>';
		}else{
			echo ' , ';
		}
	}
	echo'<hr>';
	$variable="";
	if(empty($variable)){
		$variable=strtolower('Este texto es de prueba');
		echo '<strong>' . strtoupper($variable) . '</strong>';
	}
	echo'<hr>';
	
	$tabla = array(
		"Accion" => array(10,11,12,13,14,15),
		"Aventura" => array(21,22,23,24,25),
		"Deportes" => array(30,31,32,33,34,35)
	);
	
	//echo var_dump($tabla);
	
	$encabezado=array_keys($tabla);

	?>
	

</body>
</html>