<?php
require_once __DIR__ . '/app/models/conexao.php';

echo "<h2> teste de conexao com o baco de dados </h2>";

if(isset($pdo)) {
    echo "<p style='color: green;'>Conexão com o banco de dados estabelecida com sucesso!</p>";
} else {
    echo "<p style='color: red;'>Falha de conexao.</p>";
}
