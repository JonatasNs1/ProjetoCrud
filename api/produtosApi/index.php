<?php

require_once("vendor/autoload.php");
  require_once("../controles/exibirProdutos.php");
  require_once("../controles/exibirDadosCategorias.php");
    $app = new \Slim\App();



    $app->get('/produtos', function($request, $response, $args){

        if(isset( $request ->getQueryParams()['nome'])) {

        
            $nome = (string) null;
            $nome = $request ->getQueryParams()['nome']; 

            if($listDados = buscarNomeProdutos($nome)){
                // var_dump($listDados);
                // die;
                    if( $listDadosArray = criarArray($listDados)){  
                        // var_dump($listDadosArray);
                        // die;
                             $listDadosJSON = criarJSON($listDadosArray);
                    }
            }
           
        }else{
            if($listar =exibirProdutos()){

                if($listarDadosArray = criarArray($listar)){
                    $listarDadosJSON = criarJSON($listarDadosArray);
                }
            }
            
            
            if($listarDadosArray){
                return $response   ->withStatus(200) 
                ->withHeader('Content-Type', 'application/json') 
                ->write($listarDadosJSON);
            }else{
                return $response   ->withStatus(204); 
            }
          
        }
        
      
        
    });

    $app->get('/produtos/{id}', function($request, $response, $args){ 
        $id = $args['id']; 

       
        if($listDados = buscarCategorias($id)){ 
           
                if( $listDadosArray = criarArrayCategorias($listDados)){  
                         $listDadosJSON = criarJSONCategorias($listDadosArray);
                }
        } 
       
        
        if( $listDadosArray){ 
            return $response   ->withStatus(200) 
                               ->withHeader('Content-Type', 'application/json') 
                               ->write($listDadosJSON); 

        }else{
                         return $response   ->withStatus(204);
                                    
        }

     });

    $app->run();

?>