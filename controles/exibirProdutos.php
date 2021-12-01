<?php

require_once(SRCP. 'bd/listarProdutos.php');
function exibirProdutos(){
    $dadosListar = listar();
    return $dadosListar;
}


?>