<?php
include('conexion.php');
conectar();

// Directorio donde se guardarán las imágenes
$targetDir = "muroclientes/"; // Asegúrate de que este directorio exista y tenga permisos de escritura
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // Crea el directorio si no existe
}

$imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
$uploadOk = 1;
$errorMsg = ""; // Variable para almacenar mensajes de error

// Verifica si el archivo es una imagen real
if (isset($_FILES["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Genera un nombre único para evitar sobrescribir archivos existentes
        $targetFile = $targetDir . uniqid() . '.' . $imageFileType;
        $uploadOk = 1;
    } else {
        $errorMsg = "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Verifica el tamaño del archivo (limite: 5 MB)
    if ($_FILES["image"]["size"] > 5000000) {
        $errorMsg = "Lo sentimos, tu archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Verifica el tipo de archivo permitido
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        $errorMsg = "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Si todo está bien, intenta subir el archivo
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Redirige a la página recuerdos.php
            header("Location: pages/recuerdos.php"); // Asegúrate de que la ruta sea correcta
            exit; // Asegúrate de que la ejecución se detenga después de redirigir
        } else {
            $errorMsg = "Lo sentimos, hubo un error al subir tu archivo.";
        }
    }


    if (!empty($errorMsg)) {
        error_log($errorMsg, 3, "errores.log"); // Registra el error
        echo '<p>Error: ' . htmlspecialchars($errorMsg) . '</p>'; // Muestra un mensaje amigable
    }
}
?>