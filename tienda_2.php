<?php
session_start();
	if((!empty($_POST["sobremesa"]) || !empty($_POST["portatil"])) && !empty($_POST["cant"]) && $_POST["cant"]>0){
		setcookie("dos",$_POST["cant"],time()+20);
		if($_POST["sobremesa"]=="PcCom Silver Pro"){
			setcookie("uno",$_POST["sobremesa"],time()+20);
			setcookie("tres",1000,time()+20);
		}else if($_POST["sobremesa"]=="MSI Trident X Plus 9SD-635XIB"){
			setcookie("uno",$_POST["sobremesa"],time()+20);
			setcookie("tres",2000,time()+20);
		}else if($_POST["sobremesa"]=="HP OMEN 875-1029NS"){
			setcookie("uno",$_POST["sobremesa"],time()+20);
			setcookie("tres",3000,time()+20);
		}else if($_POST["sobremesa"]=="HP Pavilion Gaming TG01-1007NS"){
			setcookie("uno",$_POST["sobremesa"],time()+20);
			setcookie("tres",830,time()+20);
		}else if($_POST["portatil"]=="Lenovo Ideapad 330-15IKBR"){
			setcookie("uno",$_POST["portatil"],time()+20);
			setcookie("tres",500,time()+20);
		}else if($_POST["portatil"]=="Asus TUF Gaming FX505DV-AL014"){
			setcookie("uno",$_POST["portatil"],time()+20);
			setcookie("tres",1000,time()+20);
		}else if($_POST["portatil"]=="MSI GP75 Leopard 9SF-1037XES"){
			setcookie("uno",$_POST["portatil"],time()+20);
			setcookie("tres",1500,time()+20);
		}else if($_POST["portatil"]=="HP Pavilion Gaming 16-A0010NS"){
			setcookie("uno",$_POST["portatil"],time()+20);
			setcookie("tres",949,time()+20);
		}

		header("location:carrito.php");
	}else{
		echo "<p>Por favor, introduce correctamente los campos</p>";
		echo "<a href='tienda_1.php'>Volver al formulario</a>";
	}
?>