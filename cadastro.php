<?php

session_start();

if(isset($_POST["submit"])){

    // print_r("Nome: " . $_POST["nome"]);
    // print_r("<br>");
    // print_r("Email: " . $_POST["email"]);
    // print_r("<br>");
    // print_r("Telefone: " . $_POST["telefone"]);
    // print_r("<br>");
    // print_r("Sexo: " . $_POST["sexo"]);
    // print_r("<br>");
    // print_r("Data de nascimento: " . $_POST["data_nascimento"]);
    // print_r("<br>");
    // print_r("Cidade: " . $_POST["cidade"]);
    // print_r("<br>");
    // print_r("Estado: " . $_POST["estado"]);
    // print_r("<br>");
    // print_r("Endereço: " . $_POST["endereco"]);
    // print_r("<br>");

    include_once("config.php");

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];

    $result = mysqli_query($conexao, "INSERT INTO usuarios
    (nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco)
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nascimento','$cidade',
    '$estado','$endereco')");

    header('Location: login.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(68, 18, 68),rgb(90, 25, 194));
        }

        .box{
            display: flex;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
            width: 25%;
        }

        fieldset{
            border: none;
        }

        legend{
            text-align: center;
            padding: 10px;
            background-color: rgb(66, 9, 113);
            border-radius: 8px;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none; 
            border: none;
            border-bottom: 1px solid white;
            font-size: 16px;
            width: 100%;
            letter-spacing: 2px;
            outline: none;
            color: white;
        }

        .label-input{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.5s;
        }
        
        .inputUser:focus ~ .label-input,
        .inputUser:valid ~ .label-input{
            top: -20px;
            font-size: 12px;
            color: white;
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            background-image: linear-gradient(45deg,rgb(82, 65, 114),rgb(11, 67, 114));
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 20px;
            margin-bottom: -20px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(45deg, purple, blue);
        }
        #voltar{
        position: absolute;
        left: 5px;
        top: 40px;
        border-radius: 5px;
        font-size: 15px;
        font-weight: 500;
        background-color: rgb(79, 14, 159);
        padding: 5px;
        text-decoration: none;
        color: white;
        border: none;
      }
      #voltar:hover{
        background-color: rgb(89, 38, 125);
        border-color: white;
        box-shadow: 1px 1px 1px white;
      }


    </style>

</head>
<body>
    <div class="box">
        <a href="index.php" id="voltar">Voltar</a>
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="label-input">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="label-input">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="label-input">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="name" class="label-input">Telefone</label>
                </div>
                
                 <p>Sexo:</p>
                 <input type="radio" id="feminino" name="sexo" value="feminino" required>
                 <label for="feminino">Feminino</label>
                 <br>

                 <input type="radio" id="masculino" name="sexo" value="masculino" required>
                 <label for="masculino">Masculino</label>
                 <br>

                 <input type="radio" id="outro" name="sexo" value="outro" required>
                 <label for="outro">Outro</label>
                 <br><br>
                 <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="label-input">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>