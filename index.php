<?php
include_once 'app/models/conexao.php';
include_once 'app/models/model.php';

$model = new Model($pdo);

$model->excluir(1);
if($_SESSION['sucesso']) {
    echo $_SESSION['sucesso'];
} else {
    echo $_SESSION['error'];
}