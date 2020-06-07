<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de Usuario</h1>
        
        <div class="alert bg-light p-3">     

        <form action="agregarUsuario.php" method="POST">
        
        Nombre 
        <br>
        <input type="text" class="form-control" name="usuNombre" required>
        <br>
        Apellido 
        <br>
        <input type="text" class="form-control" name="usuApellido" required>
        <br>
        Email
        <br>
        <input type="email" class="form-control" name="usuEmail" required>
        <br>
        Clave
        <br>
        <input type="password" class="form-control" name="usuPass" required>
        <br>

        <button class="btn btn-dark">Agregar Usuario</button>
        <a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver a Panel de Marcas</a>
        
        
        
        
        </form>
         </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>