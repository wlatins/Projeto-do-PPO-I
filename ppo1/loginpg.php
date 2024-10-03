<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {}
      if (isset($_POST['login'])) {
         if($_SESSION['email_cliente'] === $_POST['email_cliente']) {
            if($_SESSION['senha_cliente'] === $_POST['senha_cliente']) {
               header('Location: home.php');
            }  
         }
}
$_SESSION['email'];
$_SESSION['senha'];

?>
<!DOCTYPE html>
<html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Login</title>

    <!-- links de fontes -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- links de arquivos -->

    <link rel="stylesheet" href="css/principal.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/loginpg.css'>
    <script async defer src='js/home.js'></script>

</head>

<body>
    <div class="peixes">
        <video src="imagens/peixes2.mp4" autoplay muted loop></video>
    </div>

    <section class="page1">
        <a class="dada">LOGIN</a>
        <form action="" method="post" name="form" enctype="multipart/form-data">
            <div class="login">
                <div class="usuario">
                    <input type="text" name="nome" placeholder="Nome de usuário " autofocus>
                </div>
                <div class="senha">
                    <input type="password" name="senha" placeholder="Sua senha" autofocus>
                </div>
                <div class="entrar">
                    <a href="index.html">
                        <button class="botao" name="login">Entrar</button>
                    </a>
                </div>
                <a class="m1" href="contacreatepg.html">Criar conta?</a>
            </div>
        </form>
    </section>
</body>

</html>