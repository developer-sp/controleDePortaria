<?php
class Usuarios {

	public function getUsuarios($id) {
		global $pdo;
		$dados=array();
		$sql= $pdo->prepare("SELECT * FROM usuarios WHERE id=:id");
		$sql->bindValue(":id" , $id);
		$sql->execute();

		if ($sql->rowCount()> 0) {
			$dados= $sql->fetch();
			return $dados;
		}else{
			return false;
		}
	}

	public function cadastroUsuario($nome, $usuario, $cpf, $matricula, $funcao, $empresa, $nivel){
		global $pdo;
		$sql= $pdo->prepare("SELECT * FROM usuarios WHERE user=:user or cpf=:cpf or matricula=:matricula");
		$sql->bindValue(":user", $usuario);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":matricula", $matricula);
		$sql->execute();

		if ($sql->rowCount() == 0){
			$sql=$pdo->prepare("INSERT INTO usuarios (nome, user, senha, cpf, matricula, funcao, empresa, nivel, status) values (:nome, :user, :senha, :cpf, :matricula, :funcao, :empresa, :nivel, '1')");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":user", $usuario);
			$sql->bindValue(":senha", md5($usuario));
			$sql->bindValue(":cpf", $cpf);
			$sql->bindValue(":matricula", $matricula);
			$sql->bindValue(":funcao", $funcao);
			$sql->bindValue(":empresa", $empresa);
			$sql->bindValue(":nivel", $nivel);
			$sql->execute();

			return true;
			
		}else{
			return false;
		}
		
	}

	public function login($user, $senha) {
		global $pdo;

		$sql = $pdo->prepare("SELECT * FROM usuarios WHERE user = :user AND senha = :senha and status='1'");
		$sql->bindValue(":user", $user);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			return $dado;
		} else {
			return false;
		}

	}

	public function getTotalUsuarios(){
		$dados= array();

			$sql="SELECT * from usuarios";
		
		$sql= $this->pdo->prepare($sql);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
			
		}
		return $dados;
	}














}
?>