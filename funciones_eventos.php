<?php
function obtener_eventos() {
   
    return isset($_SESSION['eventos']) ? $_SESSION['eventos'] : [];
}


function agregar_evento($nombre, $fecha, $localizacion, $pinata) {
    $eventos = obtener_eventos();

    array_push($eventos, [
        'nombre' => $nombre,
        'fecha' => $fecha,
        'localizacion' => $localizacion,
        'pinata' => $pinata,
    ]);

    $_SESSION['eventos'] = $eventos;
}

function mostrar_fila_evento($evento, $indice) {
    ?>
    <tr>
        <td><?= $evento['nombre'] ?></td>
        <td><?= $evento['fecha'] ?></td>
        <td><?= $evento['localizacion'] ?></td>
        <td><?= $evento['pinata'] ? 'Sí' : 'No' ?></td>
        <td><a href="editar_evento.php?id=<?= $indice ?>">Editar</a></td>
    </tr>
    <?php
}


function editar_evento($evento) {
    ?>
    <h2>Editar Evento</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $evento['nombre'] ?>" required autocomplete="off"><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="<?= $evento['fecha'] ?>" required autocomplete="off"><br>

        <label for="localizacion">Localización:</label>
        <input type="text" id="localizacion" name="localizacion" value="<?= $evento['localizacion'] ?>" required autocomplete="off"><br>

        <label for="pinata">¿Habrá piñata?</label>
        <input type="checkbox" id="pinata" name="pinata" <?= $evento['pinata'] ? 'checked' : '' ?>><br>

        <input type="submit" value="Guardar Cambios">
    </form>
    <?php
}

?>
