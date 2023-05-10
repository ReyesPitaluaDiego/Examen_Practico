<?php
    include ('../DB/conexion.php');
    $id = $_GET['id'];
    $consulta = "SELECT * FROM Factura WHERE id='$id'";
    $respuesta = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_assoc($respuesta);

    $consulta2 = "SELECT * FROM Usuario";
    $respuesta2 = mysqli_query($conexion,$consulta2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hoja de estilo -->
    <link rel="stylesheet" href="../css/estilo.css">
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
                  <a class="nav-link" href="../index.php">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Facturas</a>
                </li>
          </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="ancho izq_der">
        <h3><span style="font-weight: normal;">Add</span> Factura</h3>
    </div>
    <form action="../DB/crud/createFactura.php" method="POST" class="ancho form-control">
    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
    <div class="form-group">
        <label for="cliente">Cliente:</label>
            <select class="form-control" id="cliente" name="cliente">
                <option selected="<?php echo $row['id_usuario']; ?>"><?php echo $row['id_usuario']; ?></option>
                <?php
                foreach($respuesta2 AS $row2){
                ?>
                <option value="<?php echo $row2['id']; ?>"><?php echo $row2['id'].".- ".$row2['nombre'] . " " . $row2['apellido']?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="folio" class="label2">Folio:
            <input type="text" id="folio" name="folio" class="form-control" value="<?php echo $row['folio']; ?>" require></label>
            <label for="saldo" class="label3">Saldo:
            <input type="text" id="saldo" name="saldo" class="form-control" value="<?php echo $row['saldo']; ?>" require></label>
        </div>
        <div class="form-group">
            <label for="fch_facturacion" class="">Fecha de facturacion:
            <input type="date" id="fch_facturacion" name="fch_facturacion" class="form-control" value="<?php echo $row['fecha_facturacion']; ?>" require></label>
            <label for="fch_creacion" class="">Fecha de creación:
            <input type="date" id="fch_creacion" name="fch_creacion" class="form-control" value="<?php echo $row['fecha_creacion']; ?>" require></label>
        </div>
        <br>
        <div class="form-group">
            <a href="facturas.php" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>
</html>