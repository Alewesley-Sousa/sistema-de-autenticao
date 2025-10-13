<?php
require_once "conexao.php";
class Model {
    public function lista() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$model = new Model();
$usuarios = $model->lista();




?>