<?php 
// conecta com o arquivo que tem a conexão com o banco de dados que esta na variavel $pdo
require_once 'conexao.php';
class Model {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function lista() {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function get($id) {
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
}

$model = new Model($pdo);
$usuario = $model->get(1);

if ($usuario) {
    echo 'existe um usuario com este id';
} else {
    echo 'não tem um usuario com este id';
}
?>