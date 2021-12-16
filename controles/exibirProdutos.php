<?php

// require_once('../configuracoes/config.php');
require_once(SRCP. 'bd/listarProdutos.php');
require_once(SRCP. 'bd/listarCategorias.php');
function exibirProdutos(){
    $dadosListar = listar();
    return $dadosListar;
}

// function buscarCategorias($id){
//     $dados = buscaCategorias($id);
//     return $dados;
// }

function buscarNomeProdutos($nome){
    $dados = buscarNome($nome);

    return $dados;
}

function criarArray($obj){
    $cont = (int) 0;


    while($exibirDados = mysqli_fetch_assoc($obj)){
        $arrayDados[$cont] = array(
            "id" => $exibirDados['idProdutos'],
            "nome" => $exibirDados['nome'],
            "valor" => $exibirDados['valor'],
            "promocao" => $exibirDados['promocao'],
            "descricao" => $exibirDados['descricao'],
            "foto" => $exibirDados['foto'],
            "destaques" => $exibirDados['destaques'],
            "idcategorias" => $exibirDados['idcategorias']


        );
        $cont +=1;
    }
    if(isset($arrayDados)){
        return $arrayDados;
    }else{
        return false;
    }


}


function criarJSON($arrayDados){
    header("content-type:application/json");

    $listaJSON = json_encode($arrayDados);

    if(isset($listaJSON)){
        return $listaJSON;
    }else{
        return false;
    }

}


?>