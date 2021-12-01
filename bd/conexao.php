<?php
    

    require_once(SRC.'configuracoes/config.php');
    function conexaoMysql(){
        $servidor =servidor;
        $usuario =usuario ;
        $senha = senha;
        $database =database;

       if( $conexao = mysqli_connect($servidor,$usuario,$senha,$database)){
          return $conexao;
        // echo('foi a conexao');
       }else{
            echo('Não foi a conxexao com o banco');
        }
        
    }


?>