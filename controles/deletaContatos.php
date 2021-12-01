<?php

require_once('../configuracoes/config.php');
require_once(SRCO .'bd/excluirContatos.php');


 
$idContatos = $_GET['id'];


if(excluir($idContatos)){
//    echo('Excluido com sucesso');
echo(BD_MSG_EXCLUIR_CONTATOS);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}

?>