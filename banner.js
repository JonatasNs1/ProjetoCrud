// primeiro passo, criaar uma coonstante

// const imgs = document.getElementById("img");
// const img = document.querySelectorAll("#img img");

// let idx = 0;

// function carrossel(){
//     idx++;

//     if(idx > img.length - 1){
//         idx=0;
//     }

// imgs.style.transform = `translateX(${-idx * 500}px)`;

// }
// setInterval(carrossel,1000);

let fotos = ["banner1.jpg", "banner2.jpg", "banner3.jpg"];




function trocarFotos(foto){
    document.querySelector(".imagem").src = "img/" + fotos[foto];
}

let fotoAtual = 0;
trocarFotos(fotoAtual);

setInterval(function(){
    fotoAtual ++;
    if(fotoAtual > 2){
        fotoAtual = 0;
    }

    trocarFotos(fotoAtual);
},3000);