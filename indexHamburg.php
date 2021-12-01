<?php
   require_once('configuracoes/config.php');

   require_once('bd/conexaoContatos.php');
   conexaoMysql();
    


?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styleHamburg.css">
    <script src="banner.js" defer> </script>
    <title> Hamburgueria</title>
</head>

    <body>
        

        <header>
            <div class="conteudo">
                <div id="logo">
                <img src="img/logo.png" id="imgLogo">
                </div>

               <div id="menu">
                    <ul id="listaMenu">
                        <li><a href="#aEmpresa"> Empresa</a></li>
                        <li><a href="#loja">Lojas </a> </li>
                         <li><a href="#promocoes">Promoções</a>  </li>
                         <li> <a href="#destaques">Destaques </a></li>
                         <li><a href="#tituloContato">Contatos</a> </li>
                   </ul>
                
                </div>
                
                <div id="redesSociais">
                    <div class="itemSociais"><img src="img/insta.png" class="imgSociais"> </div>
                     <div class="itemSociais">
                         <img src="img/face.png" class="imgSociais">
                    </div>
                     <div class="itemSociais"> 
                         <img src="img/twitter.png" class="imgSociais">
                    </div>
                </div>
            
                
               
            </div>
        </header>
        
        <div class="banner">
            <img src="img/banner1.jpg" class="imagem">
       </div>

        
        <div id="caixas">
            <div class="conteudoMenu">
                
                
                <div id="menuHam">
                    <input type="checkbox" id="chec">
                <label id="lblHamburg" for="chec">
                    
                    <img src="img/menu.png" id="imgHamburg"> 
                
                </label>
                
                    <nav id="menuhamburg">
                        <ul id="ulHamburg">
                            <li><a class="linkMenu" href="">Home </a> </li>
                             <li><a class="linkMenu" href="">Home </a></li>
                             <li><a class="linkMenu" href="">Home </a></li>
                             <li> <a  class="linkMenu"href="">Home </a></li>
                        
                        </ul>
                    
                    </nav>
                </div>
                <div id="pi">
                     <label><span>Pesquisar: </span></label>
                    <input type="text" id="pesquisa" placeholder="Faça uma pesquisa" name="pesquisa">
                      
                <input type="submit" id="btnPesquisar" value="Pesquisar" name="btnPesquisar">
                </div>
             
            </div>
        
        </div>
        
       
        <div id="produtos">

           <div class="cards">
                <div class="imgCard">
                    <img src="img/oraculo.png" class="imagemCards">
               </div>
            <div class="nomeProduto">
                
                <h3>Oráculo</h3>
                <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"> Desenvolvido pela Tradi, hambúrguer da casa, coberto por fusão cremosa de queijo cheddar inglês com pepperoni moído, servido em pão de hambúrguer artesanal branco.</p>
               </div>
               <div class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                      <div class="preco">
                          R$:0,00
                    </div>
               </div>
            
            </div>
            
             <div class="cards">
                <div class="imgCard">
                  <img src="img/vilaNova.png" class="imagemCards">
                 
                 </div>
            <div class="nomeProduto">
                <h3> Vila Nova</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"> Hambúrguer da casa de 180 g, queijo cheddar inglês coberto por anéis de cebola empanadas, duas fatias de bacon caramelizado, molho barbecue da casa servido no pão brioche artesanal fabricado na casa.</p>
                    
               </div>
               <div class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                    <div class="preco">
                        R$:0,00
                    </div>
               </div>
              
            </div>
            
             <div class="cards">
                <div class="imgCard">
                     <img src="img/ipiranga.png" class="imagemCards">
                 </div>
            <div class="nomeProduto">
                <h3> Ipiranga</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo">Este é o clássico Cheese-salada com molho de tomate. Hambúrguer de 100 g bem passado, coberto por molho de tomate “Ouviram do Ipiranga às margens plácidas”, alface, queijo prato, maionese caseira, servido no pão de hambúrguer branco tradicional prensado e quentinho. </p>
                 
               </div>
               <div  class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                    <div class="preco">
                        R$:0,00
                    </div>
               </div>
              
            </div>
            
            <div class="cards">
                <div class="imgCard">
                 <img src="img/faixaAzul.png" class="imagemCards">
                </div>
            <div class="nomeProduto">
                <h3> Faixa Azul</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"> Hamburguer da casa, coberto por fusão cremosa de American Cheese e Gorgonzola, farofa de bacon e pimenta jalapeño, servido no pão branco artesanal.</p>
               </div>
               <div  class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                     
                    <div class="preco">
                            R$:0,00
                   </div>
               </div>
             
            </div>
            
            <div class="cards">
                <div class="imgCard">
                 <img src="img/CHEESEBURGER.jpg" class="imagemCards">
                </div>
            <div class="nomeProduto">
                <h3>  Cheese burguers</h3>
                    
                     <div class="separacao"></div>
               
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"> Hambúrguer da casa, queijo prato, servido no pão de hambúrguer artesanal branco.</p>
               </div>
               <div  class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                    <div class="preco">
                            R$:0,00
                   </div>
               </div>
              
            </div>
            
            <div class="cards">
                <div class="imgCard">
                     <img src="img/costaOeste.png" class="imagemCards">
                </div>
            <div class="nomeProduto">
                <h3> Costa Oeste</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"> O famoso Cheese Salada da Costa Oeste norte- americana. Hambúrguer da casa, tomate, cebola roxa, alface, queijo prato, maionese verde, servido no pão brioche artesanal.</p>
               </div>
               <div  class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                    <div class="preco">
                            R$:0,00
                   </div>
               </div>
              
            </div>
            
            
          
       
        
           
        </div>
        
        
            <div id="aEmpresa"> <!-- seção da empresa -->
            <section class="conteudo">
                <h1> Empresa</h1>
                <div class="imagemEmpresa">
                     <img src="img/empresa.jpg" class="imgEmpresa">
                </div>
              
                <div id="separacaoEmpresa">
                    
                </div>
                <div id="tituloEmpresa">
                    <h2> História, dedicação, carinho e, em alguns casos, um toque de fofura também!</h2>
                
                </div>
                <div id="textoEmpresa">
                    <p> Muita chapa esquentou desde o século XVII, quando os primeiros imigrantes alemães da região de Hamburgo chegaram aos Estados Unidos trazendo com eles a receita do “bife de carne moída” (que logo recebeu o nome de hamburg style steak), passando pelos norte-americanos que começaram a colocar o bife grelhado no meio do pão, até chegar a 2019, quando nos tornamos Mais Burguinho.</p>
                    <p>A gente explica! A primeira parte do texto acima é a história do hamburguer, um prato pelo qual nos apaixonamos lá atrás. E a parte de 2.019 é um pedaço da nossa história, que na verdade começa antes, quando compramos uma unidade junto a uma hamburgueria tradicional de São Paulo. </p>
                </div>
           
            </section> 
          
        </div>
      
        
       
        <div id="promocoes">
           <section class="conteudo">
               <h1> Promoções</h1>
               
              <div class="cards">
                <div class="imgCard">
                  <img src="img/vilaNova.png" class="imagemCards">
                 
                 </div>
            <div class="nomeProduto">
                <h3> Vila Nova</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"v> Hambúrguer da casa de 180 g, queijo cheddar inglês coberto por anéis de cebola empanadas, duas fatias de bacon caramelizado, molho barbecue da casa servido no pão brioche artesanal fabricado na casa.</p>
                  
               </div>
               <div class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                   <div class="numero">
                        R$:0,00
                   </div>
                    
               </div>
                <div class="precoProduto">
                        R$:0,00
                    </div>
            </div>
               
                <div class="cards">
                <div class="imgCard">
                     <img src="img/ipiranga.png" class="imagemCards">
                 </div>
            <div class="nomeProduto">
                <h3> Ipiranga</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo">Este é o clássico Cheese-salada com molho de tomate. Hambúrguer de 100 g bem passado, coberto por molho de tomate “Ouviram do Ipiranga às margens plácidas”, alface, queijo prato, maionese caseira, servido no pão de hambúrguer branco tradicional prensado e quentinho. </p>
                 
               </div>
               <div  class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                   <div class="numero">
                       R$:0,00
                   </div>
                   
               </div>
                     <div class="precoProduto">
                          R$:0,00
                    </div>
              
            </div>
               
            <div class="cards">
                <div class="imgCard">
                 <img src="img/faixaAzul.png" class="imagemCards">
                </div>
            <div class="nomeProduto">
                <h3> Faixa Azul</h3>
                 <div class="separacao"></div>
             </div>
               <div class="sobreProduto">
                   <p class="paragrafo"> Hamburguer da casa, coberto por fusão cremosa de American Cheese e Gorgonzola, farofa de bacon e pimenta jalapeño, servido no pão branco artesanal.</p>
               </div>
               <div  class="botaosm">
                   <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
                     <div class="numero">
                          R$:0,00
                   </div>
                  
               </div>
                     <div class="precoProduto">
                            R$:0,00
                   </div>
             
            </div>
               
                
 
  
               
            
               
            </section>
        </div>
        
    <div id="destaques">
        <section class="conteudo">
        <h1> Destaques</h1>
            
            <div class="destaqueLoja">
                  <img src="img/costaOeste.png" class="imagemDestaque">
            </div>
            <div class="destaqueLoja">
                <img src="img/oraculo.png" class="imagemDestaque">
            </div>
            <div class="destaqueLoja">
                <img src="img/faixaAzul.png" class="imagemDestaque">
            </div>
            <div class="destaqueLoja">
                  <img src="img/vilaNova.png" class="imagemDestaque">
            </div>
            
            
        </section>
    </div>
        
        <div id="loja">
            <section class="conteudo">
                
                <div class="tituloLoja"> 
                    <h1 class="tituloUnidade"> Nossas Lojas</h1> 
                    
                    
                    <div class="unidade">
                        <div class="subtitulo">
                            <h3 class="unidades"> Unidade Jandira</h3>
                        </div>
                        <div class="imagemLoja">
                            <img src="img/localJandira.jpg" id="imgLoja">
                        </div>
                        <div class="localizacao">
                            <p>Endereço: Rua Dr. Penaforte Mendes, 208, 01308-010 São Paulo</p>
                            <p>Telefone: (11) 3754-9854</p>
                        </div>
                        
                        <div class="subtituloBarueri">
                            <h3 class="unidades"> Unidade Barueri</h3>
                        </div>
                          <div class="imagemLoja">
                            <img src="img/localBarueri.jpg" id="imgLoja">
                        </div>
                        
                        <div class="localizacao">
                        <p>     Endereço: Rua Bela Cintra, 1541 – Cerqueira César, São Paulo – SP</p>

                         <p>  Telefone: (11) 3064-9161</p> 
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
                
                
                
                <div id="tituloContato">
                    <h1 class="tituloUnidadeContato">Entre em Contato</h1>
                    

                   <form action="controles/recebeContatos.php" method= "post"> 
                       
                   <div class="contato">
                        <div class="dados">
                              <label class="edit"> Nome:</label>
                              <input type="text" name="nome" maxlength="100" placeholder="Digite seu Nome" class="edicao">
                        </div>
                        
                        <div class="dados">
                              <label class="edit"> Email:</label>
                              <input type="email" name="email" maxlength="100" class="edicao" placeholder="Digite seu email">
                        </div>
                        
                         <div class="dados">
                              <label class="edit"> Celular:</label>
                              <input type="tel" name="celular" maxlength="18" class="edicaoCelular" placeholder="Digite seu celular">
                        </div>
                   
                          <div id="botaoSalvarContato">
                               <input class="botaoSaibaMais"type="submit" value="Salvar" name="btnSalvar">
                        </div>
                   
                    </div>
                
                
                
                    </form>


                    
                  
                    
                </div>
                
            
            </section>
          
        </div>
        
        <footer>
            
        </footer>
        
    
    </body>

</html>
