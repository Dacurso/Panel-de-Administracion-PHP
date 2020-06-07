<?php
        require 'funciones/usuarios.php';
        require 'funciones/conexion.php';
        $check = agregarUsuario();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
    <h1>Alta de Usuario</h1>

<div class="alert alert-success">

    Usuario Agregado correctamente

    <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver al Panel de control</a>


</div>
            
    </main>

<?php  include 'includes/footer.php';  ?>