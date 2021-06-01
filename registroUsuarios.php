<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro de usuarios</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo1.css"/>
</head>
<body>
<?php
	if (empty($_POST["redondo"])){
		header("location:accesoUsuarios.html");
	}else if($_POST["redondo"]=="inicio"){
?>
	<div>
		<h1>Validación de credenciales</h1>
		<form method="post" action="val.php">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre"/><br/><br/>
			<label for="contra">Contraseña: </label>
			<input type="password" name="contra" id="contra"/><br/><br/>
			<input type="submit" value="Iniciar sesión"/>
		</form>
	</div>
<?php
	}else if($_POST["redondo"]=="registro"){
?>
	<div>
		<h1>Registro de credenciales</h1>
		<form method='post' action='val.php'>
			Usuario <input type='text' name='usuario'/><br/><br/>
			Contraseña <input type='password' name='contraseña1'/><br/><br/>
			Repite la contraseña <input type='password' name='contraseña2'/><br/><br/><br/>
			<input type='submit' value='Registrar usuario'/>
		</form>
	</div>
<?php
	}
?>
</body>
</html>