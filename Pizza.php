<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pizza</title>
</head>
<body>
	<?php
		$formulario = "
			<form method='post' action=''>
				<input type='checkbox' name='massa' value='Masa'>Masa<br>
				<input type='checkbox' name='tomate' value='Tomate'>Tomate<br>
				<input type='checkbox' name='queso' value='Queso'>Queso<br>
				<input type='checkbox' name='oregano' value='Oregano'>Oregano<br>
				<input type='checkbox' name='bacon' value='Bacon'>Bacon<br>
				<input type='submit' value='Enviar'></button>
			</form>";
			echo"<h3>Elige tu pedido.</h3>";<
			echo"$formulario";

	?>
</body>
</html>