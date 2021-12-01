<?php



//  require_once(SRC.'controles/recebeUsuarios');
require_once('../bd/conexaoUsuarios.php');


    function inserir($arrayUsuarios)
    {
        
        $sql = "insert into tblUsuarios
            (
            nome,
            login,
            senha
            ) 
            values
            (
                '".$arrayUsuarios['nome']."',
                '".$arrayUsuarios['login']."',
                '".$arrayUsuarios['senha']."'
            )
            ";


    $conexao = conexaoMysql();

    // $inserido = mysqli_query($conexao,$sql);

    if($inserido = mysqli_query($conexao,$sql)){
      return true;
    
    }else{
    return false;
    }

}



?>





