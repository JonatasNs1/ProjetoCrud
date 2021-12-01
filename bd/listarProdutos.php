<?php


require_once(SRCP.'bd/conexao.php');

function listar(){
    $sql = "select *from  tblProdutos";

    // $sql = "select tblProdutos.*, tblcategorias.nome from tblProdutos
	// inner join tblCategorias
    // on tblCategorias.idcategorias = tblProdutos.idcategorias
    // order by idcliente desc";




    $conexao = conexaoMysql();
    $select = mysqli_query($conexao, $sql);
    // echo($sql);
    // die;
    // if( )){
    //     // echo('foi a listagem');
    // }else{
    //     echo('Não foi a listagem');
    // }
    
    return $select;
}

function busca($idProdutos){
   
    $sql = "select tblProdutos.*, tblcategorias.categoria from tblProdutos
	inner join tblCategorias
    on tblCategorias.idcategorias = tblProdutos.idcategorias
    where tblProdutos.idProdutos = ".$idProdutos;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

?>