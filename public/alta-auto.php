<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AutoCom - Nuevo Auto</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Bienvenido a AutoCom</h1>
        <nav>
            <ul>
                <li><a href="index.php">Bienvenido</a></li>
                <li><a href="autos.php">Catalogo de autos</a></li>
                <li><a href="contacto.php">Contactos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Poner a la venta un auto nuevo</h2>
            <form class="ficha">
                <label for="nombre">Nombre del producto</label>
                <input type="text" name="nombre" id="nombre" required>
                <br>
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" required>
                <br>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" step="0.01" min="0">
                <br>
                <label for="stock">Stock</label>
                <input type="text" name="stock" id="stock" min="0">
                <br>
                <button type="submit" class="boton">Agregar producto</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 AutoCom. Todos los derechos reservados</p>
    </footer>
</body>
</html>