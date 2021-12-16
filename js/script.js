"use strict"


const limparElementos = (elemento) =>{ // 12 passo - criar uma funcao para limpar
    while(elemento.firstChild){ // equanto tiver o primeiro elemento remove o ultimo, limpa toda div container para garregar denovo a div
        elemento.removeChild(elemento.lastChild);
    }

}


const pesquisar =async(evento) =>{
    if(evento.key == 'Enter' || evento.type == 'click'){
        const pesquisa = document.getElementById('btnPesquisar').value;
       
        // console.log(pesquisa);
        const url = `http://localhost/admin/api/produtos`;
        console.log(url);
        const dados = await fetch(url); 
        // console.log(dados);
        const pesquisar = await dados.json();


        limparElementos(document.querySelector('#produtos'));
        //  console.log(pesquisar);
         carregarGaleria(pesquisar.hits); 
        
        
    }
    

}



// carregarImagem = () =>{
//         // const imagemPesquisa = document.getElementById("imagemPesquisa");
//         const galeria = document.querySelector('#produtos');

//         const novoDiv = document.createElement("div")
//         novoDiv.classList.add("ss") 
//         novoDiv.innerHTML = 
//         ` 
//         <div class="cards">
//         <div class="imgCard">
//             <img src="${foto}" class="imagemCards">
//        </div>
//     <div class="nomeProduto">
        
//         <h3>${nome}</h3>
//         <div class="separacao"></div>
//      </div>
//        <div class="sobreProduto">
//            ${descricao}
//        </div>
//        <div class="botaosm">
//            <input class="botaoSaibaMais"type="submit" value="Saiba Mais" name="btnSaibaMais">
//               <div class="preco">
//                   ${valor}
//             </div>
//        </div>
    
//     </div>
//     `
//          galeria.appendChild(novoDiv)
        
//     }

const carregarGaleria = (imagens) => imagens.forEach(carregarImagem)




document.getElementById('btnPesquisar').addEventListener('keypress', pesquisar);
