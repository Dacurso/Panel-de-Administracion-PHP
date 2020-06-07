<?php

function listarUsuarios()
{
    $link = conectar();                                             /*Conectar a la base */
    $sql = 'SELECT usuNombre, usuApellido, usuEmail FROM usuarios'; /* Mensaje de sql */
    $usuarios = mysqli_query($link,$sql);                           /*Ejecucion del mensaje */

    return $usuarios;

}

function agregarUsuario(){

    $usuNombre = $_POST['usuNombre'];
    $usuApellido = $_POST['usuApellido'];
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];

    $link = conectar();
    $sql = "INSERT INTO usuarios
            VALUES (NULL, '".$usuNombre."',
                          '".$usuApellido."',
                          '".$usuEmail."',
                          '".$usuPass."',
                          1 
                          )"; 

    $resultado = mysqli_query($link,$sql)
    or die( mysqli_error($link) );     
            
           return $resultado;
    
    }