<?php

/**
 * Funcion para conexion a mySQL (esto es un comentario de documentacion)
 */

 const SERVER  = 'localhost';
 const USUARIO = 'root';
 const CLAVE   = '';
 const BASE    = 'catalogo';

 function conectar()
 {
     $link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE); /*4 parametros (server,usuario,clave,base) */
     return $link;
 }