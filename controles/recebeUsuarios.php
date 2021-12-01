<?php
   require_once('../configuracoes/config.php');

   require_once(SRCO .'bd/inserirUsuarios.php');
   require_once(SRCO.'bd/updateUsuarios.php');
   
   
   
   
      $nome = (string) null;
      $login = (string) null;
      $senha = (string) null;
   
      if(isset($_GET['id'])){ 
           $id = (int) $_GET['id'];
      }
     else{
         $id = (int) 0; 
     } 
   
      
   
      
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          
          $nome = $_POST['nome'];
          $login = $_POST['login'];
           $senha = md5($_POST['senha']);
        // $cript = sha1($senha.uniqid(time())); 

      
        
          
         
      if($nome == null || $login == null || $senha == null)
      {
          echo ("<script> 
              alert('".vazia."');
              window.history.back();
          </script>");  
      }
         
      elseif(strlen($nome)>100 || strlen($login)>100 || strlen($senha)>50)
          {
                echo ("<script> 
              alert('maximo de caracteres');
              window.history.back(); 
          </script>"); 
          }
          else{
            
              $usuarios = array(
                    "nome" => $nome,
                    "login" => $login,
                    "senha" => $senha,
                   "id" =>$id
                  
              );
              
          
              if(strtoupper($_GET['modo']) == 'SALVAR'){
                  
             
              //chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente.
             if (inserir($usuarios)) //tratamento para ver se os dados chegaram no banco
                  echo ("
                      <script>
                          alert('". INSERIR ."');
                          window.location.href = '../indexUsuarios.php';
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
                  
                  
                  if(edita($usuarios))
                       echo ("
                          <script>
                              alert('atualizado com sucesso');
                              window.location.href = '../indexUsuarios.php';
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