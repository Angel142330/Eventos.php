<?php

session_start();

include 'funciones_eventos.php';

// Obtener eventos de la sesión
$eventos = obtener_eventos();
//var_dump($eventos);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $localizacion = $_POST['localizacion'];
    $pinata = isset($_POST['pinata']);
    // var_dump(isset($_POST['pinata']));
    agregar_evento($nombre, $fecha, $localizacion, $pinata);

    // Actualizar la variable $eventos después de agregar el evento
     $eventos = obtener_eventos();
}
//phpinfo(INFO_ALL);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
    <link rel="stylesheet" href="css/estilo2.css">
</head>

<body>
    <h1>Eventos</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Localización</th>
            <th>Piñata</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($eventos as $indice => $evento) {
            mostrar_fila_evento($evento, $indice);
        } ?>

    </table>

    <a href="formulario_evento.php">Añadir Evento</a>

</body>

</html>
