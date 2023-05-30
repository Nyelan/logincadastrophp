<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg,rgb(68, 18, 68),rgb(90, 25, 194));
      }

      .login-screen{
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 60px;
        border-radius: 8px;
        color: white;
      }

      input{
        text-align: center;
        display: flex;
        margin-bottom: 8px;
        padding: 15px;
        font-size: 16px;
        outline: none;
        border: none;
        border-radius: 5px;
      }

      .inputSubmit{
        display: inline-block;
        background-color: rgb(79, 14, 159);
        border: none;
        padding: 14px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 16px;
        
      }
      .inputSubmit:hover{
        background-color: rgb(89, 38, 125);
        box-shadow: 1px 1px 1px white;
        cursor: pointer;
      }
      #voltar{
        position: absolute;
        left: 3px;
        top: 3px;
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

    <div class="login-screen">
    <a href="index.php" id="voltar">Voltar</a>
      <h1>Login</h1>
      <form action="testLogin.php" method="POST">
      <input type="text" placeholder="Email" name="email" />
      <input type="password" placeholder="Senha" name="senha"/>
      <input class="inputSubmit" type="submit" name="submit" value="Entrar">
      </form>
    </div>
  </body>
</html>
