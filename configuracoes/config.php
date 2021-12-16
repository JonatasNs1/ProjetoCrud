<?php

const servidor = ('localhost');
const usuario = ('root');
const senha = ('bcd127');
const database =('dbCrud');



// define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/jonatas/admin/'); 
define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/admin/'); 

// define ('SRCH', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/jonatas/admin/');
define ('SRCH', $_SERVER['DOCUMENT_ROOT'].'/admin/');

define ('SRCP', $_SERVER['DOCUMENT_ROOT'].'/admin/');

const BD_MSG_EXCLUIR = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../indexCategorias.php';
</script>";
const vazia = ('Preencha todos os dados, pois tem campos obrigatórios');
const ERRO = "ERRO: Não foi possivel manipular os dados no Banco de dados!!!"; 

const INSERIR = "Registro salvo com sucesso do banco de dados!";
const MAX_CARACTERES = "Não foi possivel fazer o cadastro, coloque um nome abaixo de 100 caracteres";




// define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/usuarios/usuarios/'); 

// define ('SRCO', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/jonatas/admin/'); 
define ('SRCO', $_SERVER['DOCUMENT_ROOT'].'/admin'); 


const BD_MSG_EXCLUIR_USUARIOS = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../indexUsuarios.php';
</script>";

const BD_MSG_EXCLUIR_PRODUTOS = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../indexProdutos.php';
</script>";

const BD_MSG_EXCLUIR_CONTATOS = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../indexContatos.php';
</script>";


define( 'NOME_DIRETORIO_FILE', 'arquivos/');
$extensoesPermitidasFile = array ("image/png", "image/jpg"," image/jpeg");
define('EXTENSOES_PERMITIDAS', $extensoesPermitidasFile);
const TAMANHO_FILE = "5120"; 






?>