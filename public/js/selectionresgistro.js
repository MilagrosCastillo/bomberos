let formulario = document.forms['form-registro'];

let casado = formulario.edoci;

casado.onchange = function(){
    let optionValue = this.value;
    alert(optionValue);
}


// funcion de Discapacidad

let espdisca = document.getElementById('espdisca');
let inputDisc = document.getElementById('s')
let inputDiscn = document.getElementById('n')

inputDisc.onchange = () => {
    espdisca.style.display='block';
}
inputDiscn.onchange = () => {
    espdisca.style.display='none';
}


