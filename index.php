<?php
    include ('DB/conexion.php');
    $consulta = "SELECT * FROM Usuario";
    $respuesta = mysqli_query($conexion,$consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hoja de estilo -->
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2ee0245f3d.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Examen práctico</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="html/facturas.php">Facturas</a>
                </li>
          </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="ancho izq_der">
        <h3><span style="font-weight: normal;">Employee</span> Details</h3>
        <a href="html/addUser.php" class="btn btn_add btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
    </div>
    <table class="ancho table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone</th>
                <th class="cel_acction1">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($respuesta AS $row){
            ?>
            <tr>
                <td><?php echo $row['nombre'] . " " . $row['apellido']; ?></td>
                <td><?php echo $row['correo_electronico'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td class="cel_acction">
                    <a href="#" onclick="editar('html/updateUser.php?id=<?php echo $row["id"];?>')"><i class="fa-solid fa-pen"></i></a>
                    <a class="btn_delete" href="#" onclick="eliminarUser('DB/crud/deleteUser.php?id=<?php echo $row["id"];?>')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
<!-- Funciones JS -->
    <script>
        // Funcion para editar datos de las tablas
        function editar(url) {
            window.location=url;
        }
        // Funcion para eliminar datos de las tablas
        function eliminarUser(url) {
            var eliminar = confirm("Al aceptar, se borrarán los datos y perfil de este usuario.\n\n¿Desea continuar?");
            if (eliminar == true){
                window.location=url;
            }
        }
   </script>
</body>
</html>