<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> <!-- Correção no caminho do CSS -->
    <title>Document</title>
</head>
<body> 

    <div>
        <form action='TelaSelectAll.php' method="post">
            <p>select * from (POO) Esturura da tabela</p>
            <label for="name">Nome Tabela:</labe>
            <input name ="NomeTabela" id="NomeTabela" type="text">

            <button type="submit">Clique aqui</button>
        </form>
    </div>


    <div>
        <form action='TelaSelectInput.php' method="post">
        <p>select para IMPUT com POO</p>
            <label for="name">Nome Tabela:</labe>
            <input name ="NomeTabela" id="NomeTabela" type="text">

            <button type="submit">Clique aqui</button>
        </form>
    </div>

    
</body>
</html>