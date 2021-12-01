<?php

require_once('../bd/conexao.php');
function inserir($arrayProdutos){
    $sql = "insert into tblProdutos
    (
        nome,
        valor,
        promocao,
        descricao,
        foto,
        destaques,
        idcategorias

    )
    values
    (
        '".$arrayProdutos['nome']."',
        '".$arrayProdutos['valor']."',
        '".$arrayProdutos['promocao']."',
        '".$arrayProdutos['descricao']."',
        '".$arrayProdutos['foto']."',
        '".$arrayProdutos['destaques']."',
        '".$arrayProdutos['idcategorias']."'
    )
    ";
    // echo($sql);
    // die;
    $conexao = conexaoMysql();

    // $resultado = mysqli_query($conexao,$sql)
    if($resultado = mysqli_query($conexao,$sql)){
        // echo('aqui no inserir foi');
        return true;
    }else{
        // echo('aqui no inserir não foi');
         return false;
    }
}


?>