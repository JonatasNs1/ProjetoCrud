<?php
    

 
    require_once('../bd/conexao.php');


        function inserir($arrayCategoria)
        {
            
            $sql = "insert into tblcategorias
                (
                categoria
                ) 
                values
                (
                    '".$arrayCategoria['categoria']."'
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