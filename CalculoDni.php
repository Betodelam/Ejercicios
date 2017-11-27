<html>
	<head>
		<title>Calculo letra DNI</title>
		<meta charset="UTF-8">
	</head>
	<body>

		<h1>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					echo "tengo trabajo por hacer";
				}
			 	
			 ?>
			
		</h1>
		<form action="#" method="POST">
			<div>
				<label for="">DNI:</label>
				<input type="text" name="DNI">
			</div>
			<div>
				<label for="">NIF:</label>
				<input type="text" name="NIF">
			</div>
			<div>
				<input type="submit">
			</div>
		</form>
	</body>
</html>