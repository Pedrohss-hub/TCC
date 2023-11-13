// sidebar
var menuItem = document.querySelectorAll('.item-menu');

// deixa selecionado o item que eu cliquei na sidebar
function selectLink() {
    menuItem.forEach((item) =>
            item.classList.remove('ativo')
        );
        this.classList.add('ativo');
};

menuItem.forEach((item)=>
    item.addEventListener('click', selectLink)
);

//icone para abrir a sidebar

var btnExp = document.querySelector('#btn-exp');
var menuSide = document.querySelector('.menu-lateral');

btnExp.addEventListener('click', function(){
    menuSide.classList.toggle('expandir')
})


// carrossel
    const carousel = document.querySelector(".carrossel");
    let currentIndex = 0;

    function showImage(index) {
        const size = carousel.children.length;
        if (index < 0) {
            currentIndex = size - 1;
        } else if (index >= size) {
            currentIndex = 0;
        } else {
            currentIndex = index;
        }

        const newTransformValue = -currentIndex * 100 + "%";
        carousel.style.transform = `translateX(${newTransformValue})`;
    }

    setInterval(() => {
        currentIndex++;
        showImage(currentIndex);
    }, 3000); // Troca de imagem a cada 3 segundos, ajuste conforme necessário

