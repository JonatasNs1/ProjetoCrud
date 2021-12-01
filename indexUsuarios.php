<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarCategorias.php');
//     conexaoMysql();

//     require_once('controles/exibirDadosCategorias.php');

    session_start();

    $nome = (string) null;
    $login = (string) null;
    $senha = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";


    require_once('configuracoes/config.php');

    require_once('bd/conexaoUsuarios.php');
    conexaoMysql();

    require_once(SRCO. 'controles/exibirDadosUsuarios.php');

    if(isset( $_SESSION['usuarios'])){
        $id = $_SESSION['usuarios']['idUsuarios'];
        $nome = $_SESSION['usuarios']['nome'];
        $login = $_SESSION['usuarios']['login'];
        $senha = $_SESSION['usuarios']['senha'];
        $modo = "Atualizar";

        unset($_SESSION['usuarios']);
    }
    // var_dump($_SESSION['categoria']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleUsuarios.css">
    
    <title>Usuarios </title>
</head>
<body>
    <?php

    require_once('header.html');


?>
    <main>
    <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Usuarios </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form action="controles/recebeUsuarios.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="nome" value="<?=$nome?>" placeholder="Digite seu Nome" maxlength="100">
                        </div>
                    </div>

                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Login: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="login" value="<?=$login?>" placeholder="Digite seu Login" maxlength="100">
                        </div>
                    </div>

                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Senha: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="password" name="senha" value="" placeholder="Digite sua Senha" maxlength="50">
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
                        <h1> Consulta de Usuarios</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Nome </td>
                    <td class="colunas"> Login</td>
                    <td class="colunas"> Opções </td>
                </tr>
                <?php

                $dadosUsuarios = exibir();
                
                while ($exibirUsuarios= mysqli_fetch_assoc($dadosUsuarios))
                {

                ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$exibirUsuarios['nome']?></td>
                    <td class="tblColunas registros"><?=$exibirUsuarios['login']?></td>
                    <td class="tblColunas registros">
                        <a href="controles/editaUsuarios.php?id=<?=$exibirUsuarios['idUsuarios']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaUsuarios.php?id=<?=$exibirUsuarios['idUsuarios']?>"> 
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                    </td>
                </tr>
                <?php  
                }
                ?>
                
            </table>
            </div>
     


</main>
<?php

require_once('footer.html');


?>
    
       
    </body>
</html>
