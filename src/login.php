<?php
session_start();
require 'config.php';
require 'classes/usuario.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
	<body>
		<section class="mainlogin" >
			<div class="container main">
				<div class="row align-items-center justify-content-center" id="login">
				<div id="login-column" class="col-md-4">
	                    <div id="login-box" class="col-md-12">
	                        <form id="login-form" class="form" action="" method="post">
	                            <h3 class="text-center text-info">Login</h3>
	                            <?php
	                            $u = new Usuarios();
								if (isset($_POST['cusuario']) && !empty($_POST['cusuario'])) {
									$user=addslashes($_POST['cusuario']);
									$password=addslashes($_POST['csenha']);
									$d=$u->login($user, $password);
									if(isset($d['nivel'])){
										if ($d['nivel']==1) {
											$_SESSION['Loginadm'] = $d['id'];
											header("location:".BASE_URL."admin");
										}
										elseif ($d['nivel']==2) {
										$_SESSION['Login'] = $d['id'];	
										header("location:".BASE_URL);
										}
									}else{
										?>
										<div class="alert alert-danger">
											Usuário e/ou Senha errados!
										</div>
										<?php
									}
								}
	                            ?>
	                            <div class="form-group">
	                                <label for="usuario" class="text-info">*Usuario:</label><br>
									<div class="input-group">
										<div class="input-group-prepend">
								          <div class="input-group-text"><i class="fas fa-user"></i></div>
								        </div>
										<input type="text" name="cusuario"  maxlength="50" id="usuario" class="form-control" required autofocus>
									</div>
	                            </div>
	                            <div class="form-group">
	                                <label for="senha" class="text-info">*Senha:</label><br>
									<div class="input-group">
										<div class="input-group-prepend">
								          <div class="input-group-text"><i class="fas fa-lock"></i></div>
								        </div>
										<input type="password" name="csenha"  maxlength="50 id="senha" class="form-control" required>
									</div>
	                            </div>
	                            <div class="form-group">
	                                <input type="submit" name="centrar" class="btn btn-primary btn-lg btn-block" value="Entrar">
	                            </div>
	                        </form>
	                    </div>
	                </div>
				</div>
			</div>
		</section>	
	</body>
</html>
