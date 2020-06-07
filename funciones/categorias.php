<?php

/*
* listarCategoria()
* verCategoriaPorID()
*agregarCategoria()
*modificarCategoria()
*eliminarCategoria()
*/

function listarCategorias()
{
    $link = conectar();                            /*Conectar a la base */
    $sql = 'SELECT idCategoria, catNombre FROM categorias'; /* Mensaje de sql */
    $categorias = mysqli_query($link,$sql);           /*Ejecucion del mensaje */

    return $categorias;

}


function agregarCategoria(){

    $catNombre = $_POST['catNombre'];
    $link = conectar();
    $sql = "INSERT INTO categorias
            VALUES (NULL, '".$catNombre."' )";   /* Consulta para insertar en tabla de la BDD  (la variable nunca puede estar dentro de comillas) */
    $resultado = mysqli_query($link,$sql)
    or die( mysqli_error($link) );     /* INSERT INTO se tiene que especificar cada campo y el valor insertado o null y el valor a insertar */
            
           return $resultado;
    
    }