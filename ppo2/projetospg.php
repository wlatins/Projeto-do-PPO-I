<?php
require_once('topo/conexao.php');
require_once('classes/projeto.php');
header('Content-Type: text/html; charset=utf-8');
$projeto = new Projeto($conn);

$url = 'imagens/imagens-projetos/';

$projetosHTML = $projeto->listar($url);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Projetos</title>

  <!-- links de fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- links de arquivos -->
  <link rel='stylesheet' type='text/css' media='screen' href='css/principal.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/projetospg.css'>
  <script async defer src='js/home.js'></script>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li style="list-style: none;" class="nav-item"><a href="index.php" style="text-decoration: none;">Home</a></li>
        <li style="list-style: none;" class="nav-item"><a href="quem_somos.php" style="text-decoration: none;">Quem Somos?</a></li>
        <li style="list-style: none;" class="nav-item"><a href="projetospg.php" style="text-decoration: none;">Projetos</a></li>
      </ul>
    </nav>

    <div class="barra_de_pesquisa">
      <input placeholder="Pesquise aqui" class="texto_da_pesquisa">
      <img class="icone" src="imagens/lupa.png">
    </div>
  </header>

  <section class="page1">
    <?php echo $projetosHTML; // Exibe a lista de projetos ?>
  </section>

</body>

</html>