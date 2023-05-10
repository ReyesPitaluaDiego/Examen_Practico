<?php
    $host="localhost";
    $dbname="DB Venta";
    $user="root";
    $password="";

    try{
        $conexion = mysqli_connect($host,$user,$password,$dbname);
    } catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
?>