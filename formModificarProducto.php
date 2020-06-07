<?php
        require 'funciones/conexion.php';
        require 'funciones/marcas.php';
        require 'funciones/categorias.php';
        require 'funciones/productos.php';
        $marcas = listarMarcas();
        $categorias = listarCategorias();
        $producto = verProductoPorID();
		include 'includes/header.html';
		include 'includes/nav.php';  
?>

    <main class="container">
    <h1>Modificacion de producto</h1>
        <div class="alert bg-light p-3">
            <form action="modificarProducto.php" method="POST" enctype="multipart/form-data">
                    Nombre del producto
                <br>
                <input type="text" value="<?php echo $producto['prdNombre'];?>" name="prdNombre" class="form-control" required>
                <br>
                    Precio del Producto
                <br>
                <input type="number" value="<?php echo $producto['prdPrecio'];?>" name="prdPrecio" step="any" lang="en" class="form-control" required>
                <br>
                    Marca
                <br>
                <select name="idMarca" class="form-control" required>
                    <option value = "<?php echo $producto['idMarca'];?>"><?php echo $producto['mkNombre'];?></option>
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
                    <option value="<?php echo $producto['idCategoria'];?>"><?php echo $producto['catNombre'];?></option>
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
                <textarea name="prdPresentacion" id="" cols="30" rows="10" class="form-control"><?php echo $producto['prdPresentacion'];?></textarea>
                <br>
                    Stock del producto
                <br>
                <input type="number" name="prdStock" value="<?php echo $producto['prdStock'];?>" class="form-control" required>
                <br>
                    Imagen del Producto
                <br>
                <input type="file" name="prdImagen">
                <br><br><br>
                <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto'];?>">
                <input type="hidden" name="imagenAnt" value="<?php echo $producto['prdImagen']; ?>">
                <button class="btn btn-dark">Modificar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">Volver a panel de productos</a>
            </form>
        </div>
            
    </main>

<?php  include 'includes/footer.php';  ?>