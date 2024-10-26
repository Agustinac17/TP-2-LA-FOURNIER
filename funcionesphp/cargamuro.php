<?php
include '../basededatos/conexion.php';

$targetDir = "muroclientes/"; // Directorio de almacenamiento
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
$uploadOk = 1;
$errorMsg = ""; 

if (isset($_FILES["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $targetFile = $targetDir . uniqid() . '.' . $imageFileType;
        $uploadOk = 1;
    } else {
        $errorMsg = "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 5000000) {
        $errorMsg = "El archivo es demasiado grande.";
        $uploadOk = 0;
    }

    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        $errorMsg = "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Guardar la ruta de la imagen en la base de datos
            $stmt = $con->prepare("INSERT INTO recuerdos (image_path) VALUES (?)");
            $stmt->bind_param("s", $targetFile);
            $stmt->execute();
            $stmt->close();

            header("Location: ../pages/recuerdos.php");
            exit;
        } else {
            $errorMsg = "Hubo un error al subir tu archivo.";
        }
    }

    if (!empty($errorMsg)) {
        error_log($errorMsg, 3, "errores.log"); 
        echo '<p>Error: ' . htmlspecialchars($errorMsg) . '</p>'; 
    }
}
$con->close();