<!-- Aquí se realiza la función de CREATE y UPDATE para Usuarios -->
<?php

    require "../conexion.php";

    $id = isset($_POST['id']);
    $nombre = trim($_POST['name']);
    $apellido = trim($_POST['lastname']);
    $edad = trim($_POST['age']);
    $correo = trim($_POST['email']);
    $telefono = trim($_POST['phone']);

// Si no se recibe la variable id por método POST, la petición es registrar usuario
    if($id === false){
        $consulta = "INSERT INTO Usuario (id, nombre, apellido, edad, correo_electronico, telefono) VALUES ( NULL,'$nombre','$apellido','$edad','$correo','$telefono')";
        $query = mysqli_query($conexion,$consulta);

        if($query){
            header("Location:../../index.php");
        }
        else{
            echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../../index.php";
                </script>
                ';
        }
// Si se recibe la variable id por método POST, la petición es modificar datos del usuario
    } else{
        $id = $_POST['id'];
        $consulta = "UPDATE Usuario SET nombre='$nombre', apellido='$apellido', edad='$edad', correo_electronico='$correo', telefono='$telefono' WHERE id='$id'";
        $query = mysqli_query($conexion,$consulta);
        if($query){
            header("Location:../../index.php");
        }
        else{
            echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../../index.php";
                </script>
                ';
        }
    }
?>