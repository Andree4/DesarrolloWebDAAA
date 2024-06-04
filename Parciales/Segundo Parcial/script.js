//PREGUNTA1
function pregunta1() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 1";

    var contenido = document.getElementById("contenido")
    contenido.innerHTML = ""
    fetch('datos.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('sub-menu').innerHTML = data;
        })
}

function tabla() {

    var filas = document.getElementById('filas').value;
    var columnas = document.getElementById('columnas').value;
    var contenido = document.getElementById('contenido');

    var tabla = '<table border="1">';
    for (var f = 0; f < filas; f++) {
        tabla += '<tr>';
        for (var c = 0; c < columnas; c++) {
            tabla += '<td onclick="Input(this)"></td>';
        }
        tabla += '</tr>';
    }
    tabla += '</table>';

    contenido.innerHTML = tabla;

}

function Input(celda) {
    var input = document.createElement('input');
    input.type = 'text';
    input.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            celda.innerHTML = input.value;
        }
    });
    celda.appendChild(input);
}

//PREGUNTA2
function pregunta2() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 2";

    var parrafos = document.getElementById("contenido")
    parrafos.innerHTML = ""

    var menu = document.getElementById("sub-menu")
    menu.innerHTML = `<label for="">Texto</label>
    <input type="text" id="textop2"  />
    <label for="">Color Fondo</label>
    <input type="text" id="colorfondo" />
    <label for="">Color</label>
    <input type="text" id="colortexto" />
    <input type="submit" value="crear" onclick="colores()"/>`

}

function colores() {
    var colorf = document.getElementById("colorfondo").value
    var colort = document.getElementById("colortexto").value
    var texto = document.getElementById("textop2").value
    var parrafos = document.getElementById("contenido")
    var p = document.createElement("p");
    p.innerHTML = texto;
    p.style.padding = "20px"
    p.style.textAlign = "center"
    p.style.backgroundColor = colorf;
    p.style.color = colort;
    parrafos.appendChild(p);
}

//PREGUNTA3
function pregunta3() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 3";

    var parrafos = document.getElementById("contenido")
    parrafos.innerHTML = ""

    var ajax = new XMLHttpRequest();
    ajax.onload = function () {
        document.getElementById("sub-menu").innerHTML = this.responseText;
    };

    ajax.open("GET", "galeria.php", true);
    ajax.send();

}
function mostrardatos() {

}
//PREGUNTA4
function pregunta4() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 4";

    var parrafos = document.getElementById("contenido")
    parrafos.innerHTML = ""

    var menu = document.getElementById("sub-menu")
    menu.innerHTML = `<button onclick="listar()">Listar</button>
    <br>
    <button onclick="cargar('formulario.html')">Insertar</button>`
}

function listar(parametros) {
    var datos = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    if (parametros) {
        ajax.open("get", "read.php?" + parametros, true);
    }
    else {
        ajax.open("get", "read.php", true);
    }

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargar(url) {
    var datos = document.getElementById('contenido');
    fetch(url)
        .then(response => response.text())
        .then(data => datos.innerHTML = data);

}

function crearPersona() {
    var datos = document.getElementById('contenido');
    var formulario = document.getElementById("datos-libro");
    var parametros = new FormData(formulario);

    fetch("insertar.php",
        {
            method: "POST",
            datos: parametros
        }
    )
        .then(response => response.text())
        .then(data => listar());

}

//PREGUNTA5
function pregunta5() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 5";

    var contenido = document.getElementById("contenido")
    contenido.innerHTML = ""


    var menu = document.getElementById("sub-menu")
    menu.innerHTML = `<form action="javascript:cambiarcalendario()" method="get" id="calendario" onchange=cambiarcalendario()>
    <select name="mes" id="mes">
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>
    <br>
    <input type="number" name="anio" id="anio" />
  </form>`

}

function cambiarcalendario() {
    var datos = document.getElementById('contenido');
    var formulario = document.getElementById("calendario");
    var parametros = new FormData(formulario);

    fetch("calendario.php",
        {
            method: "get",
            datos: parametros
        }
    )
        .then(response => response.text())
        .then(data => datos.innerHTML = data);
}
