<?php
    try{
            $conn = new PDO("mysql:host=localhost; dbname=test", "root","");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    
    $tempo = time();
    $nome_usuario = $_SESSION['usuario'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $verifica = "SELECT * FROM online WHERE ip = ?";
    $stmt= $conn->prepare($verifica);
    $stmt ->bindParam(1, $ip);

    $result = $stmt->execute();

    $linhas = count($verifica);
    
    if($linhas == 0) {
        $acrescenta = mysql_query("INSERT INTO online (nome_usuario, ip, tempo) VALUES ('$nome_usuario','$ip', '$tempo')");
    }else{
        $ip = mysql_result($verifica,0,'ip');
        $atualiza = mysql_query("UPDATE online SET tempo = '$tempo' WHERE ip = '$ip'");
    }

    mysql_query("DELETE FROM online WHERE tempo < '$tempo'".-"300");

    $online = mysql_query("SELECT nome FROM online");

    echo $online;
    
?>