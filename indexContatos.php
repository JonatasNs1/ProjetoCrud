
<?php
    require_once('configuracoes/config.php');
    // require_once('bd/conexaoContatos.php');
    // conexaoMysql();
    // require_once('../indexHamburg.php');
    require_once(SRC.'controles/exibirContatos.php');

    $nome = (string) null;
    $email = (string) null;
    $celular = (string) null;

    // $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $celular = $_POST['celular'];

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleUsuarios.css">
    
    <title>Contatos </title>
</head>
<body>
<?php

require_once('header.html');


?>
    <main>

  
        <div id="consulta">
            <table id="tableConsulta" >
                <tr>
                    <td id="tableTitulo" colspan="5">
                        <h1> Consulta de Contatos</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Nome </td>
                    <td class="colunas"> Email</td>
                    <td class="colunas"> Celular </td>
                </tr>
            <?php
                $dadosListar = exibir();
                    while($exibirContatos = mysqli_fetch_assoc($dadosListar)){

                   
                ?>

                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$exibirContatos['nome']?></td>
                    <td class="tblColunas registros"><?=$exibirContatos['email']?></td>
                    <td class="tblColunas registros"><?=$exibirContatos['celular']?></td>
                    
                    <td class="tblColunas registros">
                       
    
                       
                 
                    <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaContatos.php?id=<?=$exibirContatos['idContatos']?>"> 
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


