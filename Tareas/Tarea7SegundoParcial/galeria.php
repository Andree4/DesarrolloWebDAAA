<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Crear la conexión (se asume que la variable $conn se establece en conexion.php)
// Consulta para obtener los datos de la tabla libros
$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Generar los botones con las imágenes
    while ($row = $result->fetch_assoc()) {
        echo '<button onclick="mostrarImagen(\'' . $row['imagen'] . '\', \'' . $row['titulo'] . '\')">';
        echo '<img src="' . $row['imagen'] . '" width="50" height="75">';
        echo '</button>';
    }
} else {
    echo "No hay libros disponibles.";
}

// Cerrar la conexión
$con->close();
?>

<script>
    // Función para mostrar la imagen en tamaño original
    function mostrarImagen(imagen, nombre) {
        document.getElementById('principal').innerHTML = `<img src="${imagen}" style="display: block; margin: auto;">`;
        document.getElementById('mensaje').innerText = nombre;
    }
</script>