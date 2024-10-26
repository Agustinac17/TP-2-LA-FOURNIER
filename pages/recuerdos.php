<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Fournier</title>
    <link rel="stylesheet" href="../ESTILOS/recuerdos.css" type="text/css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <img src="../IMAGENES/index/LAFOURNIER.jpeg" alt="La Fournier Logo">
        <nav>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul id="nav-menu">
                <li><a href="../index.php">INICIO</a></li>
                <li><a href="./nosotros.php">NOSOTROS</a></li>
                <li><a href="./precio.php">PRECIOS</a></li>
                <li><a href="./pedidos.php">PEDIDOS</a></li>
                <li><a href="./recuerdos.php">DEJA TU RECUERDO CON NOSOTROS</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Subí tu recuerdo</h2>
        <form id="upload-form" action="php/cargamuro.php" method="POST" enctype="multipart/form-data">
            <input type="file" id="file-input" name="image" accept="image/*" required>
            <button type="submit">Subir</button>
        </form>
        
        <h3>Muro de Recuerdos</h3>
        <div id="photo-wall">
            <?php
            $dir = "muroclientes/"; // El mismo directorio donde se guardan las imágenes
            $images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Obtiene las imágenes
    
            foreach ($images as $image) {
                echo '<img src="' . $image . '" class="uploaded-image" alt="Recuerdo" style="width: 100px; height: auto; margin: 5px;">';
            }
           ?> 
        </div>
        <!--
        include('conexion.php');
        $con = conectar();

        $query = "SELECT image_path FROM recuerdos";
        $result = $con->query($query);

        while ($row = $result->fetch_assoc()) {
            echo '<img src="' . $row['image_path'] . '" class="uploaded-image" alt="Recuerdo" style="width: 100px; height: auto; margin: 5px;">';
        }

        $con->close();-->
    </main>
    
    <script src="../JS/recuerdos.js"></script>
</body>
</html>
