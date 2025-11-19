<?php
require_once '../models/conexao.php';
require_once '../models/model.php';

class modelController {
    public function adicionar($usuario)
    {

    }

    public function validarCampos($usuario) {
        $campos = ['nome_usuario', 'senha', 'nome', 'email', 'cargo', 'telefone'];

        switch ($usuario) {
            
        }
    }
}