<?php

   





    require_once('../configuracoes/config.php');


require_once(SRC .'bd/listarCategorias.php');
    
    
    $idcategoria = $_GET['id'];
  
    $dadosCategorias = buscaCategorias($idcategoria);
    
    if($exibirCategorias=mysqli_fetch_assoc($dadosCategorias)){
      
        session_start();
        
      
        $_SESSION['categoria'] = $exibirCategorias;
        
        
        // echo($exibirCategorias);
        // die;
        header('location:../indexCategorias.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }










?>