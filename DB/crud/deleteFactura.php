<?php
    require "../conexion.php";
    $id = $_GET['id'];

    $consulta = "DELETE FROM Factura WHERE id = '$id'";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        header("Location:../../html/facturas.php");
    } else{
        echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href=".../../html/facturas.php";
                </script>
            ';
    }
?>