<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio1</title>
	</head>
	<body>
		<h1>Ejercicio 1:Nombre compuesto</h1>
		<form action="#" method="POST">
			<input type="text" name="nombre" placeholder="Introduzca su nombre">
			<input type="text" name="apellido1" placeholder="Introduzca su apellido">
			<input type="text" name="apellido2" placeholder="Introduzca su segundo apellido">
			<input type="submit">
	</form>

	<?php

		if (isset($_POST["nombre"])) {
			if (empty($_POST["nombre"])){
				echo "<p>Oye! Está vacio el nombre</p>";
			}
			if (empty($_POST["apellido1"])){
				echo "<p>Oye! Está vacio el apellido 1</p>";
			}
			if (empty($_POST["apellido2"])){
				echo "<p>Oye! Está vacio el apellido 2</p>";
			}
			if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"])) {
				echo "<p>".$_POST["nombre"]." ".$_POST["apellido1"]." ".$_POST["apellido2"]."</p>";
			}
		}

	?>

	</body>
</html>