<?php



require_once(SRCO.'bd/conexaoUsuarios.php');

function listar(){

    $sql = "select * from  tblUsuarios";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);
    // if( $select = mysqli_query($conexao, $sql)){
    //     echo('Foi a conexao');
    // }else{
    //     echo('Não foi');
    // }

    // if( $select = mysqli_query($conexao, $sql)){
    //     echo('selecao feita com sucesso');
    // }else{
    //     echo('erro');
    // }

    return $select;
}


function busca($idUsuarios){
   
    $sql = "select * from tblUsuarios
    where idUsuarios = ".$idUsuarios;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

        

?>