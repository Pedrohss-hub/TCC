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


// carrossel
var radio = document.querySelector(".manual-btn");
var cont = 1;

document.getElementById("radio1").checked = true;

// define o tempo em que cada imagem aparecerá
setInterval(() => {
    proximaImg();
}, 3000);


// função para passar de imagem
function proximaImg(){
    
    // contador de imagem ganha mais um número assim que troca de imagem
    cont++;
    
    // qnd o contador chegar a ultima imagem, ele volta para a primeira
    if(cont > 4){
        cont = 1;
    }

    document.getElementById("radio" +cont).checked = true;
};