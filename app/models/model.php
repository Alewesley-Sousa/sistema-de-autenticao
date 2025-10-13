<?php
<<<<<<< HEAD
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
=======
include_once('conexao.php')
// vamos criar os comandos primodiais sem confirmação de nada
>>>>>>> aad9b41860e0eae4a6685ff4a710f57373cb3481

$sql = 'SELECT * FROM usuarios';
$stmt = $pdo->prepare($sql);
$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($usuarios);
?>