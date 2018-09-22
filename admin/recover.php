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
    if($user == $_POST['$usuario'] AND $old_pass == )

    $sql = "UPDATE usuarios SET senha = :senha";
    $stmt = $conn ->prepare($sql);
    $stmt -> bindParam(':senha', $_POST['senha']);
    
    $result = $stmt->execute();
    
    $user = $_POST['$usuario'];
    $old_pass = $_POST['$old_pass'];
    $new_pass_1 = $_POST['$new_pass_1'];
    $new_pass_2 = $_POST['$new_pass_2'];
    
?>    