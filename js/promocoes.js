// SCROLLAR OS RESTAURANTES COM OS BOTÕES

// PEGANDO MINHA DIV DOS RESTAURANTES
const flexRestaurantes = document.querySelector(".flex-restaurantes");

// CRIANDO A FUNÇÃO PARA MOVER PARA ESQUERDA
const handleLeftClick = (e) => {
    let tamParaRolar = flexRestaurantes.offsetWidth - 800;
    flexRestaurantes.scrollLeft -= tamParaRolar;
};

// CRIANDO A FUNÇÃO PARA MOVER PARA DIREITA
const handleRightClick = (e) => {
    let tamParaRolar = flexRestaurantes.offsetWidth - 800;
    flexRestaurantes.scrollLeft += tamParaRolar;
};

// FUNÇÃO PARA LEVAR PARA A PAGINA INICIAL
function goHome(){
    window.location = 'index.html';
}