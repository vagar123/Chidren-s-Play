<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child's Play</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/inventario.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="../img/logoH.png" alt="logo" width="150" style="margin-right: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;">
            <span class="navbar-toggler-icon" style="background-color:white;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.html" style="color:white;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mi cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 mb-5 pt-4">
        <h2 class="titulo pb-4">Inventarios actuales</h2>
        <nav class="navbar navbar-light bg-light navbarD">
            <a class="navbar-brand" href="#">Herramientas</a>
            <ul class="list-group list-group-horizontal">
                <button type="button" class="btn btn-success"><a href="registrarInventarios.php" style="color:white; text-decoration:none;">Generar nuevo inventario</a></button>
            </ul>
        </nav>

        <div>
            <form class="form-inline pt-4 pb-4" method="POST" action="inventario.php">
                <div class="form-group mb-2">
                    <label>Consulta la información del administrador que generó un inventario. Ingresa el Id del inventario</label>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" name="codigo" placeholder="Id del inventario" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="boton">Consultar</button>
            </form>
        </div>

        <table class='table table-bordered' style="margin-bottom:35px;">
            <thead>
                <tr>
                    <th scope='col'>Código</th>
                    <th scope='col'>Fecha</th>
                    <th scope='col'>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../abrir_conexion.php");
                $resultados = mysqli_query($conexion, "SELECT * FROM $tabla3");
                while ($consulta = mysqli_fetch_array($resultados)) {
                    echo "
                  <tr>
                    <th>" . $consulta['idInventario'] . "</th>
                    <td>" . $consulta['fechaInventario'] . "</td>
                    <td>" . $consulta['descripcion'] . "</td>
                  </tr>
                ";
                }
                if (isset($_POST['boton'])) {

                    $codigo = $_POST['codigo'];

                    $resultados = mysqli_query($conexion, "SELECT $tabla8.idUsuario, $tabla8.nomUsuario, $tabla8.apellUsuario, $tabla3.idInventario FROM $tabla3 INNER JOIN $tabla10 ON $tabla3.idInventario = $tabla10.idInv INNER JOIN $tabla8 ON $tabla10.idUsua = $tabla8.idUsuario WHERE $tabla3.idInventario=$codigo");

                    while ($consulta = mysqli_fetch_array($resultados)) {
                        echo "
                        <table class='table table-bordered' style='margin-top: 35px; margin-bottom:40px;'>
                        <p>Información de los inventarios, consulta en el formulario para conocer más información</p>
                        <thead>
                        <tr>
                        <th scope='col'>Código</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Apellido</th>
                        <th scope='col'>Inventario que generó</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>" . $consulta['idUsuario'] . "</th>
                            <td>" . $consulta['nomUsuario'] . "</td>
                            <td>" . $consulta['apellUsuario'] . "</td>
                            <td>" . $consulta['idInventario'] . "</td>
                            </tr>
                        </tbody>
                        </table>
                        ";
                    }
                }
                include("../cerrar_conexion.php");
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>