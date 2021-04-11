<?php
    session_start()
   
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location:../index.php');
    }
    

    $conn = new PDO("mysql:host=localhost; dbname=test", "root","");

    $stmt = $conn->prepare('INSERT INTO usuarios SET (nome = ?, cpf = ?, empresa = ?, matricula=?, cargo=?, nivel_acess=?, situacao=?, usuario=?, senha=?');

    $stmt -> bindParam(1, $_POST['nome']);
    $stmt -> bindParam(2, $_POST['cpf']);
    $stmt -> bindParam(3, $_POST['empresa']);
    $stmt -> bindParam(4, $_POST['matricula']);
    $stmt -> bindParam(5, $_POST['cargo']);
    $stmt -> bindParam(6, $_POST['nivel_acess']);
    $stmt -> bindParam(7, $_POST['situacao']);
    $stmt -> bindParam(8, $_POST['usuario']);
    $stmt -> bindParam(9, $_POST['senha']);

    $result = $stmt->execute();

    
    if(count($result) > 0) {
        echo 'Usuario cadastrado com sucesso!';
    } else {
        echo 'Usuario nao cadastrado.';
    }


?>