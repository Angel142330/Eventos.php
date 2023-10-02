<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Evento</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!-- Agregamos una imagen al encabezado -->
<header>
    <h2>Añadir Evento</h2>
</header>

<form action="procesar_evento.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required autocomplete="off"><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required><br>

    <label for="localizacion">Localización:</label>
    <input type="text" id="localizacion" name="localizacion" required autocomplete="off"><br>

    <label for="pinata">¿Habrá piñata?</label>
    <input type="checkbox" id="pinata" name="pinata" autocomplete="off"><br>

    <input type="submit" value="Añadir Evento">
</form>

</body>
</html>
