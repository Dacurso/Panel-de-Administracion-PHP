<?php
        require 'funciones/conexion.php';
        require 'funciones/productos.php';
        $check = modificarProducto();

        $clase = 'danger';
        $msj = 'No se pudo modificar el producto';
        if($check){
            $clase = 'success';
            $msj = 'Producto modificado correctamente';
        }

		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificacion de Producto</h1>

        <div class="alert alert-<?php echo $clase; ?>">
        
        <?php echo $msj ?>

        <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al Panel de control</a>

        </div>


    </main>

<?php  include 'includes/footer.php';  ?>