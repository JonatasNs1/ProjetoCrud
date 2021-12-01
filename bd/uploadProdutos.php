<?php
    require_once('../bd/conexao.php');




function edita($arrayProdutos)
{
    $sql = "update tblProdutos set 
            nome = '".$arrayProdutos['nome']."',
           valor = '".$arrayProdutos['valor']."',
           promocao = '".$arrayProdutos['promocao']."',
           descricao = '".$arrayProdutos['descricao']."',
           foto = '".$arrayProdutos['foto']."',
           destaques = '".$arrayProdutos['destaques']."',
           idcategorias = '".$arrayProdutos['idcategorias']."'
    
        where idProdutos= ".$arrayProdutos['id'];
        $conexao = conexaoMysql();

        // echo($sql);
        // die;

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}