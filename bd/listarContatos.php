<?php

require_once(SRC.'bd/conexaoContatos.php');

function listar(){

    $sql = "select * from  tblContatos";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    // if( $select = mysqli_query($conexao, $sql)){
    //     echo('selecao feita com sucesso');
    // }else{
    //     echo('erro');
    // }

    return $select;
}




?>