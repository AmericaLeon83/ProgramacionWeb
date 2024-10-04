<?php
require_once __DIR__ . '/citas.class.php';

$app = new Citas();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $datos = [
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
        'fecha_de_cita' => $_POST['fecha'],
        'hora_de_cita' => $_POST['hora']
    ];

    // Validar y guardar los datos
    if ($app->insert($datos)) {
        echo "Cita registrada exitosamente.";
    } else {
        echo "Error: No se pudo registrar la cita.";
    }
}
?>
