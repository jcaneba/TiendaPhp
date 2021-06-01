<!DOCTYPE html>
<html lang="es">
<head>
	<title>Validación de usuarios</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilo2.css"/>
</head>
<body>
<?php
	include("ruta.php");
	//Registrar usuario
	if(!empty($_POST["usuario"]) && !empty($_POST["contraseña1"]) && !empty($_POST["contraseña2"])){
		if($_POST["contraseña1"]==$_POST["contraseña2"]){
			$conexion= new mysqli("$ip","$user","$pass","$db1");
			if($conexion->connect_error==FALSE){
				$us=$_POST["usuario"];
				$co=$_POST["contraseña1"];
				echo "<h1>La conexión a la BD se ha realizado correctamente</h1>";
				$sql1="INSERT INTO credenciales (user,password) values('$us','$co')";
				if ($resultado = $conexion->query($sql1)){
					echo "<p>Inserción realizada con éxito</p>";
					echo "<p>Se ha insertado el usuario ".$us." con contraseña ".$co."</p>";
					echo "<a href='inicio.html'>Inicia sesión</a>";
				}else{
					echo "<p>Error en la inserción de los datos. Puede que ya exista el usuario que intentas registrar.</p>";
				}
			}else{
				echo "<p>No es posible realizar la conexión a la Base de Datos 'tienda'</p>";
				echo "<p>Error: ".$conexion->connect_error."</p>";
			}
			$conexion->close();
		}else{
			echo "<p>Las contraseñas no coinciden. Por favor vuelve a introducir los campos correctamente</p>";
			echo "<a href='registro.html'>Registrarse de nuevo</a>";
		}
	//Logging de usuario
	}else if(!empty($_POST["nombre"]) && !empty($_POST["contra"])){
		$val=0;
		$conexion= new mysqli("$ip","$user","$pass","$db1");
		if($conexion->connect_error==FALSE){
			echo "<h1>La conexión a la BD se ha realizado correctamente</h1>";
			if ($resultado = $conexion->query("SELECT * FROM credenciales")){
				foreach($resultado as $filas){
					if($filas["user"]==$_POST["nombre"] && $filas["password"]==$_POST["contra"]){
						$val=1;
					}
				}
				if($val==0){
					echo "<p>No se ha encontrado el usuario indicado. Usuario o contraseña inválido</p>";
					echo "<a href='accesoUsuarios.html'>Iniciar sesión de nuevo</a><br/>";
				}elseif($val==1){
					session_start();
					$_SESSION["nombre"]=$_POST["nombre"];
					echo "<h2>Nombre válido</h2>";
					echo "<p>Hola ".$_POST["nombre"].", bienvenido a nuestra tienda de informática</p>";
?>
	<br/><h2 id="titulo">Hardware disponible en tienda</h2>
	<form action="tienda_1.php" method="POST">
		<input type="radio" name="ordenador" value="Sobremesa" id="sobremesas"/>
		<label for="sobremesas">Ordenadores de Sobremesa</label><br/><br/>
		<input type="radio" name="ordenador" value="Portatil" id="portatiles"/>
		<label for="portatiles">Ordenadores portátiles</label><br/><br/><br/>
		<input type="submit" name="Confirmar"/><input type="reset" name="Borrar" value="Borrar"/>
	</form>
<?php
				}
			}else{
				echo "<p>No es posible realizar la operacion SELECT. Adios</p>";
				echo "<p>Error: ".$conexion->error."</p>";
			}
		$conexion->close();
		}
	}else{
		header("location:accesoUsuarios.html");
	}

?>
</body>
</html>