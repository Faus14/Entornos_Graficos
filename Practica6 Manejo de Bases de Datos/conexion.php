<?php
        $hostname = "localhost";
        $nombreUsuario = "root";
        $password ="root";
        $db = "capitales";
        $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error al Conectar");
        mysqli_select_db($link,$db);
?>