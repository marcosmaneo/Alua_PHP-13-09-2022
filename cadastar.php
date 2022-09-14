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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

<?php

if($_POST['cpftext']<>""){
    

$filename = "CpfCadastrados.txt";
if(!file_exists($filename)){
    $handle = fopen($filename, "w");
} else {
    $handle = fopen($filename, "a");
    fwrite($handle, $_POST['senha']);
    fflush($handle);
    fclose($handle);
}}

?>    
    <div class="page-header">
        <h1>Olá, seu CPF: <b><?php echo htmlspecialchars($_SESSION["cpftext"]); ?>
        <br>
        </b>.Foi cadastrado com sucesso!!!.</h1>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Novo cadastro</a>
        <br><br>
       
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>