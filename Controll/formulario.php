<?php

if($_GET['action'] == "salvar")
{
    require('../Model/formularioModel.php');

    $nome = trim(strip_tags($_POST['nome']));
    $email = trim(strip_tags($_POST['email']));
    $senha = trim(strip_tags($_POST['senha']));
    $senha2 = trim(strip_tags($_POST['senha2']));
    
    $formularioModel = new FormularioModel();

    if($senha == $senha2)
        $formularioModel->cadastra($nome, $email, $senha);
    else
        return null;
}

?>