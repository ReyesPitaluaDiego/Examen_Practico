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
                  <a class="nav-link active" href="../index.php">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="facturas.php">Facturas</a>
                </li>
          </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="ancho izq_der">
        <h3><span style="font-weight: normal;">Add</span> Employee</h3>
    </div>
    <form action="../DB/crud/createUser.php" method="POST" class="ancho form-control">
        <div class="form-group">
            <label for="name" class="label1">Name:
            <input type="text" id="name" name="name" class="form-control" require></label>
            <label for="lastname" class="label2">Last name:
            <input type="text" id="lastname" name="lastname" class="form-control" require></label>
            <label for="age" class="label3">Age:
            <input type="number" id="age" name="age" class="form-control"></label>
        </div>
        <div class="form-group">
            <label for="email" class="label4">Email Address:
            <input type="email" id="email" name="email" class="form-control" require></label>
            <label for="phone" class="label1">Phone:
            <input type="text" id="phone" name="phone" class="form-control" require></label>
        </div>
        <br>
        <div class="form-group">
            <a href="../index.php" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>
</html>