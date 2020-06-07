<?php
        require 'funciones/usuarios.php';
        require 'funciones/conexion.php';
        $usuarios = listarUsuarios();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administracion de Usuarios</h1>
        
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-dark">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php

            while( $usuario = mysqli_fetch_array($usuarios)) /*Funcion recibe un objeto*/{


?>
                <tr>
                    <td><?php echo $usuario['usuNombre']; ?></td>
                    <td><?php echo $usuario['usuApellido']; ?></td>
                    <td><?php echo $usuario['usuEmail']; ?></td>
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