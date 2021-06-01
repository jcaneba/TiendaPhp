<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Tienda Carrito</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/estilotienda.css"/>
	</head>
	<body>
	<?php
		session_start();
		echo "<h1>Carrito de ".$_SESSION["nombre"]."</h1>";
		$_SESSION["tipo"]=$_COOKIE["uno"];
		$_SESSION["precio"]=$_COOKIE["dos"];
		$_SESSION["cantidad"]=$_COOKIE["tres"];
		echo "<div>";
		echo "<h2>Esta es la compra que has realizado:</h2>";
		echo "- Ordenador: ".$_SESSION["tipo"]."<br/>";
		echo "- Precio: ".$_SESSION["cantidad"]."€<br/>";
		echo "- Cantidad: ".$_SESSION["precio"]." unidades<br/><br/>";
		$total=$_SESSION["precio"]*$_SESSION["cantidad"];
		echo "<h3>Total: $total €</h3>";
		echo "</div>";
		session_destroy();
	?>
	</body>
</html>