<html lang="en">
<head>
    <title>AutoCom</title>
</head>
<body>
    <header>
        <h1>Bienvenido a AutoCom</h1>
        <nav>
            <a href="index.php">Bienvenido</a>
            <a href="autos.php">Catalogo de autos</a>
            <a href="contacto.php">Contactos</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>poner a la venta un auto nuevo </h2>
            <form>
                <lebel>Nombre del producto</lebel>
                <input type="text" name="nombre" id="nombre" required>
                <br>
                <lebel>Categoria</lebel>
                <input type="text" name="nombre" id="categoria" required>
                <br>
                <lebel>Precio</lebel>
                <input type="number" name="precio" id="precio" step="0.01" min="0">
                <br>
                <lebel>Stock</lebel>
                <input type="text" name="stock" id="stock" min="0">

                <button type="submit">Agregar producto</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 AutoCom. los derechos reservados</p>
    </footer>

</body>
</html>