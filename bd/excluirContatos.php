<?php

require_once('../bd/conexaoContatos.php');

function excluir($idContatos){
    $sql = "delete from tblContatos where idContatos= ". $idContatos;

    $conexao =conexaoMysql();

    if($resultado = mysqli_query($conexao,$sql)){
        return true;
    }else{
        return false;
    }
}


?>