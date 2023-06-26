<?php

require("..//infra/Connection.php");

Class FormularioModel {

    public $conection;
    Public function __construct()
    {
        $this->conection = new Connection;
    }

    function cadastra($nome, $email, $senha) {
        $sql = "INSERT INTO usuario (Nome, Email, Senha) VALUES ('$nome', '$email', '$senha')";

        mysqli_query($this->conection->getConnection(), $sql);
    }

    function getProjetos() {
        $sql = "SELECT * projetos";

        return mysqli_query($this->conection->getConnection(), $sql);
    }


}

?>
