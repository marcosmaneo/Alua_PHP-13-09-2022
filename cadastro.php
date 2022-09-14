<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastar</h2>
        <p>Insira seu CPF para cadastro:</p>
        <form action="cadastrar.php" method="post">
            <div class="form-group">
                <label>Nº do seu CPF</label>
                <input type="text" name="cpftext" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="cadastar">
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>
        </form>
    </div>    
</body>
</html>