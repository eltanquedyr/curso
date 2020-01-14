
<?php
nuevosnumeros:
if(isset($_GET['num1'])){
	$pn=$_GET['num1'];
}else{
	$pn = rand(0, 100);
}
if(isset($_GET['num2'])){
	$sn=$_GET['num2'];
}else{
	$sn = rand(0, 100);
}
echo $pn . ' ' . $sn . '<br>';
if($sn<=$pn){
	goto nuevosnumeros;
}
for($i=$pn; $i<=$sn; $i++){
	if($i%2 != 0){
		echo $i . ' es impar<br>';
	}
}
//exit;

$pais="Argentina";
$continente="América";
echo '<h1>El país ' . $pais . ' está en ' . $continente .'</h1>';
//las 2 variables son String
?>
<?='<hr>'?>
<?php
	for($contador=1;$contador<=100;$contador++){
		if($contador % 2 == 0){
			echo $contador . ' es par<br>';
		}
	}
?>
<?='<hr>'?>
<?php
	$i=0;
	while($i<=40){
		echo 'El cuadrado de ' . $i .' = ' . $i*$i . '<br>';
		$i++;
	}
for($i=0;$i<=40;$i++){
	echo 'El cuadrado de ' . $i .' = ' . $i*$i . '<br>';
}
?>
<?='<hr>'?>
<?php
if(isset($_GET['num1'])){
	$pn=$_GET['num1'];
}else{
	$pn=rand(1 , 1000);
}
if(isset($_GET['num2'])){
	$sn=$_GET['num2'];
}else{
	$sn=rand(1 , 1000);
}
echo $pn . ' + ' . $sn . ' = ' . ($pn + $sn) . '<br>';

echo $pn . ' x ' . $sn . ' = ' . ($pn * $sn) . '<br>';
if($pn>=$sn){
	echo $pn . ' / ' . $sn . ' = ' . ($pn/$sn) . '<br>';
	echo $pn . ' - ' . $sn . ' = ' . ($pn - $sn) . '<br>';
}else{
	echo $sn . ' / ' . $pn . ' = ' . ($sn/$pn) . '<br>';
	echo $sn . ' le resto ' . $pn . ' = ' . ($sn-$pn) . '<br>';
}

?>
