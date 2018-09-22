<?php
    session_start();

    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:../index.php');
}

     try{
        $conn = new PDO("mysql:host=localhost; dbname=test", "root","");
    }catch(PDOException $e){
        echo $e->getMessage();
    }


    //PREPARANDO STATEMENT
    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(1, $_POST['usuario'], PDO::PARAM_STR);
    $stmt -> bindParam(2, $_POST['senha'], PDO::PARAM_STR);

    //EXECUTANDO STATEMENT
    $result = $stmt->execute();

    //OBTER LINHA CONSULTADA
    $obj = $stmt->fetchObject();

    //SE A LINHA EXISTE, INDICAR QUE ESTÁ LOGADO E ENCAMINHA PARA OUTRA TELA               
    if ($obj) {
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location:perfil.php');
    }else {
        echo '<p class="erro">Login/Senha inválidos</p>';
        header('Location:index.php');
    }     

?>