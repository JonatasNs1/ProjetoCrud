<?php

    require_once('../configuracoes/config.php');
    require_once(SRCH.'bd/inserirContatos.php');

    $nome = (string) null;
    $email = (string) null;
    $celular = (string) null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];


        if($nome == null || $email == null || $celular == null){
            echo('Caixa vazia');
        }else{
            $contatos = array(
                "nome" => $nome,
                "email" => $email,
                "celular" => $celular
            );
        }if(inserirContatos($contatos)){
            // echo('foi com sucesso');
            echo ("
            <script>
                alert('foi inserido');
                window.location.href = '../indexHamburg.php';
            </script>
            " );
        }else{
            // echo('nao foi aqui no insert');
            echo ("
            <script>
                alert('Não foi inserido');
                 window.history.back();
            </script>
        ");
        }
    }


?>