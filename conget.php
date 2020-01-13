<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	if(isset($_GET['num'])){
		$num=(int)$_GET['num'];
	}else{
		$num=1;
	}
	echo var_dump($num);
	?>
	
</body>
</html>