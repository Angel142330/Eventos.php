<?php
session_start();
include 'funciones_eventos.php';
$eventos = obtener_eventos();
//var_dump($eventos);


if (isset($_GET['id'])) {
    $indice = $_GET['id'];
    if (isset($eventos[$indice])) {
        $evento = $eventos[$indice];

        // Verificar si se enviaron datos del formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Actualizar los datos del evento con los datos del formulario
            $eventos[$indice]['nombre'] = $_POST['nombre'];
            $eventos[$indice]['fecha'] = $_POST['fecha'];
            $eventos[$indice]['localizacion'] = $_POST['localizacion'];
            $eventos[$indice]['pinata'] = isset($_POST['pinata']);

            // Actualizar la sesión con los cambios
            $_SESSION['eventos'] = $eventos;

            echo '<p>Evento actualizado exitosamente. Redirigiendo...</p>';
            header("refresh:2;url=procesar_evento.php");
            exit();
        }
    } else {

        echo '<p>Evento no encontrado</p>';
    }
} else {

    echo '<p>Parámetro "id" no proporcionado</p>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo3.css">
    <title>Editar Evento</title>
</head>
<body>
<?php editar_evento($evento) ?>
</body>
</html>