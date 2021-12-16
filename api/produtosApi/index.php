<?php

require_once("vendor/autoload.php");
  require_once("../controles/exibirProdutos.php");
  require_once("../controles/exibirDadosCategorias.php");

    $app = new \Slim\App();



    $app->get('/produtos', function($request, $response, $args){


        if(isset( $request ->getQueryParams()['valor'])) 
        {

            $nome = (string) null;
            $nome = $request ->getQueryParams()['valor']; 

            if($listDados = buscarNomeProdutos($nome)){

                    if( $listDadosArray = criarArray($listDados)){  
                             $listDadosJSON = criarJSON($listDadosArray);
                    }
            }
           
        }else{
       
        
            if($listDados = exibirProdutos()){
            
                if( $listDadosArray = criarArray($listDados)){  
                         $listDadosJSON = criarJSON($listDadosArray); 
                }
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