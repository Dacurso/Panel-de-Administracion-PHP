<?php
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
?>
<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

<main class="container">
    <h1>Panel de administración de productos</h1>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentación</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="formAgregarProducto.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
<?php
        while( $producto = mysqli_fetch_assoc($productos) ){
?>
            <tr>
                <td class="align-middle"><?php echo $producto['prdNombre']; ?></td>
                <td class="align-middle"><?php echo $producto['prdPrecio']; ?></td>
                <td class="align-middle"><?php echo $producto['mkNombre']; ?></td>
                <td class="align-middle"><?php echo $producto['catNombre']; ?></td>
                <td class="align-middle"><?php echo $producto['prdPresentacion']; ?></td>
                <td class="text-center">
                    <img src="images/productos/<?php echo $producto['prdImagen']; ?>" class="img-thumbnail img50">
                </td>
                <td class="align-middle">
                    <a href="formModificarProducto.php?idProducto=<?php echo $producto['idProducto']; ?>" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td class="align-middle">
                    <a href="formEliminarProducto.php?idProducto=<?php echo $producto['idProducto']; ?>" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
<?php
        }
?>
        </tbody>
    </table>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

</main>

<?php  include 'includes/footer.php';  ?>