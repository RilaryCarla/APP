<?php

namespace App\DAO;

use App\Model\Login;

// As classes DAO são responsaveis por executar os SQL juntoo ao banco de dados

final class LoginDAI extends DAO 
{
    public function autenticar(Login $model) : ?Login 
    {
        $sql = "SELECT * FROM usuario WHERE email=? AND senha=sha1(?)";

        $stmt = parent::$conexao->prepare($sql);  
        $stmt->bindValue(1, $model->Email);
        $stmt->bindValue(2, $model->Senha);
        $stmt->execute();

        $model = $stmt->fetchObject("App\Model\Login");

        return is_object($model) ? $model : null;
    }
}