<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Fournier</title>
    <link rel="stylesheet" href="../ESTILOS/estilospedidos.css" type="text/css">
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

    <h1>HACE TU PEDIDO</h1>

    <main>
        <form action="procesar_compra.php" method="POST">
            <div>
                <label for="nombre">Nombre del Cliente:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="pago">Medio de Pago:</label>
                <select id="pago" name="pago">
                    <option value="tarjeta">Tarjeta de Crédito</option>
                    <option value="mercado pago">Mercado Pago</option>
                    <option value="transferencia">Transferencia</option>
                </select>
            </div>
            <div>
                <label for="productos">Productos:</label>
                <textarea id="productos" name="productos" rows="4" readonly></textarea>
            </div>
            <button type="submit">Completar Compra</button>
        </form>
    </main>

    <footer class="eslogan">
        ¿Dulce o Salado?
    </footer>

    <script src="../JS/pedidos.js"></script>
</body>
</html>
