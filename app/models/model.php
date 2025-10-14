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
        
    }
}

?>