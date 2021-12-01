<?php

require_once(SRC . 'bd/listarContatos.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }

?>