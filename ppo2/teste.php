<?php
include_once 'topo/conexao.php';
if ($conn) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro na conexão.";
}
?>