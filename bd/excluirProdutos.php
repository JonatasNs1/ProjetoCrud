<?php
 require_once('../bd/conexao.php');
 function excluir($idProdutos){
     $sql = "delete from tblProdutos where idProdutos =".$idProdutos;


 
     $conexao = conexaoMysql();

     if($ex = mysqli_query($conexao, $sql)){
         return true;
     }else{
         return false;
     }
 }




?>