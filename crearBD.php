<?php
	$conexion= new mysqli("localhost","root","123456"/*,"basedatos"*/);
	if($conexion){
		//Validar la conexión
		echo "<p>- La conexión se ha realizado correctamente</p>";
		echo "<h2>Creación de la base de datos 'Tienda'</h2>";
		$sentencia1="create database tienda";
		if(mysqli_query($conexion,$sentencia1)==FALSE){
			echo "<p>- La base de datos tienda ya existe, se borrará para crearse una nueva</p>";
			$sentencia2="drop database tienda";
			$opera1=mysqli_query($conexion,$sentencia2);
			echo "<p>- La base de datos tienda se ha borrado con éxito</p>";
			$opera2=mysqli_query($conexion,$sentencia1);
		}
		echo "<p>- La base de datos tienda se ha creado con exito</p>";
		$sentencia3=mysqli_select_db($conexion,"tienda");
		
		$sentencia4="create table credenciales(id int not null auto_increment,user varchar(50) UNIQUE,password varchar(20),primary key(id))";
		$opera3=mysqli_query($conexion,$sentencia4);
		echo "<p>- Se ha creado la tabla credenciales</p>";
		$sentencia5="create table productos(producto varchar(30),precio decimal(8,2),primary key(producto,precio))";
		$opera4=mysqli_query($conexion,$sentencia5);
		echo "<p>- Se ha creado la tabla productos</p>";
		$sentencia6="insert into productos values('Ratones','15.99'),('Teclados','39.99')";
		$opera5=mysqli_query($conexion,$sentencia6);
		echo "<p>- Se han insertado los registros en la tabla productos correctamente</p>";
		
	}else{
		echo "<p>Error en la conexión. Comprueba el usuario y la contraseña para iniciar sesión</p>";
	}
	//Cerrar la conexión
	$conexion->close();
?>