<?php
        require 'funciones/productos.php';
        require 'funciones/conexion.php';
        $check = agregarProducto();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
    <h1>Alta de Producto</h1>

<div class="alert alert-success">

    Producto Agregado correctamente

    <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al Panel de control</a>


</div>
            
    </main>

<?php  include 'includes/footer.php';  ?>