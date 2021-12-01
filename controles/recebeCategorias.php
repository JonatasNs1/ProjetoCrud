<?php


require_once('../configuracoes/config.php');

require_once(SRC .'bd/inserirCategoria.php');
require_once(SRC.'bd/update.php');




   $nome = (string) null;
   

   if(isset($_GET['id'])){ 
        $id = (int) $_GET['id'];
   }
  else{
      $id = (int) 0; 
  } 

   

   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
       
       $nome = $_POST['categoria'];
   
       
      
   if($nome == null)
   {
       echo ("<script> 
           alert('".vazia."');
           window.history.back();
       </script>");  
   }
      
   elseif(strlen($nome)>50)
       {
             echo ("<script> 
           alert('maximo de caracteres');
           window.history.back(); 
       </script>"); 
       }
       else{
         
           $categorias = array(
                 "categoria" => $nome,
                "id" =>$id
               
           );
           
       
           if(strtoupper($_GET['modo']) == 'SALVAR'){
               
          
           //chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente.
          if (inserir($categorias)) //tratamento para ver se os dados chegaram no banco
               echo ("
                   <script>
                       alert('". INSERIR ."');
                       window.location.href = '../indexCategorias.php';
                   </script>
                   " );
           else
               echo ("
                   <script>
                       alert('". ERRO ."');
                        window.history.back();
                   </script>
               ");
           }elseif(strtoupper($_GET['modo']) == 'ATUALIZAR')
           { 
               
               
               if(edita($categorias))
                    echo ("
                       <script>
                           alert('atualizado com sucesso');
                           window.location.href = '../indexCategorias.php';
                           </script>
                   " );
                   else
                       echo ("
                           <script>
                           alert('". ERRO ."');
                           window.history.back();
                           </script>
                       ");
               
           }
       }
   
       
   }









?>