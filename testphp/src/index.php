<!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Registro de estudiante</h1>
		<form method="post" action="procesar.php">
			<label for="nombre">Nombre completo:</label>
			<input type="text" id="nombre" name="nombre" required>
			<label for="curso">Curso:</label>
			<select id="curso" name="curso" required>
				<option value="">Seleccione un curso</option>
				<option value="1º">1° año</option>
				<option value="2º">2° año</option>
				<option value="3º">3° año</option>
				<option value="4º">4° año</option>
				<option value="5º">5° año</option>
				<option value="6º">6° año</option>
			</select>
			<button type="submit">Enviar</button>
		</form>
	</div>
</body>
</html>
