// function darkMode() {
//  	var element = document.body;
//  	element.classList.toggle("light-mode");
// }

function darkMode() { 
   var cuerpo = document.body;
   var darkmode = cuerpo.classList.toggle('light-mode');
   localStorage.setItem('light-mode', darkmode);
}

document.addEventListener('DOMContentLoaded', function() {
   if (localStorage.getItem('light-mode') === 'true') {
     darkMode();
  } 
});
document.removeEventListener('DOMContentLoaded', function() {
   if (localStorage.getItem('light-mode') === 'false') {
     darkMode();
  } 
});



// function darkMode() { 
//    var cuerpo = document.body;
//    var darkmode = cuerpo.classList.toggle('light-mode');
//    localStorage.setItem('light-mode', darkmode);
// }

// document.addEventListener('DOMContentLoaded', function() {
//    if (localStorage.getItem('body')) {
//      darkMode();
//   } 
// });











// const btnOscuro = document.querySelector('.oscuro');

// btnOscuro.addEventListener('click', () => {
// 	document.body.classList.toggle('light-mode');
     
// 	if(document.body.classList.contains('light-mode')){
// 		localStorage.setItem('light-mode', 'true');
// 	} else {
// 		localStorage.setItem('light-mode', 'false');
// 	}
// });

// if(localStorage.getItem('light-mode') === 'true'){
// 	document.body.classList.add('light-mode');
// } else {
// 	document.body.classList.remove('light-mode');
// }






// Funcion que se carga cuando se carga el <body> de la Web 
// function loadColor() {
// 	var color = localStorage.getItem("colorvar");
// 	if (color === null) {
// 		document.body.classList.add("body");
// 	} else {
// 		if (color === "dark-mode") {
// 			document.body.classList.add("dark-mode");
// 		} else {
// 			document. body. classList.add("body");
// 		}
// 	}
// 	printValue();
// }
// // Funcion para cambiar el color al pulsar el boton
// function changeColor() {
// 	var color = localStorage.getItem("colorvar");
// 	if (color === "dark") {
// 		document.body.classList.remove("dark-mode");
// 		document.body.classList.add("body");
// 		localStorage.setItem("colorvar", "body");
// 	} else {
// 		document.body.classList.remove("body");
// 		document.body.classList.add("dark-mode");
// 		localStorage.setItem("colorvar", "dark-mode");
// 	}
// 	printValue();
// }
// // Funcion para mostrar el valor del color en un DIV y cambiar el texto del boton
// function printValue() {
// 	var color = localStorage.getItem("colorvar");
// 	document .getElementById("valorColor").innerHTML = "El valor de color es: " + "<strong>" + color + "</strong>";
// 	if (color === "dark"){
// 		document .getElementById("changeBtn").innerHTML = "Cambiar a modo " + "?";
// 	} else {
// 		document .getElementById("changeBtn").innerHTML = "Cambiar a modo " + "?";
// 	}
// }
