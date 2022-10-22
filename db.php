<?php

    $dbhost = "localhost";
    $dbusu = "root";
    $dbpass = "";
    $dbname = "prueba";
    
    $conect = mysqli_connect($dbhost,$dbusu,$dbpass,$dbname) or die("error");
    
    if(!$conect){
        die("no hay conexion: ".mysqli_connect_error());
        }

?>