<?php
session_start();
if(!isset($_SESSION['Loginadm']) and empty($_SESSION['Loginadm'])){
	header("location:".BASE_URL."login.php");
}
$id=$_SESSION['Loginadm'];
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
				<li><a href="<?php echo BASE_URL?>admin"> <span> Home</span></a></li>
				<li ><a href="<?php echo BASE_URL?>admin/cadastroUsuario.php"> <span> Cadastrar usuario</span></a></li>
				<li ><a href="<?php echo  BASE_URL?>admin"> <span> Empresas</span></a></li>
				<li ><a href="<?php echo BASE_URL?>admin"> <span> Funcionários</span></a></li>
				<li ><a href="<?php echo BASE_URL?>admin"> <span> Veículos</span></a></li>
				<li ><a href="<?php echo BASE_URL?>admin"> <span> Documentos</span></a></li>
				<li ><a href="<?php echo BASE_URL?>admin"> <span> Usuarios</span></a></li>
				<li ><a href="<?php echo BASE_URL?>admin"> <span> .</span></a></li>
				<li><a href="<?php  echo BASE_URL?>logout.php"> <span> Sair </span></a></li>
			</ul>
		</div>
	</slidebar>

	<header>
		<li>Usuário: <?php $dados=$u->getUsuarios($id);
				echo $dados['nome'];?></li>
	</header>
