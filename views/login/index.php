<?php
/*
 * Validar un usuario y contraseña
 */
session_start();
if($_SESSION['valid_user']!=true){
    header('Location: login/error.html');
    die();
}

?>