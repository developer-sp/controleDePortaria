<?php
session_start();
if(!isset($_SESSION['Logia']) and empty($_SESSION['Login'])){
	header("location:".BASE_URL."login.php");
}
$id=$_SESSION['Login'];
$u= new Usuarios();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Controle de Portaria</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
	</head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>

	<slidebar id="navbarleft" class="slidebar position-absolute">
		<div class="logo">
			<img src="">
		</div>
		<div class="menu">
			<ul>
				<li><a href="<?php echo BASE_URL?>"> <span> Home</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Funcionários</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Veículos</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Entrada e Saida</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Visitantes</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Ocorrência</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Correspondência</span></a></li>
				<li ><a href="<?php echo BASE_URL?>"> <span> Chaves</span></a></li>
				<li><a href="<?php echo  BASE_URL?>logout.php"> <span> Sair </span></a></li>
			</ul>
		</div>
	</slidebar>

	<header>
		<li>Usuário: <?php $dados=$u->getUsuarios($id);
				echo $dados['nome'];?></li>
	</header>
