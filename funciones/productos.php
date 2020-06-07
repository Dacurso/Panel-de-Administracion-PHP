<?php

    ####################################
    ######### CRUD DE Productos  #######
    ####################################

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT  idProducto, prdNombre, prdPrecio, 
                        mkNombre, catNombre, 
                        prdPresentacion, prdImagen
	              FROM productos p, marcas m, categorias c
                  WHERE p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria";
        $productos = mysqli_query($link, $sql);
                       

        return $productos;
    }

    function subirArchivo(){


        $archivo = 'noDisponible.jpg';             // en un alta si no envia nada
        if(isset($_POST['imagenAnt']))
        {
            $archivo = $_POST['imagenAnt'];
        }
        if($_FILES['prdImagen']['error'] == 0){        //si envia un archivo

            $ruta = 'images/productos/';
            $tmp = $_FILES['prdImagen']['tmp_name'];
            $archivo = $_FILES['prdImagen']['name'];
            move_uploaded_file($tmp, $ruta.$archivo);
        
        }

        return $archivo;
    }

    function agregarProducto(){

        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO productos
                VALUES 
                       (NULL,'".$prdNombre."',".$prdPrecio.",".$idMarca.",
                       ".$idCategoria.", '".$prdPresentacion."',".$prdStock.",'".$prdImagen."')";
                       
        $resultado = mysqli_query($link,$sql)
                        or die(mysqli_error($link));

        return $resultado;                           
                        
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT  idProducto, prdNombre, prdPrecio, 
                        p.idMarca, mkNombre, p.idCategoria, catNombre,  
                        prdPresentacion, prdStock, prdImagen
	              FROM productos p, marcas m, categorias c
                  WHERE p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria
                    AND idProducto = ".$idProducto;
                     
        $resultado = mysqli_query($link, $sql);
        $producto = mysqli_fetch_array($resultado);
                       

        return $producto;
    }

    function modificarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "UPDATE productos
                   SET prdNombre = '".$prdNombre."',
                       prdPrecio = ".$prdPrecio.",
                       idMarca = ".$idMarca.",
                       idCategoria = ".$idCategoria.",
                       prdPresentacion = '".$prdPresentacion."',
                       prdStock = ".$prdStock.",
                       prdImagen = '".$prdImagen."'

                WHERE idProducto = ".$idProducto;

    

        $resultado = mysqli_query($link,$sql)
            or die(mysqli_error($link));

            return $resultado;
    }



/*
 * listarProductos()
 * verProductoPorId()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 */