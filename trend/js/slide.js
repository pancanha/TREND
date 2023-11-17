//------------------------SLIDE--------------------------//
var radio = document.querySelector('.manual-btn');
var cont = 1;
var startX;  // Posição inicial do mouse no eixo X
var imagem = document.getElementById('carouselImage');
var intervalId;  // ID do intervalo para o setInterval

document.getElementById('radio1').checked = true;

// Adicionar eventos ao documento para mousedown, mousemove e mouseup
document.addEventListener('mousedown', function(event) {
    // Ao segurar o clique, armazenar a posição inicial
    startX = event.clientX;

    // Pausar o intervalo ao clicar e segurar a imagem
    clearInterval(intervalId);
});

document.addEventListener('mousemove', function(event) {
    // Verificar se o botão do mouse está pressionado
    if (event.buttons === 1) {
        // Determinar a direção do movimento do mouse
        var deltaX = event.clientX - startX;

        // Se o movimento for significativo, avançar para a próxima imagem
        if (Math.abs(deltaX) > 50) {
            proximaImg(deltaX > 0);
            startX = event.clientX;  // Atualizar a posição inicial após avançar para a próxima imagem
        }
    }
});

function avancarAutomaticamente() {
    proximaImg(true);
}

// Iniciar o intervalo quando a página carregar
intervalId = setInterval(avancarAutomaticamente, 10000);

document.addEventListener('mouseup', function() {
    // Ao soltar o clique, reiniciar a posição inicial
    startX = null;

    // Limpar o intervalo antes de configurar um novo
    clearInterval(intervalId);

    // Retomar o intervalo ao soltar a imagem
    intervalId = setInterval(avancarAutomaticamente, 10000);
});



function proximaImg(avancar) {
    // Se avancar for true, vá para a próxima imagem; caso contrário, vá para a imagem anterior
    if (avancar) {
        cont = cont === 1 ? 3 : cont - 1;
        
    } else {
        cont = cont === 3 ? 1 : cont + 1;
    }

    document.getElementById('radio' + cont).checked = true;
}

// Iniciar o intervalo quando a página carregar
intervalId = setInterval(function() {
    proximaImg(true);
}, 10000);
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