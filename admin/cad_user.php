<? php
    session_start();
    
    $user = $_POST['user'];
    &password = $_POST['password'];

    $con = mysql_connect("127.0.0.1");
    
    $select = mysql_select_db("test");
    
    $result = mysql_query("INSERT INTO novo_usuario (NOME, SENHA) VALUES ('$user','$password'");

    if(mysql_num_rows ($result) > 0) {
        echo("Usuário cadastrado com sucesso!!!");          
    } else {
        echo("Cadastro não realizado, tente novamente")
        header('location:cadastro.php');    
    }
    
?>