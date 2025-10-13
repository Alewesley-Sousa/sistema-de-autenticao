<?
echo "<h2> teste de conexao com o baco de dados </h2>";
require_once 'config/ conexao.php';

if(isset($pdo)) {
    echo "<p style='color: green;'>Conexão com o banco de dados estabelecida com sucesso!</p>";
} else {
    echo "<p style='color: red;'>Falha de conexao.</p>";
}

//acessar: https://localhost/CrudFilmes/testeconexao.php