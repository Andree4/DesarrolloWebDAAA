//Pregunta 1
var cont = 0;
function pregunta1() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 1";

    var contador = document.getElementById("contador");
    cont++;
    contador.innerHTML = cont;

}

function cambiarcolorfondo() {
    var idfondo = document.getElementById("seleccionpie").value;

    var colorf = document.getElementById("colorfondo").value;

    var Fondo = document.getElementById(idfondo);
    Fondo.style = `background-color: ${colorf};`

}

//Pregunta 2
function pregunta2() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 2";
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = ""

    var ajax = new XMLHttpRequest();
    ajax.onload = function () {
        document.getElementById("sub-menu").innerHTML = this.responseText;
    };

    ajax.open("GET", "pregunta2.html", true);
    ajax.send();
}

function operaciones(id) {
    var cantop = document.getElementById("cantop").value;
    var operaciones = document.getElementById("contenido");
    var i = 1;
    var j = 1;
    switch (id) {
        case 1:
            operaciones.innerHTML = ""
            for (i; i <= cantop; i++) {
                var p = document.createElement("p");
                operacion = `<p>${j} + ${i} = <input type="number" id="resultado${i}" /></p><br>`
                p.innerHTML = operacion;
                operaciones.appendChild(p);
            }
            operaciones.innerHTML += '<button onclick="calcular(1)"> Calcular </button> '
            break;
        case 2:
            operaciones.innerHTML = ""
            for (i; i <= cantop; i++) {
                var p = document.createElement("p");
                operacion = `<p>${j} - ${i} = <input type="number" id="resultado${i}" /></p><br>`
                p.innerHTML = operacion;
                operaciones.appendChild(p);
            }
            operaciones.innerHTML += '<button onclick="calcular(2)"> Calcular </button> '
            break;
        case 3:
            operaciones.innerHTML = ""
            for (i; i <= cantop; i++) {
                var p = document.createElement("p");
                operacion = `<p>${j} * ${i} = <input type="number" id="resultado${i}" /></p><br>`
                p.innerHTML = operacion;
                operaciones.appendChild(p);
            }
            operaciones.innerHTML += '<button onclick="calcular(3)"> Calcular </button> '
            break;
        case 4:
            operaciones.innerHTML = ""
            for (i; i <= cantop; i++) {
                var p = document.createElement("p");
                operacion = `<p>${j} / ${i} = <input type="number" id="resultado${i}" /></p><br>`
                p.innerHTML = operacion;
                operaciones.appendChild(p);
            }
            operaciones.innerHTML += '<button onclick="calcular(4)"> Calcular </button> '
            break;
    }
}

function calcular(id) {
    console.log("hola")
    var cantop = document.getElementById("cantop").value;
    var i = 1;
    var j = 1;
    var rcorrecto;
    switch (id) {
        case 1:
            for (i; i <= cantop; i++) {
                var resultado = document.getElementById(`resultado${i}`).value;
                var result = document.getElementById(`resultado${i}`);
                rcorrecto = j + i;
                if (resultado == rcorrecto) {
                    result.style = "background-color: green"
                } else {
                    result.style = "background-color: red"
                }
            }
            break;
        case 2:
            for (i; i <= cantop; i++) {
                var resultado = document.getElementById(`resultado${i}`).value;
                var result = document.getElementById(`resultado${i}`);
                rcorrecto = j - i;
                if (resultado == rcorrecto) {
                    result.style = "background-color: green"
                } else {
                    result.style = "background-color: red"
                }
            }
            break;
        case 3:
            for (i; i <= cantop; i++) {
                var resultado = document.getElementById(`resultado${i}`).value;
                var result = document.getElementById(`resultado${i}`);
                rcorrecto = j * i;
                if (resultado == rcorrecto) {
                    result.style = "background-color: green"
                } else {
                    result.style = "background-color: red"
                }
            }
            break;
        case 4:
            for (i; i <= cantop; i++) {
                var resultado = document.getElementById(`resultado${i}`).value;
                var result = document.getElementById(`resultado${i}`);
                rcorrecto = j / i;
                if (resultado == rcorrecto) {
                    result.style = "background-color: green"
                } else {
                    result.style = "background-color: red"
                }
            }
            break;
    }
}


//Pregunta3
function pregunta3() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 3";
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = ""
}

//Pregunta4
function pregunta4() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 4";
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = ""
    var submenu = document.getElementById("sub-menu");
    submenu.innerHTML = `<form action="javascript:mostraralumnos()" method="post" id="formMaterias">
      <select style="padding: 10px"name="Materia" id="Materia">
        <option value="SIS256">SIS256</option>
        <option value="SIS258">SIS258</option>
        <option value="SIS406">SIS406</option>
        <br>
        <input style="padding: 10px" type="submit" value="Mostrar" />
      </select>
    </form>`
}

function mostraralumnos() {
    var datos = document.getElementById("contenido");
    var formulario = document.getElementById("formMaterias");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest()

    ajax.open("post", "Pregunta4.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.send(parametros);
}

//Pregunta5
function pregunta5() {
    var pregunta = document.getElementById("titulo");
    pregunta.innerHTML = "Pregunta 5";
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = ""
    var ajax = new XMLHttpRequest();
    ajax.onload = function () {
        document.getElementById("sub-menu").innerHTML = this.responseText;
    };

    ajax.open("GET", "Pregunta5.html", true);
    ajax.send();

    var ajax = new XMLHttpRequest();
    ajax.onload = function () {
        document.getElementById("contenido").innerHTML = this.responseText;
    };

    ajax.open("GET", "login.html", true);
    ajax.send();
}

function llenar(num) {
    let content = document.getElementById(`${num}`).value;
    console.log(content)
    var password = document.getElementById("password")
    password.value += content;
}
function limpiar() {
    var password = document.getElementById("password")
    password.value = "";
}
function autenticar() {
    var datos = document.getElementById("contenido");
    var formulario = document.getElementById("formaut");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest()

    ajax.open("post", "autenticar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.send(parametros);
}


