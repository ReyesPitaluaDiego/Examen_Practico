<!-- Aquí se realiza la función de CREATE y UPDATE para Usuarios -->
<?php

    require "../conexion.php";

    $id = isset($_POST['id']);
    $id_cliente = trim($_POST['cliente']);
    $folio = trim($_POST['folio']);
    $saldo = trim($_POST['saldo']);
    $fch_facturacion = $_POST['fch_facturacion'];
    $fch_creacion = $_POST['fch_creacion'];

// Si no se recibe la variable id por método POST, la petición es registrar usuario
    if($id === false){
        $consulta = "INSERT INTO Factura (id, id_usuario, folio, saldo, fecha_facturacion, fecha_creacion) VALUES ( NULL,'$id_cliente','$folio','$saldo','$fch_facturacion','$fch_creacion')";
        $query = mysqli_query($conexion,$consulta);

        if($query){
            header("Location:../../html/facturas.php");
        }
        else{
            echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../../html/facturas.php";
                </script>
                ';
        }
// Si se recibe la variable id por método POST, la petición es modificar datos del usuario
    } else{
        $id = $_POST['id'];
        $consulta = "UPDATE Factura SET id_usuario='$id_cliente', folio='$folio', saldo='$saldo', fecha_facturacion='$fch_facturacion', fecha_creacion='$fch_creacion' WHERE id='$id'";
        $query = mysqli_query($conexion,$consulta);
        if($query){
            header("Location:../../html/facturas.php");
        }
        else{
            echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../../html/facturas.php";
                </script>
                ';
        }
    }
?>