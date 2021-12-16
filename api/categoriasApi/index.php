<?php

require_once("vendor/autoload.php");
require_once("../controles/exibirDadosCategorias.php");

$app = new \Slim\App();


$app->get('/categorias', function($request, $response, $args){

    if($listar = exibir()){
        if( $listarDadosArray = criarArrayCategorias($listar)){  
            $listarDadosJSON = criarJSONCategorias($listarDadosArray);
             }
    }
       if($listarDadosArray){
        return $response   ->withStatus(200) 
        ->withHeader('Content-Type', 'application/json') 
        ->write($listarDadosJSON);
    }else{
        return $response   ->withStatus(204);
    }
  

});

$app -> run();

?>