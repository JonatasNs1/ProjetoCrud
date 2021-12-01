<?php



require_once('../configuracoes/config.php');
require_once(SRCO .'bd/excluirUsuarios.php');


 
$idUsuarios = $_GET['id'];


if(excluir($idUsuarios)){
   echo(BD_MSG_EXCLUIR_USUARIOS);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}




?>