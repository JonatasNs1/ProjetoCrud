<?php

require_once('../configuracoes/config.php');


require_once(SRC .'bd/listarProdutos.php');
    
    
    $idProdutos = $_GET['id'];
  
    $dadosProdutos = busca($idProdutos);
    
    if($exibirProdutos=mysqli_fetch_assoc($dadosProdutos)){
      
        session_start();
        
      
        $_SESSION['produtos'] = $exibirProdutos;
        
        
        // echo($exibirCategorias);
        // die;
        header('location:../indexProdutos.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }


?>