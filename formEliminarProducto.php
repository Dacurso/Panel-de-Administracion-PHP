<?php
        require 'funciones/productos.php';
        require 'funciones/conexion.php';
        $producto = verProductoPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de Producto</h1>
        
        <div class="card border-danger col-6 text-danger">

            <div class="card-header">
            titulo
            </div>
            <div class="card-body">
            Datos productos
            </div>
        
        </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>