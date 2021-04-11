<title>Alterar senha de usuário</title>

<meta @charset="iso-8859-1">
<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    
<form method="POST" name="form_recover" id="form_recover" action="recover.php">
    
    <fieldset>
        
        <legend>ALTERAR A SENHA DE USUÁRIO</legend>
    
        <label>Insira o nome do usuário:</label>
        <input  type="text" name="user" id="user" required>
        <br><br>
        
        <label>Insira a senha anterior:</label>
        <input type="password" name="old_pass" id="old_pass" required>
        <br><br>
        
        <label>Insira a nova senha:</label>
        <input type="password" name="new_pass_1" id="new_pass_1" required>
        <br><br>
        
        <label>Repita a nova senha:</label>
        <input type="password" name="new_pass_2" id="new_pass_2" required>
        <br><br>
        
        <input type="submit" value="Alterar" class="btn btn-primary"> <br><br>
    </fieldset>
    
</form>
<a href="perfil.php" class="btn btn-primary">Voltar</a>
