<?php 
// conecta com o arquivo que tem a conexão com o banco de dados que esta na variavel $pdo
require_once 'conexao.php';
class Model {
    //erros no codigo: //1- faltou o $ na variavel pdo //2- faltou passar o pdo no construtor da classe
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function lista() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$model = new Model($pdo);
$usuarios = $model->lista();

if ($usuarios) {
    print_r($usuarios);
    echo 'tem algo aqui';
} else {
    echo 'tem nada aqui';
}

echo 'opa';
?>