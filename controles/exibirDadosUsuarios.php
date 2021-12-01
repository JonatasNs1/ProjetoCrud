<?php

    // require_once('bd/listarCategorias.php');
    
require_once(SRCO . 'bd/listarUsuarios.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }


  




?>