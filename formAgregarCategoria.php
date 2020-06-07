<?php
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
    <h1>Agregar una nueva Categoria</h1>
        
        <div class="alert bg-light p-3">
        
            <form action="agregarCategoria.php" method="POST">
            
            Nombre de la Categoria:
            <br>
            <input type="text" name="catNombre" class="form-control" required>
            <br>
            <button class="btn btn-dark">Agregar Categoria</button>
            <a href="adminCategoria.php" class="btn btn-outline-secondary">Volver a Panel de Categorias</a>
            
            
            </form>

        </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>