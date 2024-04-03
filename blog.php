<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Blog.css">
    <title>Blog Home plants</title>
</head>
<body>
    <h1>Blog Home Plants</h1>

    <!-- Formulario para enviar nuevas publicaciones -->
    <form action="guardar_publicacion.php" method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="comentario">Comentario:</label><br>
        <textarea id="comentario" name="comentario" rows="4" cols="50"></textarea><br>
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br>
        <input type="submit" value="Publicar">
    </form>

    <hr>
    
    <!-- PHP para mostrar las publicaciones existentes -->
    <?php
    require("conexion.php");

    // Realizar la consulta
    $consulta = "SELECT * FROM blog";
    $resultado = $base_de_datos->query($consulta);

    // Verificar si hay resultados
    if ($resultado && $resultado->num_rows > 0) {
        // Recorrer los resultados y mostrar las publicaciones
        while ($fila = $resultado->fetch_assoc()) {
            echo "<h2>" . $fila["titulo"] . "</h2>";
            echo "<p>Comentario:" . $fila["comentario"] . "</p>";
            echo "<p>Autor: " . $fila["usuario"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No hay publicaciones aún.";
    }
    ?>
    
</body>
</html>