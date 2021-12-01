<?php

   





    require_once('../configuracoes/config.php');


require_once(SRCO .'bd/listarUsuarios.php');
    
    
    $idUsuarios = $_GET['id'];
  
    $dadosUsuarios = busca($idUsuarios);
    
    if($exibirUsuarios=mysqli_fetch_assoc($dadosUsuarios)){
      
        session_start();
        
      
        $_SESSION['usuarios'] = $exibirUsuarios;
        
        // echo('foi a busca');
        header('location:../indexUsuarios.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }










?>