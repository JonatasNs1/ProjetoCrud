<?php

    // require_once(SRC.'bd/conexao.php');
    require_once('../bd/conexaoUsuarios.php');
    function excluir($idUsuarios){
        $sql = "delete from tblUsuarios where idUsuarios =".$idUsuarios;

  
    
        $conexao = conexaoMysql();

        if($ex = mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }



?>