<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(68, 18, 68),rgb(90, 25, 194));
            text-align: center;
            color: white;
        }
        .box{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 8px;
            color: white;
      }
      
      .boxInOut{
        display: flex;
        flex-direction: column;
        text-align: center;
      }

      a{
        background-color: rgb(79, 14, 159);
        border: none;
        padding: 10px;
        border-radius: 10px;
        color: white;
        font-size: 16px;
        text-decoration: none;
      }
      a:hover{
        background-color: rgb(89, 38, 125);
        box-shadow: 1px 1px 1px white;
        cursor: pointer;
      }
      .boxInOut a{
        font-size: 20px;
        font-weight: 800;
      }
         
    </style>

</head>
<body>
    
    <h1> Site de Estudo </h1>
    <p>Leonardo Vaz </p>

    <div class="box">
        <div class="boxInOut">
            <a href="login.php">Login</a>
            <br>
            <a href="cadastro.php">Cadastro</a>
        </div>
    </div>

</body>
</html>