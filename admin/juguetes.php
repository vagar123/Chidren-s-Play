<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child's Play</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="../img/logoH.png" alt="logo" width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registrarse</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form method="POST" action="juguetes.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Código</label>
                    <input type="text" class="form-control" name="codigo">
                </div>
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Categoria</label>
                    <input type="text" class="form-control" name="categoria">
                </div>
                <div class="form-group col-md-6">
                    <label>Valor</label>
                    <input type="text" class="form-control" name="valor">
                </div>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="desc">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="boton">Registrar</button>
        </form>
    </div>

    <?php
        if(isset($_POST['boton'])){
            include("../abrir_conexion.php");

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $valor = $_POST['valor'];
            $descripcion = $_POST['desc'];
            $fecha = $_POST['fecha'];
            $estado = $_POST['estado'];

            $conexion->query("INSERT INTO $tabla9 (idJuguete,nomJuguete,categoria,valor_venta,descripcion,fechaPublica,estado) values ('$codigo','$nombre','$categoria','$valor','$descripcion','$fecha','$estado')");

            echo"Los datos fueron ingresados correctamente";

            include("../cerrar_conexion.php");
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>