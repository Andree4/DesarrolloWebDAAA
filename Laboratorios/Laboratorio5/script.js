function listarBandeja(parametros) {
    var datos = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    if (parametros) {
        ajax.open("get", "BandejaEntrada.php?" + parametros, true);
    }
    else {
        ajax.open("get", "BandejaEntrada.php", true);
    }

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function CorreosEnviados(parametros) {
    var datos = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    if (parametros) {
        ajax.open("get", "CorreosEnviados.php?" + parametros, true);
    }
    else {
        ajax.open("get", "CorreosEnviados.php", true);
    }

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function CrearCorreo() {
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = `<h3 style="margin-left: 30px;">Redactar Mensaje</h3>
    <form action="javascript:Redactar()" method="post" id="Correonuevo">
      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" />
      <br />
      <label for="asunto">Asunto:</label>
      <input type="text" id="asunto" name="asunto" />
      <br />
      <label for="mensaje">Mensaje:</label><br />
      <input id="mensaje" name="mensaje" ></input>
      <br />
      <input type="submit" value="Enviar" />
    </form>`;

}
function Redactar() {
    var formulario = document.getElementById("Correonuevo");
    var parametros = new FormData(formulario);

    fetch("Redactar.php",
        {
            method: "POST",
            body: parametros
        }
    )
        .then(response => response.text())
        .then(data => CorreosEnviados());
}
function MostrarMensaje(id) {
    var parametros = new FormData();
    parametros.append('id', id);

    fetch("Mensaje.php",
        {
            method: "POST",
            body: parametros
        }
    )
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        });
}


