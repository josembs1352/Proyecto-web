<?php

session_start();
include_once "Conexion.php";

function verificar_login($user, $password, &$result) {
    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;
    while ($row = mysql_fetch_object($rec)) {
        $count++;
        $result = $row;
    }
    if ($count == 1) {
        return 1;
    } else {
        return 0;
    }
}

if (!isset($_SESSION['userid'])) {
    if (isset($_POST['ingresarPagina'])) {
        if (verificar_login($_POST['nombreUsuario'], $_POST['password'], $result) == 1) {
            $_SESSION['userid'] = $result->idusuario;
            echo 'Ha ingresado a la pagina';
            echo '<a href="Logout.php"> Logout </a>';
            require 'index.php';
        } else {
            echo 'Datos erroneos intente nuevamente';
            header('Location: index.php');
        }
    }
}
?> 


