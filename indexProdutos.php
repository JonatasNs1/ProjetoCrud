<?php
     session_start();
    require_once('configuracoes/config.php');
        require_once('bd/conexao.php');
        require_once(SRCP.'controles/exibirProdutos.php');
        require_once(SRC. 'controles/exibirDadosCategorias.php');
        conexaoMysql();
        $nome = (string) null;
        $valor = (string) null;
        $promocao= (string) null;
        $descricao = (string) null;
        $id = (int) 0;
        $destaques = (int) 0;
        $idCategorias = (int) null; 
        $nomeCategorias= (string) "Selecione um Item"; 
        $modo = (string) "Salvar";
        $foto = (string) "semFoto.png";

        if(isset( $_SESSION['produtos'])){
            $id = $_SESSION['produtos']['idProdutos'];
            $nome = $_SESSION['produtos']['nome'];
            $valor= $_SESSION['produtos']['valor'];
            $promocao = $_SESSION['produtos']['promocao'];
            $descricao = $_SESSION['produtos']['descricao'];
            $foto = $_SESSION['produtos'] ['foto'];
            $idCategorias =$_SESSION['produtos'] ['idcategorias'];
            $nomeCategorias =$_SESSION['produtos'] ['categoria']; 
            $modo = "Atualizar";
    
            unset($_SESSION['produtos']);
        }
        // var_dump($_SESSION['categoria']);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleProdutos.css">
    <title>Produtos </title>
</head>
<body>
     
<?php

require_once('header.html');


?>
<div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Produtos </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form enctype="multipart/form-data" action="controles/recebeProdutos.php?modo=<?=$modo?>&id=<?=$id?>&nomeFoto=<?=$foto?>" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="nome" value="<?=$nome?>" placeholder="Digite o nome do produto" maxlength="100">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Foto: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="file" name="fleFoto" accept="image/jpeg, image/jpg, image/png">
                        </div>
                        <div id="visualizarFoto">  <!--3 passo para exibir a foto na hora do editar, esse (nome ) é o caminho -->
                        <img src="<?= NOME_DIRETORIO_FILE.$foto?>"> 

                        </div>
                    </div>

                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Categorias: </label>
                        </div>
                          <div class="cadastroEntradaDeDados">
                        <select name="sltCategoria">
                            
                                <option selected value="<?=$idCategorias?>"> <?=$nomeCategorias?>  </option> 
                            <?php 
                                
                                   $listarCategorias= exibir();
                                    
                                   
                                    while($exibirCategorias = mysqli_fetch_assoc($listarCategorias))
                                    {
                                        ?>
                                            <option value="<?=$exibirCategorias['idcategorias']?>"> <?=$exibirCategorias['categoria']?></option>
                                        <?php
                                    }
                                    
                            ?>
                            </select>
                         </div>  
                    </div>

                 
                  


                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Valor: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="valor" value="<?=$valor?>" maxlength="100">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Destaques: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="checkbox" name="destaques" value="<?=$destaques?>" maxlength="100">
                        </div>
                    </div>

                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Promoção: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="promocao" value="<?=$promocao?>" maxlength="100">
                        </div>
                    </div>

                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Descricao: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="descricao" value="<?=$descricao?>" maxlength="100">
                        </div>
                    </div>
                
                    
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="<?=$modo?>">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>

        <div id="consulta">
            <table id="tableConsulta" >
                <tr>
                    <td id="tableTitulo" colspan="5">
                        <h1> Consulta de Produtos </h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Nome </td>
                    <td class="colunas"> Preco </td>
                    <td class="colunas"> Desconto</td>
                    <td class="colunas"> Descricao</td>
                    <td class="colunas"> Foto</td>
                    <td class="colunas"> Opções </td>
                </tr>
            <?php
                $dadosListar = exibirProdutos();

                while($exibirProdutos=mysqli_fetch_assoc($dadosListar) ){
            ?>
             
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$exibirProdutos['nome'] ?></td>
                    <td class="tblColunas registros"><?=$exibirProdutos['valor'] ?></td>
                    <td class="tblColunas registros"><?=$exibirProdutos['promocao'] ?></td>
                    <td class="tblColunas registros"><?=$exibirProdutos['descricao'] ?></td>
                    <td class="tblColunas registros"> <td class="tblColunas registros"><img class= "foto"src="<?= NOME_DIRETORIO_FILE.$exibirProdutos['foto']?>"></td></td>
                    
                    <td class="tblColunas registros">
                       
                            <a href="controles/editaProdutos.php?id=<?=$exibirProdutos['idProdutos']?>"> 

                                 <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                            </a>
                            
                      
                            <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaProdutos.php?id=<?=$exibirProdutos['idProdutos']?> &foto=<?=$exibirProdutos['foto']?>"> 
                                 <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                            </a>
                    </td>
                </tr>
              <?php

                    }
            ?>
                
            </table>
               
        </div>  
    </div>
        
    <?php

require_once('footer.html');


?>
    </body>
</html>