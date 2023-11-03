<?php


class Banco{
    private $link;
    
    function ConectarBanco() {
        // Conectando e selecionando o banco de dados usando MySQLi
        $this->link = new mysqli('localhost', 'root', '', 'test');

        // Verificando a conexão
        if ($this->link->connect_error) {
            die('Falha na conexão: ' . $this->link->connect_error);
        } else{
            echo 'Conexão bem-sucedida <br>';
        }
    }

    function selectAll($NomeTabela){
        // Executando consulta SQL
        $query = "SELECT c.column_name FROM information_schema.tables t INNER JOIN information_schema.columns c ON t.table_schema = c.table_schema AND t.table_name = c.table_name WHERE t.table_name = '$NomeTabela';";
        $result = $this->link->query($query);
        if (!$result) {
            die('Query falhou: ' . $this->link->error);
        } else {
            echo 'Query bem-sucedida';
            echo '<br><br><br>';
        }
                
        return $result;

    }

    function  MostrarSelectAll($resultado){
        // Imprimindo resultados em HTML
        echo "<table>\n";
        while ($line = $resultado->fetch_assoc()) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
        echo "\t</tr>\n";
        }
        echo "</table>\n";
    
    }

    function MostrarSelectComInput($resultado) {
        echo "<table>\n";
        while ($line = $resultado->fetch_assoc()) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
                echo "\t\t<td><input type='text'></td>\n"; // Correção aqui
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
    }
    

    function FecharConecxao(){
        // Fechando a conexão
        $this->link->close();
    }

}




?>