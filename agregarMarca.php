<?php
        require 'funciones/conexion.php';   /*INYECCION DE DEPENDENCIAS */
        require 'funciones/marcas.php';    /* INVOCAR A LAS FUNCIONES QUE ACTUAN */
        $check = agregarMarca();
        $clase = 'danger';
        $mensaje = 'Error al agregar'; 

        if ($check){
            $clase = 'success';
            $mensaje = 'Marca agregada correctamente';
        }
        
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de Marca</h1>

        <div class="alert alert-<?php echo $clase; ?>">

            <?php echo $mensaje ?>

            <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver al Panel de control</a>


        </div>
        
            
    </main>

<?php  include 'includes/footer.php';  ?>