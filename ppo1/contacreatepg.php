<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();

if (!isset($_SESSION['logado'])) {
    $_SESSION['logado'] = false;
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
       $_SESSION['nome'] = $_POST['nome_cliente'];
       $_SESSION['email'] = $_POST['email_cliente'];
       $_SESSION['senha'] = $_POST['senha_cliente'];
       $_SESSION['logado'] = true;
       header('Location: home.php');
    }    
 }

?>

<!DOCTYPE html>
<html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Cadastro</title>

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
    <link rel='stylesheet' type='text/css' media='screen' href='css/contacreatepg.css'>
    <script async defer src='js/home.js'></script>

</head>

<body>

    <div class="peixes">
        <video src="imagens/peixes2.mp4" autoplay muted loop></video>
    </div>

    <a class="dada">CADASTRO</a>

    <section class="page1">
        <form action="" method="post" name="form" enctype="multipart/form-data">
            <div class="login">
                <div class="usuario">
                    <input type="text" name="nome" placeholder="Nome de usuário " autofocus>
                </div>

                <div class="email">
                    <input type="text" name="email" placeholder="Informe seu email " autofocus>
                </div>

                <div class="senha">
                    <input type="password" name="senha" placeholder="Sua senha " autofocus>
                </div>
                <div class="entrar">
                    <a href="index.html" style="text-decoration: none; color: black;">
                        <button class="botao" style="text-decoration: none; color: black;" name="register">Criar conta</button>
                    </a>
                </div>
            </div>
        </form>
    </section>


</body>

</html>