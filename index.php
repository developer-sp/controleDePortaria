<meta @charset="ISO-8951">

<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
<link type="text/css" rel="stylesheet" href="src/css/custom.css">





<section id="area_login">
<form method="POST" action="ope.php" id="formlogin" name="formlogin" class="form-control-lg"> 

  <fieldset>
    <legend>LOGIN</legend>
          
        <div class="input-group">
            <span class="input-group-addon">@</span>      
            <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuário" required autofocus>
        </div>
      
        <div class="input-group">  
            <span class="input-group-addon">@</span>                    
            <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required>
        </div>      
     
      <input type="submit" value="Entrar" class="btn btn-primary">

    </fieldset>
</form>    

<a href="alt_senha.php">Esqueci a Senha</a>
</section>
