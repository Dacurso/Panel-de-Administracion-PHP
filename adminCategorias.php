<?php
        require 'funciones/categorias.php';
        require 'funciones/conexion.php';
        $categorias = listarCategorias();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
    <h1>Panel de administracion de Categorias</h1>
        

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="formAgregarCategoria.php" class="btn btn-dark">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php

            while( $categoria = mysqli_fetch_array($categorias)) /*Funcion recibe un objeto*/{


?>
                <tr>
                    <td><?php echo $categoria[0]; ?></td>
                    <td><?php echo $categoria[1]; ?></td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">Modificar</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">Eliminar</a>
                    </td>
                </tr>
<?php
        }
?>

            </tbody>
        </table>
            
    </main>

<?php  include 'includes/footer.php';  ?>