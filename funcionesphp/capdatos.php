<?php
// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión a la base de datos
include '../basededatos/conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario y sanitizarlos
    $event_name = $_POST['event_name'];
    $contact_name = $_POST['contact_name'];
    $contact_number = $_POST['contact_number'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $event_location = $_POST['event_location'];

    // Preparar la consulta SQL utilizando sentencias preparadas
    $stmt = $con->prepare("INSERT INTO eventos (event_name, contact_name, contact_number, event_date, event_time, event_location) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $event_name, $contact_name, $contact_number, $event_date, $event_time, $event_location);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        // Redirigir a index.php después de una inserción exitosa
        header("Location: http://localhost/TP-2-LA-FOURNIER/");
        exit();
    } else {
        echo "Error al enviar la solicitud: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$con->close();
?>
