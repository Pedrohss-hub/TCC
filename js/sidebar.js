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