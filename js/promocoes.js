// SCROLLAR OS RESTAURANTES COM OS BOTÕES

// PEGANDO MINHA DIV DOS RESTAURANTES
const flexRestaurantes = document.querySelector(".flex-restaurantes");

// CRIANDO A FUNÇÃO PARA MOVER PARA ESQUERDA
const handleLeftClick = (e) => {
    flexRestaurantes.scrollLeft -= flexRestaurantes.offsetWidth;
};

// CRIANDO A FUNÇÃO PARA MOVER PARA DIREITA
const handleRightClick = (e) => {
    flexRestaurantes.scrollLeft += flexRestaurantes.offsetWidth;
};