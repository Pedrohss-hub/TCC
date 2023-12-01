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

// sidebar
var menuItem = document.querySelectorAll('.item-menu');

// deixa selecionado o item que eu cliquei na sidebar
function selectLink() {
    menuItem.forEach((item) =>
        item.classList.remove('ativo')
    );
    this.classList.add('ativo');
};

menuItem.forEach((item) =>
    item.addEventListener('click', selectLink)
);

//icone para abrir a sidebar

var btnExp1 = document.querySelector('#btn-exp1');
var btnExp = document.querySelector('#btn-exp');
var menuSide = document.querySelector('.menu-lateral');

btnExp1.addEventListener('click', function () {
    menuSide.classList.toggle('expandir')
})

btnExp.addEventListener('click', function () {
    menuSide.classList.toggle('expandir')
})

function goHome(){
    window.location = 'index.html';
}