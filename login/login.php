<?php
   require_once('../db/db.php');
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"])or (empty($_POST
    ["senha"])))){
        print "<script>location.href='index.php';</script>";     
    }

    

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


$sql = "SELECT * FROM usuarios
        WHERE usuario = '{$usuario}'
        AND senha = '{$senha}'";

$enviar = $conn->query($sql);
//  or die($conn->error);

// $row = $res->fetch_object();

// $qtd = $res->num_rows;
$enviar = $conn->query($sql);
if(mysqli_num_rows($enviar) > 0){
    $_SESSION['usuario'] = $nome;
    $_SESSION['senha'] = $senha;
    header('location: ../home.php');
}
    else{
        print "<script>alert('Usuário e/ou senha incorretos');</script>";
        print "<script>location.href='../index.php';</script>";
}


?>