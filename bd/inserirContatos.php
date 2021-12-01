<?php
    require_once('../bd/conexao.php');

    function inserirContatos($arrayContatos){
        $sql = "insert into tblContatos(
                nome,
                email,
                celular
            )
            values(
                '".$arrayContatos['nome']."',
                '".$arrayContatos['email']."',
                '".$arrayContatos['celular']."'
            )
        ";

        $conexao = conexaoMysql();
                // echo($sql);
                // die;

        if($teste = mysqli_query($conexao, $sql)){
        //    echo('foi 1');
            return true;
        }else{
            // echo('echo nao foi 1');
               return false;
        }
    }



?>