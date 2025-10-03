<?php
include_once('conexao.php')
// vamos criar os comandos primodiais sem confirmação de nada

$sql = 'SELECT * FROM usuarios';
$stmt = $pdo->prepare($sql);
$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($usuarios);
?>