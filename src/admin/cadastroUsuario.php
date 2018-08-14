<?php
require '../config.php';
require '../classes/usuario.php';
require 'pages/header.php';

$u= new Usuarios();

?>
<body>
<section id="main-areauser" class="wrapper">
	<form method="post">
		<div class="card">
		  <div class="card-header text-center">
		    Cadastro de usuario
		  </div>
		   <div class="card-body">
			<div class="container">
				<div class="form-row">
					<?php
						if (isset($_POST['nome']) and !empty($_POST['nome'])) {
							$nome= addslashes($_POST['nome']);
							$usuario= addslashes($_POST['usuario']);
							$cpf= addslashes($_POST['cpf']);
							$matricula= addslashes($_POST['matricula']);
							$funcao= addslashes($_POST['funcao']);
							$empresa= addslashes($_POST['empresa']);
							$nivel= addslashes($_POST['nivel']);

							if ($da=$u->cadastroUsuario($nome, $usuario, $cpf, $matricula, $funcao, $empresa, $nivel)) {
								?>
								<div class="alert alert-success col-12" role="alert">
								 Usuario cadastrado com sucesso!
								</div>
								<?php
							}else{?>
								<div class="alert alert-danger col-12" role="alert">
								  O usuário já tem cadastro
								</div>
							<?php
						}
						}
					?>
					<div class="form-group col-md-8">
						<label for="nome">*Nome Completo</label>
						<input type="text" class="form-control" name="nome" id="nome" maxlength="70" required autofocus autocomplete="off">
					</div>
					<div class="form-group col-md-4">
						<label for="usuario">*Nome Usuário</label>
						<input type="text" name="usuario" class="form-control" id="usuario" maxlength="20" required autofocus autocomplete="off">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="cpf">*Cpf</label>
						<input type="text" class="form-control" name="cpf" id="cpf" maxlength="11" required autocomplete="off">
					</div>
					<div class="form-group col-md-6">
						<label for="matricula">*Matrícula</label>
						<input type="text" class="form-control" name="matricula" id="matricula" maxlength="11" required autocomplete="off">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="Funcao">*Funcão</label>
						<input type="text" name="funcao" id="funcao" class="form-control" maxlength="50" maxlength="11" required autocomplete="off">
					</div>
					<div class="form-group col-md-4">
							<label for="cpf">*Empresa</label>
							<input type="text" class="form-control" name="empresa" id="empresa" maxlength="50" autocomplete="off">
					</div>	
					<div class="form-group col-md-4">
						<label for="nivel">*Nível</label>
						<select name="nivel" class="form-control">
							<option value="1">Administrador</option>
							<option value="2">Usuário</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<input type="submit" name="salvar" value="Salvar" class="btn btn-primary btn-lg">
					</div>
				</div>
			</div>
		</div>
		</div>
	</form>
</section>

