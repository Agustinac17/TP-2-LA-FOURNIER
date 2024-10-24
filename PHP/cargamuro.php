<?php
// Directorio donde se guardarán las imágenes
$targetDir = "muroclientes"; // Asegúrate de que este directorio exista y tenga permisos de escritura
$imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
$uploadOk = 1;

// Verifica si la imagen es un archivo real o un falso
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $targetFile = $targetDir . uniqid() . '.' . $imageFileType; // Renombrar el archivo
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Verifica si el archivo ya existe
    if (file_exists($targetFile)) {
        echo "Lo sentimos, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Limita el tamaño del archivo (ejemplo: 5 MB)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Lo sentimos, tu archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de imagen
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Verifica si $uploadOk es 0 por un error
    if ($uploadOk == 0) {
        echo "Lo sentimos, tu archivo no se ha subido.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "El archivo " . htmlspecialchars(basename($_FILES["image"]["name"])) . " se ha subido correctamente.";
        } else {
            echo "Lo sentimos, hubo un error al subir tu archivo.";
        }
    }
}
?>;
