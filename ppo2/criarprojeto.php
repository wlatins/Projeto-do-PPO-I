<?php
require_once('topo/conexao.php');
require_once('classes/projeto.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projeto = new Projeto($conn);

    $projeto->settitulo_projeto($_POST['titulo_projeto']);
    $projeto->setautor_projeto($_POST['autor_projeto']);
    $projeto->setdescricao_projeto($_POST['descricao_projeto']);

    // Fazendo upload do arquivo
    if (isset($_FILES['arquivo_projeto']) && $_FILES['arquivo_projeto']['error'] === UPLOAD_ERR_OK) {
        $targetDirectory = 'imagens/imagens-projetos/';  // Diretório de upload
        $targetFile = $targetDirectory . basename($_FILES['arquivo_projeto']['name']);  // Caminho do arquivo

        // Verifica se o arquivo foi movido com sucesso para o diretório
        if (move_uploaded_file($_FILES['arquivo_projeto']['tmp_name'], $targetFile)) {
            // Salva o caminho da imagem na instância do objeto Projeto
            $projeto->setimg_projeto($targetFile);
        } else {
            echo "Erro ao mover o arquivo para o diretório.<br>";
            return;
        }
    } else {
        echo "Erro: Nenhum arquivo foi enviado ou houve erro no upload.<br>";
        return;
    }

    // Aqui você define o id da pessoa (usuário) para associar ao projeto
    $projeto->setid_pessoa_fk($_SESSION['id_pessoa']);

    // Chama o método para inserir o projeto no banco de dados
    $projeto->insert();
}
?>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> registre aqui seu projeto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/registo.css'>
    <script src='main.js'></script>
</head>

<body>
    <form action="" method="post" id="criar" enctype="multipart/form-data">
        <div id="tittle">
            <input type="text" name="titulo_projeto" placeholder="TITULO">
        </div>
        <div id="autor">
            <input type="text" name="autor_projeto" placeholder="NOME DO AUTOR">
        </div>
        <textarea name="descricao_projeto" rows="10" cols="70" id="description"></textarea>
        <div>
            <label for="arquivos">SELECIONE O ARQUIVO</label>
        </div>
        <div id="pute">
            <input name="arquivo_projeto" type="file">
        </div>
        <div>
        <button type="submit" id="baixar">ENVIAR PROJETO</button>
        </div>
    </form>

</body>

</html>