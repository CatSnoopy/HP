<?php
require("conexion.php");

// Verificar si se recibieron los datos del formulario
if (isset($_POST['titulo']) && isset($_POST['comentario']) && isset($_POST['usuario'])) {
    // Preparar la consulta de inserción
    $consulta = "INSERT INTO blog (titulo, comentario, usuario) VALUES (?, ?, ?)";
    $statement = $base_de_datos->prepare($consulta);

    // Verificar si la preparación de la consulta fue exitosa
    if ($statement) {
        // Vincular los parámetros y ejecutar la consulta
        $statement->bind_param("sss", $_POST['titulo'], $_POST['comentario'], $_POST['usuario']);
        $statement->execute();

        // Verificar si la inserción fue exitosa
        if ($statement->affected_rows > 0) {
            header("Location: blog.php");
        } else {
            echo "Error al guardar la publicación.";
        }
    } else {
        echo "Error al preparar la consulta.";
    }

    // Cerrar la conexión
    $base_de_datos->close();
} else {
    echo "No se recibieron datos del formulario.";
}
?>