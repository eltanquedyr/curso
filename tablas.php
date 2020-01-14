<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<table border="2" bgcolor="#A33A3C"><tr>
		<?php
		for($i=0;$i<=10;$i++){
			echo '<th> Tabla del ' . $i . '</th>';
		}
		?>
		</tr>
		<tr>
		<?php
		for($i=0;$i<=10;$i++){
			echo '<td>';
			for($a=0;$a<=10;$a++){
				echo $i . 'X' . $a . ' = ' . ($i*$a) . '<br>';
			}
			echo '</td>';
		}
		?>
		</tr>
	</table>
		
</body>
</html>