<?php

    function conexaoMysql(){

        $servidor = 'localhost';
        $usuario = 'root';
        $senha = 'bcd127';
        $database = 'dbCrud';

        // $conexao = mysqli_connect($servidor, $usuario, $senha, $database)

        if($conexao = mysqli_connect($servidor, $usuario, $senha, $database)){
            return $conexao;
            // echo('foi a conexao');
        }else{
            return false;
            // echo('Não foi a conexão');
        }
    }



?>