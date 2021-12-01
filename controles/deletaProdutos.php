<?php
require_once('../configuracoes/config.php');
require_once(SRCP .'bd/excluirProdutos.php');


 
$idProdutos = $_GET['id'];
$nomeFoto = $_GET['foto'];

if(excluir($idProdutos)){
    unlink(SRC.NOME_DIRETORIO_FILE.$nomeFoto);
//    echo('Excluido com sucesso');
echo(BD_MSG_EXCLUIR_PRODUTOS);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}


?>