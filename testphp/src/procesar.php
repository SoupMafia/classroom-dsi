<!DOCTYPE html>
<html>
<head>
	<title>Formulario procesado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<?php
			
			$nombre = $_POST['nombre'];
			$curso = $_POST['curso'];

			
			echo "<h1>Formulario procesado</h1>";
			echo "<p>Gracias por registrarte, $nombre.</p>";
			echo "<p>Tu curso es $curso año.</p>";
		?>
	</div>
</body>
</html>
