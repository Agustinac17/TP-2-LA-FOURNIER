////////////////////  EJERCICIO DOS  ///////////////////////

/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(presionBoton)
}

function presionBoton() {
  alert("Se presionó el párrafo UNO");
}
(inicializarEventos);

function inicializarEventos2() {
  let x = $("#boton2");
  x.click(presionBoton2)
}

function presionBoton2() {
  alert("Se presionó el párrafo DOS");
}*/

//////////////////////  EJERCICIO TRES  /////////////////////////////
/*
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#1");
  x.click(presionTitulo1)
  x = $("#2");
  x.click(presionTitulo2)
  x = $("#3");
  x.click(presionTitulo3)
}

function presionTitulo1() {
  let x = $("#1");
  x.css("color", "#ff0000");
  x.css("background-color", "#ffff00");
  x.css("font-family", "Courier");
}

function presionTitulo2() {
  let x = $("#2");
  x.css("color", "#ffff00");
  x.css("background-color", "#ff0000");
  x.css("font-family", "Arial");
}

function presionTitulo3() {
  let x = $("#3");
  x.css("color", "#ffff00");
  x.css("background-color", "#fgho0");
  x.css("font-family", "Arial");
}*/

//////////////////// EJERCICIO 4 ///////////////////
/*
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("li");
  x.click(presionFila);
}

function presionFila() {
  let x = $(this);
  x.hide();
}*/

///////////////////// EJERCICIO 5 /////////////////////
/*
let x = $(document);
x.ready(inicializarEventos);
let y = $(document);
y.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("1");
  x.click(presionFila);
  let y = $("2");
  y.click(presionFila);
}

function presionFila() {
  let x = $(this);
  x.hide();
  let y = $(this);
  y.hide();
}*/

//////////////////////// EJERCICIO SEIS //////////////////////////





//////////////////////// EJERCICIO SIETE //////////////////////////

/*FALTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA FALTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/


//////////////////////// EJERCICIO OCHO //////////////////////////




//////////////////////// EJERCICIO NUEVE //////////////////////////




//////////////////////// EJERCICIO DIEZ //////////////////////////
/*
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(presionBoton1);
  x = $("#boton2");
  x.click(presionBoton2);
}

function presionBoton1() {
  let x = $("body");
  alert(x.html());
}

function presionBoton2() {
  let x = $("head");
  alert(x.html());
}
*/
//////////////////////// EJERCICIO ONCE //////////////////////////
/*
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("p");
  x.click(presionFila);
  let y = $("#tabla2 p");
  y.click(presionFila);
}

function presionFila() {
  let x = $(this);
  x.hide();
  let y = $(this);
  y.hide();
}*/


//////////////////////// EJERCICIO DOCE //////////////////////////
/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("tr");
  let y = $("td");
  x.mouseover(entraMouse);
  x.mouseout(saleMouse);
  y.mouseover(entraMouse);
  y.mouseout(saleMouse);
}

function entraMouse() {
  $(this).css("background-color", "#ff0");
}

function saleMouse() {
  $(this).css("background-color", "#fff");
}*/


//////////////////////// EJERCICIO TRECE //////////////////////////
/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("tr");
  let y = $("td");
  x.hover(entraMouse, saleMouse);
  y.hover(entraMouse, saleMouse);
}

function entraMouse() {
  $(this).css("background-color", "#ff0");
}

function saleMouse() {
  $(this).css("background-color", "#fff");
}
*/


//////////////////////// EJERCICIO CATORCE //////////////////////////
/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("div");
  x.mousemove(moverMouse);
  x.mouseleave(saleMouse); 
}

function moverMouse(event) {
  let x = $("#corx");
  x.text("coordenada x=" + event.clientX);
  x = $("#cory");
  x.text("coordenada y=" + event.clientY);
}

function saleMouse() {
  alert("AFUERAAAAAAAAAAAAAA");
}
*/
//////////////////////// EJERCICIO QUINCE //////////////////////////
/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("input");
  x.mousedown(presionaMouse);
  x.mouseup(sueltaMouse);
}

function presionaMouse() {
  $("html").css("background-color", "#ff0");
}

function sueltaMouse() {
  $("html").css("background-color", "#fff");
}*/
/* OTRA OPCION CON <button></button>
let x = $("#boton1");
let y = $("#boton2");
x.mousedown(presionaMouse);
x.mouseup(sueltaMouse);
y.mousedown(presionaMouse);
y.mouseup(sueltaMouse);
*/
//////////////////////// EJERCICIO 16 //////////////////////////
/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("div");
  x.dblclick(dobleClic);
  x.mouseout(dobledobleClic)
}

function dobleClic() {
  let x = $(this);
  x.addClass("cambio")
}

function dobledobleClic() {
  let x =$(this)
  x.removeClass("cambio")
}
*/
//////////////////////// EJERCICIO 17 //////////////////////////
l/*et x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let inputs = $("input[type='text']");
  inputs.focus(tomaFoco);
  inputs.blur(pierdeFoco);
}

function tomaFoco() {
  let x = $(this);
  x.css("color", "red"); 
}

function pierdeFoco() {
  let x = $(this);
  x.css("color", "blue"); 
}
*/

//////////////////////// EJERCICIO 18 //////////////////////////
/*let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
    let input = $("#campoTexto");  
    input.blur(pierdeFoco);  
}

function pierdeFoco() {
    let x = $(this);  
    let cadena = x.val();  

    if (cadena.length === 0) {
        alert("No ingresó datos"); 
    }
}
*/
//////////////////////// EJERCICIO 19 //////////////////////////




//////////////////////// EJERCICIO 20 //////////////////////////




//////////////////////// EJERCICIO 21 //////////////////////////




//////////////////////// EJERCICIO 22 //////////////////////////




//////////////////////// EJERCICIO 23 //////////////////////////




//////////////////////// EJERCICIO 24 //////////////////////////




//////////////////////// EJERCICIO 25 //////////////////////////