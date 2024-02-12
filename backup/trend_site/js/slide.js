//------------------------SLIDE--------------------------//
var radio = document.querySelector('.manual-btn')
var cont = 1

document.getElementById('radio1').checked = true

setInterval(() => {
    proximaImg()
}, 12000)

function proximaImg(){
    cont++

    if(cont > 3){
        cont = 1 
    }

    document.getElementById('radio'+cont).checked = true
}
//-------------------------- MENU HAMBURGUER-----------------//

function mudouTamanho() {
    if(window.innerWidth >= 768) {
        itens.style.display = 'block'
    } else {
        itens.style.display = 'none'
    }
}
function clickMenu(){
   if (itens.style.display == 'block') {
    itens.style.display = 'none'
   } else {
    itens.style.display = 'block'
   }
}

//------------------------------BOTÃO QUE SOBE---------------------------//

 // Função para verificar a posição de rolagem e exibir/ocultar o botão
 window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var scrollTopBtn = document.getElementById("scrollTopBtn");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
}

// Função para rolar suavemente para o topo
function scrollToTop() {
    document.body.scrollTop = 0; // Para navegadores da web
    document.documentElement.scrollTop = 0; // Para IE/Edge
}