<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tipos de ordenadores</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<style>
		img{
			width:30%;
			margin-top:20px;
		}
		input[type='radio']{
			margin-right:10px;
		}
		#aside{
			float:right;
		}
	</style>
	<link rel="stylesheet" href="css/bootstrap5.0.1/bootstrap.min.css"/>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="page-header text-center">
		<h1>Listado de ordenadores</h1>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="val.php">Tienda</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.html">Principal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sobre nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	

	<div class="card border-info mb-3" style="max-width: 18rem;" id="aside">
		<div class="card-header">Información adicional</div>
			<div class="card-body text-info">
				<h5 class="card-title">Sobre la aplicación web</h5>
				<p class="card-text">Aplicación web realizada para el manejo de la maquetacion web, frontend y estilos. Se debe de implementar más funcionalidades.</p>
			</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Curso 2020/2021</li>
					<li class="list-group-item">HTML, CSS y Bootstrap 5</li>
					<li class="list-group-item">Autor: Jesús Cáneba</li>
					<li class="list-group-item">Fecha: 31 Mayo de 2021</li>
				</ul>
		</div>
	</div>
	<?php
	if (empty($_POST["ordenador"])){
		echo "<p>Por favor, selecciona una compra para seguir con el proceso</p>";
		echo "<a href='val.php'>Volver al formulario</a>";
	}else{
		if($_POST["ordenador"]=="Sobremesa"){
	?>
<!-- Grid Layout: Sistema de ordenacion con contenedores, filas y columnas para alinear el contenido -->
	<form method="POST" action="tienda_2.php">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-auto border-bottom">
					<input type="radio" name="sobremesa" value="PcCom Silver Pro" id="sobremesa1"/>
					<label for="sobremesa1">Sobremesa 1: PcCom Silver Pro 1000€<br/>
					<img alt="Imagen de un ordenador de sobremesa 1" src="img/sobremesa1.jpg" class="rounded mx-auto d-block"/></label>
				</div>
				<div class="col-md-auto border-bottom">
					<input type="radio" name="sobremesa" value="MSI Trident X Plus 9SD-635XIB" id="sobremesa2"/>
					<label for="sobremesa2">Sobremesa 2: MSI Trident X Plus 9SD-635XIB 2000€<br/>
					<img alt="Imagen de un ordenador de sobremesa 2" src="img/sobremesa2.jpg" class="rounded mx-auto d-block"/></label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-auto border-bottom">
					<input type="radio" name="sobremesa" value="HP OMEN 875-1029NS" id="sobremesa3"/>
					<label for="sobremesa3">Sobremesa 3: HP OMEN 875-1029NS 3000€<br/>
					<img alt="Imagen de un ordenador de sobremesa 3" src="img/sobremesa3.jpg" class="rounded mx-auto d-block"/></label>
				</div>
				<div class="col-md-auto border-bottom">
					<input type="radio" name="sobremesa" value="HP Pavilion Gaming TG01-1007NS" id="sobremesa4"/>
					<label for="sobremesa4">Sobremesa 4: HP Pavilion Gaming TG01-1007NS 830€<br/>
					<img alt="Imagen de un ordenador de sobremesa 4" src="img/sobremesa4.jpg" class="rounded mx-auto d-block"/></label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-auto">
					<label>Elige la cantidad que deseas comprar:</label><input class="form-control" type="number" name="cant"/><br/>
				</div>
			</div>
		</div>
		<input class="btn btn-primary mb-2" type="submit" value="Confirmar pedido"/>
	</form>

	<?php
		}else if($_POST["ordenador"]=="Portatil"){
	?>
	<form method="POST" action="tienda_2.php">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-auto border-bottom">
						<input type="radio" name="portatil" value="Lenovo Ideapad 330-15IKBR" id="portatil1"/>
						<label for="portatil1">Portatil 1: Lenovo Ideapad 330-15IKBR 500€<br/>
						<img alt="Imagen de un ordenador portátil 1" src="img/portatil1.jpg" class="rounded mx-auto d-block"/></label>
					</div>
					<div class="col-md-auto border-bottom">
						<input type="radio" name="portatil" value="Asus TUF Gaming FX505DV-AL014" id="portatil2"/>
						<label for="portatil2">Portatil 2: Asus TUF Gaming FX505DV-AL014 1000€<br/>
						<img alt="Imagen de un ordenador portátil 2" src="img/portatil2.jpg" class="rounded mx-auto d-block"/></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-auto border-bottom">
						<input type="radio" name="portatil" value="MSI GP75 Leopard 9SF-1037XES" id="portatil3"/>
						<label for="portatil3">Portatil 3: MSI GP75 Leopard 9SF-1037XES 1500€<br/>
						<img alt="Imagen de un ordenador portátil 3" src="img/portatil3.jpg" class="rounded mx-auto d-block"/></label>
					</div>
					<div class="col-md-auto border-bottom">
						<input type="radio" name="portatil" value="HP Pavilion Gaming 16-A0010NS" id="portatil4"/>
						<label for="portatil4">Portatil 4: HP Pavilion Gaming 16-A0010NS 949€<br/>
						<img alt="Imagen de un ordenador portátil 4" src="img/portatil4.jpg" class="rounded mx-auto d-block"/></label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-auto">
						<label>Elige la cantidad que deseas comprar:</label><input class="form-control" type="number" name="cant"/><br/>
					</div>
				</div>
			</div>
			<input class="btn btn-primary mb-2" type="submit" value="Confirmar pedido"/>
		</form>
	<?php
		}
	}
	?>
</body>
</html>