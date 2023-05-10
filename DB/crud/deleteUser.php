<?php
    require "../conexion.php";
    $id = $_GET['id'];

    $consulta = "DELETE FROM Usuario WHERE id = '$id'";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        header("Location:../../index.php");
    } else{
        echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../../index.php";
                </script>
            ';
    }
?>