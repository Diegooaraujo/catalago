<?php
  require_once('Conexao.php');
  $con = new Conexao();
  if(isset($_POST['cadastrar']))
  {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confSenha =addslashes($_POST['confSenha']);

    if(empty($email)&&empty($senha)&&empty($confSenha))
    {
      echo 'preencha todos os campos';
    }
    else{
      if($senha == $confSenha){
        $con->getConexao();
        if($con->cadastrar($email,$senha))
        {
          echo "cadastrado com sucesso";
        }
        else{
          echo'ja cadastrado';
        }
      }else{
        echo 'senha e confirmar senha não correspondem';
      }
    }
     
  }else if(isset($_POST['login'])){
    $email =addslashes($_POST['loginEmail']);
    $senha =addslashes($_POST['loginSenha']);
    $con->getConexao();
    if($con->logar($email,$senha)){
      header("location: admin.php");
    }else{
      echo'ususario nao encontrado!';
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="content">
    <div class="left">
      <img src="img/background.jpg" alt="">
    </div>
    <div class="right">
      <div class="container">
        <div class="buttonsForm">
          <div class="btnColor"></div>
          <button id="btnSignin">Sign in</button>
          <button id="btnSignup">Sign up</button>
        </div>
    
        <form id="signin" method="POST">
          
          <div class="conteiner-form">
            <h1>Olá! faça login</h1>
            <p>Entre com seu e-mail</p>
            <input type="text" placeholder="Email" name="loginEmail" required maxlength="100" />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" placeholder="Password" name="loginSenha" required maxlength="32" />
            <i class="fas fa-lock iPassword"></i>
            
            <button type="submit" name="login">Sign in</button>
          </div>
        </form>
    
        <form id="signup" method="POST">
          <div class="conteiner-form">
            <h1>Criar Conta</h1>
            <p class="desc">Comece sua jornada conosco</p>
            <input type="text" placeholder="Email" name="email" required maxlength="100"/>
            <i class="fas fa-envelope iEmail upEmail"></i>
            <input type="password" placeholder="Password" name='senha' required maxlength="32" />
            <i class="fas fa-lock iPassword upPassword"></i>
            <input type="password" placeholder="Password" name="confSenha" required maxlength="32" />
            <i class="fas fa-lock iPassword2 upPassword2" ></i>
            <button type="submit" name="cadastrar">Sign up</button>
          </div>
        </form>
      </div>
    </div>

  </div>

  <script src="login.js"></script>
</body>
</html>