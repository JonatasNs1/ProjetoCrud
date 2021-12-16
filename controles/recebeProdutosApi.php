<?php

require_once('../configuracoes/config.php');
require_once(SRC.'bd/inserirProdutos.php');
require_once(SRC.'bd/uploadProdutos.php');


function inserirProdutosAPI($arrayDados){

    if(inserir($arrayDados)){
        return true;
    }else{
        return false;
    }
}




?>