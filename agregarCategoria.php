<?php
        require 'funciones/conexion.php';   /*INYECCION DE DEPENDENCIAS */
        require 'funciones/categorias.php';    /* INVOCAR A LAS FUNCIONES QUE ACTUAN */
        $check = agregarCategoria();
        $clase = 'danger';
        $mensaje = 'Error al agregar'; 

        if ($check){
            $clase = 'success';
            $mensaje = 'Categoria agregada correctamente';
        }
        
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de Categoria</h1>

        <div class="alert alert-<?php echo $clase; ?>">

            <?php echo $mensaje ?>

            <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver al Panel de control</a>


        </div>
        
            
    </main>

<?php  include 'includes/footer.php';  ?>