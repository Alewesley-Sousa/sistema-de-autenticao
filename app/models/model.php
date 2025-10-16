<?php 
// conecta com o arquivo que tem a conexão com o banco de dados que esta na variavel $pdo
require_once 'conexao.php';
session_start();
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

    public function adicionar($usuario) {
        $sql = "INSERT INTO usuario(usuario, senha, nome, email, nivel_acesso) VALUE(?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario['usuario'], $usuario['senha'], $usuario['nome'], $usuario['email'], $usuario['acesso']]);
        $_SESSION['sucesso'] = 'usuario criado com sucesso!';
    }
}
?>