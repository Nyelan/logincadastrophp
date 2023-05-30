<?php

    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>

    <style>
        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(68, 18, 68),rgb(90, 25, 194));
            color: white;
        }

        nav{
            display: flex;
            justify-content: space-between;
        }

        .btn-sair{
            text-decoration: none;
            background-color: rgb(196, 36, 36);
            border: none;
            padding: 14px;
            border-radius: 10px;
            color: white;
            font-size: 16px;
        }
        .btn-sair:hover{
        background-color: rgb(255, 0, 0);
        box-shadow: 1px 1px 1px white;
        cursor: pointer;
      }

    </style>

</head>
<body>
    <nav>
        Sistema Estudo - Leonardo Vaz
        <a href="sair.php" class="btn-sair">SAIR</a>
    </nav>
    <?php
        
        
        echo "<h1>Bem vindo <u>" . $logado . "</u></h1>";
    ?>

</body>
</html>