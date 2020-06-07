<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Agregar una nueva Marca</h1>
        
            <div class="alert bg-light p-3">
            
                <form action="agregarMarca.php" method="POST">
                
                Nombre de la Marca:
                <br>
                <input type="text" name="mkNombre" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">Volver a Panel de Marcas</a>
                
                
                </form>

            </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>