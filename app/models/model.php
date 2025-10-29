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

    public function criar($usuario) {
        $sql = "INSERT INTO usuario(cargo, nome_usuario, senha, nome, email, telefone) VALUE(?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario['cargo'], $usuario['nome_usuario'], $usuario['senha'], $usuario['nome'], $usuario['email'], $usuario['telefone']]);
        $_SESSION['sucesso'] = 'usuario criado com sucesso!';
    }

    public function editar($id, $usuario) {
        $sql = "UPDATE usuario SET cargo = ?, nome_usuario = ?, senha = ?, nome = ?, telefone = ?, email = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute([$usuario['cargo'], $usuario['nome_usuario'], $usuario['senha'], $usuario['nome'], $usuario['telefone'], $usuario['email'], $usuario['id']])) {
            $_SESSION['sucesso'] = $usuario['nome'] . " editado com sucesso!";
        } else {
            $_SESSION['error'] = "não foi possivel editar o usuario.";
        }
    }

    public function excluir($id) {
        $sql = "DELETE FROM usuario WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute([$id])) {
            $_SESSION['sucesso'] = 'sucesso ao excluir o usuario';
        } else {
            $_SESSION['error'] = "erro ao excluir o usuario";
        }
    }
}
?>