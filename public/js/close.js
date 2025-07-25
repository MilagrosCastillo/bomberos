const boton = document.querySelector('#close');
const clase = document.querySelector('.menu-secttion');
const ope = document.querySelector('.hamburg');

boton.addEventListener('click', () => {
    clase.style.display = "none";
});

ope.addEventListener('click', () => {
    clase.style.display = "block";
})
