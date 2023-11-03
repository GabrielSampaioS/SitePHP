<?php

$nomeTabela = $_POST['NomeTabela']; 
echo $nomeTabela;
echo '<br>';

// Inclua o arquivo 'BancoDados.php' para ter acesso à classe 'Banco'
include 'BancoDados.php';


$banco = new Banco();
$banco->ConectarBanco();
$result = $banco->selectAll($nomeTabela); // Chame o método 'selectAll' com o nome da tabela

$banco->MostrarSelectAll($result);



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> <!-- Correção no caminho do CSS -->

    <title>Document</title>
</head>
<body>
</body>
</html>