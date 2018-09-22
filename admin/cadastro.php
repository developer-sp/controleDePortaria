<?php

    session_start();

    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location:../index.php');
    }

    $logado = $_SESSION['usuario'];
?>
    
<title>Cadastro de usuário</title>
<meta charset="ISO-8951">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/compiler/bootstrap.css">
<link rel="stylesheet" href="../src/css/custom.css">
         

<body class="bg_system">
    
    <section class="topo">
        <img src="../src/img/logo.png" style="width: 200px;" >
       <a href="../sair.php">Sair
        </a>
    </section>
        
    <sidebar class="sidebar">
                <hr>
            <section class="logon">
                
                <div class="img_user">
                    <img src="../src/img/user.svg"/>
                </div>
                
                <hr>
                
                <div class="usuario">
                    <div>
                        <?php
                            echo "Olá, $logado";
                        ?>
                    </div>
                    
                    <div class="online">
                        <div class="online_led">
                        </div>

                        <div class="online_msg">
                            <?php
                                echo "Online";
                            ?>
                        </div>    

                    </div>

                </div>
                
            </section>  
            <hr>
            <nav>        
                <menu class="container-fluid">
                    <ul>
                        <li><a href="../perfil.php">Home</a></li>   
                        <li><a href="admin/cadastro.php">Usuários</a></li>
                        <li><a href="">Empresas</a></li>
                        <li><a href="">Funcionários</a></li>
                        <li><a href="">Veículos</a></li>
                        <li><a href="">Visitantes</a></li>
                        <li><a href="">Entradas</a></li>
                        <li><a href="">Ocorrências</a></li>
                        <li><a href="">Correspondências</a></li>
                        <li><a href="">Chaves</a></li>
                        <li><a href="">Documentos</a></li>
                        <li><a href="">Registros (log)</a></li>
                        <li><a href="">Configuração</a></li>
                    </ul>
                </menu>
        </nav>    
    
    </sidebar>
    
    <main>
        <form method="POST" action="novo_usuario.php" class="form_cadastro">
        <legend>Cadastro de usuários</legend>    
            <fieldset>    
                <input type="text" name="nome" placeholder="NOME COMPLETO..." required>

                <input type="text" name="cpf" placeholder="CPF" style="flex-grow: 1">

                <input type="text" name="empresa" placeholder="EMPRESA" style="flex-grow: 1" required>

                <input type="text" name="matricula" placeholder="MATRÍCULA" required>

                <input type="text" name="cargo" placeholder="CARGO" required>

                <label>Nível de acesso:</label>
                    <select name="nivel_acess">
                        <option>--</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>

                <br>

                <label>Situação:</label>
                        <select name="situacao">
                        <option>--</option>
                        <option>Ativo</option>
                        <option>Inativo</option>
                    </select>

                <br>

                <input type="text" name="usuario" placeholder="LOGIN" required>

                <input type="password" name="senha" placeholder="SENHA" required>
            </fieldset>    

            <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
            
            <input type="submit" name="cancelar" value="Cancelar">
        
        </form>
    
    
    
    
    </main>
  
</body>