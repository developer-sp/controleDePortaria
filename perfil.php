<?php
    session_start();
    session_name('usuario');
    
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location:index.php');
    }

    $logado = $_SESSION['usuario'];

?>    
<title>Perfil do usuário</title>
<meta charset="ISO-8951">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
<link rel="stylesheet" href="src/css/custom.css">
         

<body class="bg_system">
    
    <section class="topo">
        <img src="src/img/logo.png" style="width: 200px;" >
        <a href="sair.php">Sair
        </a>   
    </section>
        
    <sidebar class="sidebar">
                <hr>
            <section class="logon">
                
                <div class="img_user">
                    <img src="src/img/user.svg"/>
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
                        <li><a href="perfil.php">Home</a></li>   
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
  
    <main class="painel">
        <section class="usuarios_online">
            <?php
                include('admin/online.php');
            ?>        
        </section>
    
    </main>
    
    
</body>