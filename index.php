<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Fournier</title>
    <link rel="stylesheet" href="ESTILOS/estilosind.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>
<body>
    <!-- HEADER -->
    <header>
        <img src="./IMAGENES/index/LAFOURNIER.jpeg" alt="La Fournier Logo">
        <nav>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul id="nav-menu">
                <li><a href="./index.php">INICIO</a></li>
                <li><a href="./pages/nosotros.php">NOSOTROS</a></li>
                <li><a href="./pages/precio.php">PRECIOS</a></li>
                <li><a href="./pages/pedidos.php">PEDIDOS</a></li>
                <li><a href="./pages/recuerdos.php">DEJA TU RECUERDO CON NOSOTROS</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- NOVEDADES -->
    <section class="novedades">
        <img src="IMAGENES/index/pastelitos.jpeg" alt="Pastelitos" width="100">
        <div>
            <h2>NOVEDADES</h2>
            <p>9 DE JULIO</p>
            <p>Hace tu pedido de pastelitos para este martes</p>
        </div>
    </section>

    <!-- LISTADO DE PRODUCTOS -->
    <section class="carrusel_productos">
        <h2>ESTA SEMANA TENEMOS...</h2>
        <div class="productos_slider">
            <div class="producto_item">
                <img src="IMAGENES/index/uno.jpeg" alt="Chocotorta" width="100">
                <h3>Chocotorta</h3>
            </div>
            <div class="producto_item">
                <img src="IMAGENES/index/dos.jpeg" alt="Marquise" width="100">
                <h3>Marquise</h3>
            </div>
            <div class="producto_item">
                <img src="IMAGENES/index/tres.jpeg" alt="Cheesecake" width="100">
                <h3>Cheesecake</h3>
            </div>
            <div class="producto_item">
                <img src="IMAGENES/index/cuatro.jpeg" alt="Hojaldre con frutilla" width="100">
                <h3>Hojaldre con frutilla</h3>
            </div>
            <div class="producto_item">
                <img src="IMAGENES/index/cinco.jpeg" alt="Mini Facturitas" width="100">
                <h3>Mini Facturitas</h3>
            </div>
            <div class="producto_item">
                <img src="IMAGENES/index/seis.jpeg" alt="Alfajores de Maicena" width="100">
                <h3>Alfajores de Maicena</h3>
            </div>
        </div>
    </section>


    <section class="formulario">
        <h1>Solicita un Evento</h1>
        <form id="event-request-form" action="funcionesphp/capdatos.php" method="POST">
            <label for="event-name">Nombre del Evento:</label>
            <input type="text" id="event-name" name="event_name" required>

            <label for="contact-name">Nombre de Contacto:</label>
            <input type="text" id="contact-name" name="contact_name" required placeholder="Ingrese su nombre">

            <label for="contact-number">Número de Contacto:</label>
            <input type="tel" id="contact-number" name="contact_number" required placeholder="Ingrese su número de contacto">

            <label for="event-date">Fecha del Evento:</label>
            <input type="date" id="event-date" name="event_date" required>

            <label for="event-time">Horario:</label>
            <input type="time" id="event-time" name="event_time" required>

            <label for="event-location">Ubicación:</label>
            <input type="text" id="event-location" name="event_location" required placeholder="Ingrese la ubicación">

            <button type="submit">Enviar Solicitud</button>
        </form>

    </section>

    <!-- FOOTER -->
    <footer>
        <p>¿Dulce o Salado?</p>
    </footer>

    <script src="./JS/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>
</html>
