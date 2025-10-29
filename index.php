<?php
include_once 'app/models/conexao.php';
include_once 'app/models/model.php';

$model = new Model($pdo);

$usuario = ['id' => 1, 'cargo' => 'funcionario', 'nome_usuario' => 'jhonatan.func', 'senha' => '07072008', 'nome' => 'Alewesley nascimento de sousa', 'telefone' => '85999999999', 'email' => 'jhonatan.func@example.com' ];

$model->editar($usuario['id'], $usuario);
if($_SESSION['sucesso']) {
    echo $_SESSION['sucesso'];
} else {
    echo $_SESSION['error'];
}