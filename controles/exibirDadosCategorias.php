<?php

    // require_once('bd/listarCategorias.php');
    
require_once(SRC . 'bd/listarCategorias.php');
    function exibir(){
        
        $dadosListar =  listarCategorias();
  
        return $dadosListar;
    }


  




?>