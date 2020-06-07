<?php
        require 'funciones/marcas.php';
        require 'funciones/conexion.php';
        require 'funciones/categorias.php';
        $marcas = listarMarcas();
        $categorias = listarCategorias();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Agregar nuevo producto</h1>
        <div class="alert bg-light p-3">
            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
                    Nombre del producto
                <br>
                <input type="text" name="prdNombre" class="form-control" required>
                <br>
                    Precio del Producto
                <br>
                <input type="number" name="prdPrecio" class="form-control" required>
                <br>
                    Marca
                <br>
                <select name="idMarca" class="form-control" required>
                    <option value = "">Seleccione una marca</option>
<?php
        while( $marca = mysqli_fetch_array($marcas)) 
        {
?>
                <option value="<?php echo $marca['idMarca']; ?>">
                    <?php echo $marca['mkNombre']; ?>
                </option>
                
<?php
        }
?>
                </select>
                <br>
                    Categoria
                <br>
                <select name="idCategoria" class="form-control">
                    <option value="">Seleccione una categoría</option>
<?php
        while( $categoria = mysqli_fetch_array($categorias)) 
        {
?>
                <option value="<?php echo $categoria['idCategoria']; ?>">
                    <?php echo $categoria['catNombre']; ?>
                </option>
                
<?php
        }
?>
                </select>
                <br>
                    Presentacion del producto
                <br>
                <textarea name="prdPresentacion" id="" cols="30" rows="10" class="form-control"></textarea>
                <br>
                    Stock del producto
                <br>
                <input type="number" name="prdStock" class="form-control" required>
                <br>
                    Imagen del Producto
                <br>
                <input type="file" name="prdImagen">
                <br><br><br>
                <button class="btn btn-dark">Agregar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">Volver a panel de productos</a>
            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>