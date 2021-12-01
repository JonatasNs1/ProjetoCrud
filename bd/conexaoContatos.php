<?php

    function conexaoMysql(){
        $servidor = 'localhost';
        $user = 'root';
        $senha = 'bcd127';
        $database = 'dbCrud';
    
    
    
        if($conexao = mysqli_connect($servidor,$user,$senha,$database)){
            // echo('foi a conexao');
            return $conexao;
        }else{
            // echo('nao foi a conexao');
            return false;
        }
    
    }
   


?>