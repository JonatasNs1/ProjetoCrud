<?php
require_once('../configuracoes/config.php');

require_once(SRC .'bd/inserirProdutos.php');
 require_once(SRC.'bd/uploadProdutos.php');
 require_once(SRC.'configuracoes/upload.php');




    
    $nome = (string) null;
    $valor = (string) null;
    $promocao = (string) null;
    $descricao = (string) null;
    $foto = (string) null; 
    $destaques = (int) 0;
    $idCategorias  = (int) null; 


    
    if(isset($_GET['id'])){ 
        $id = (int) $_GET['id'];
   }
  else{
      $id = (int) 0; 
  } 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Recebe os dados encaminhados pelo formulario, através do metodo POST
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $promocao = $_POST['promocao'];
        $descricao = $_POST['descricao'];
        $nomeFoto = $_GET['nomeFoto']; 
        $destaques = $_POST['destaques']?? 0; 

        $idCategorias = $_POST['sltCategoria'];

        if(strtoupper($_GET['modo']) == 'ATUALIZAR')
        {
            if($_FILES['fleFoto'] ['name'] != "") 
            {
                 $foto = uploadFile($_FILES['fleFoto']); 
                 unlink(SRC.NOME_DIRETORIO_FILE.$nomeFoto ); 
            }else{
                $foto = $nomeFoto;
            }
        }else{ 
            $foto = uploadFile($_FILES['fleFoto']); 
        }

     
    if($nome == null || $valor == null|| $promocao == null || $descricao == null)
    {
        echo ("<script> 
            alert('caixa vazia');
            window.history.back();
        </script>");  
    }
        
    if(strlen($nome)>100 || strlen($valor) >15 || strlen($promocao) > 20 || strlen($descricao)>20)
        {
              echo ("<script> 
            alert('Maximo de caracteres');
            window.history.back(); 
        </script>"); 
        }
        else{
            //local para enviar os dados para o Banco de dados
            //criacao de um array para encaminhar a função de inserir
            $produtos = array(
                  "nome" => $nome,
                    "valor" => $valor,
                    "promocao" => $promocao,
                    "descricao" => $descricao,
                    "foto" => $foto,
                    "destaques" => $destaques,
                    "idcategorias" => $idCategorias,
                    "id" => $id
            );
            
            // fazer o if na hora que for fazer o atualizar
            //validacao para saber se é para inserir um novo registro ou se é para atualizar um registro existente no bd
            if(strtoupper($_GET['modo']) == 'SALVAR'){
                
           
            //chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente.
           if (inserir($produtos)) //tratamento para ver se os dados chegaram no banco
                echo ("
                    <script>
                        alert('foi inserido');
                        window.location.href = '../indexProdutos.php';
                    </script>
                    " );
            else
                echo ("
                    <script>
                        alert('Não foi');
                         window.history.back();
                    </script>
                ");
            }elseif(strtoupper($_GET['modo']) == 'ATUALIZAR')
            { 
                
                
                if(edita($produtos))
                     echo ("
                        <script>
                            alert('foi atualizado');
                            window.location.href = '../indexProdutos.php';
                            </script>
                    " );
                    else
                        echo ("
                            <script>
                            alert('Não foi possivel atualizar');
                            window.history.back();
                            </script>
                        ");
                
            }
        }
    
        
    }










?>