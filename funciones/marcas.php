<?php

####################################
    ######### CRUD DE Marcas  #######
    ####################################

function listarMarcas()
{
    $link = conectar();                            /*Conectar a la base */
    $sql = 'SELECT idMarca, mkNombre FROM marcas'; /* Mensaje de sql */
    $marcas = mysqli_query($link,$sql);           /*Ejecucion del mensaje */

    return $marcas;
}

function agregarMarca(){

$mkNombre = $_POST['mkNombre'];
$link = conectar();
$sql = "INSERT INTO marcas
        VALUES (NULL, '".$mkNombre."' )";   /* Consulta para insertar en tabla de la BDD  (la variable nunca puede estar dentro de comillas) */
$resultado = mysqli_query($link,$sql)
or die( mysqli_error($link) );              /* INSERT INTO se tiene que especificar cada campo y el valor insertado o null y el valor a insertar */
        
       return $resultado;

}

function verMarcaPorID(){

    $idMarca = $_POST['idMarca'];
    $link = conectar();
    $sql = "SELECT idMarca FROM marcas";

    $marca = mysqli_query($link, $sql)
    or die (mysqli_error($link));

    return $marca;


}

/*
* verMarcaPorID()
* modificarMarca()
* eliminarMarca()
*/

