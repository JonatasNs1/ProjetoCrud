<?php

    // require_once('bd/listarCategorias.php');
    
require_once(SRC . 'bd/listarCategorias.php');
    function exibir(){
        
        $dadosListar =  listarCategorias();
  
        return $dadosListar;
    }


      
function criarArrayCategorias($objeto)
{
    $cont = (int) 0;

    
    while($rsDados = mysqli_fetch_assoc($objeto))
    {
        
        $arrayDados[$cont] = array( 
            "id" => $rsDados['idcategorias'],
            "categoria" => $rsDados['categoria']
           
        );

        $cont +=1; 
    }
 
    if(isset($arrayDados)){
        return $arrayDados;
    }else{
        return false;
    }
}


function criarJSONCategorias($arrayDados)
{
    
    header("content-type:application/json");

    $listarJSON = json_encode($arrayDados); 


    if(isset($listarJSON)){
        return $listarJSON;
     }else{
         return false;
    }
}

function buscarCategorias($id){
    $dados = buscaCategorias($id);
    return $dados;
}





?>