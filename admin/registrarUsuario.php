<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child's Play</title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="./juguetes.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="../img/logoH.png" alt="logo" width="150"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color:white;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clientes</a>
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

    <nav class="navbar navbar-light" style="border-bottom: 1px solid rgb(233, 233, 233); background-color: rgb(255, 255, 255);">
    <a class="navbar-brand" style="color:#e63378;">Usuarios / Registrar Usuario</a>
    <button type="button" class="btn btn-info"><a href="usuarios.php" style="color:white; text-decoration:none;">Atrás</a></button>
  </nav>

    <div class="container m-5 p-5" style="border: 1px solid #cccccc">
        <div>
            <p>Diligencia el formulario para registrar un nuevo cliente en el sistema</p>
        </div>
        <form method="POST" action="registrarUsuario.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Código</label>
                    <input type="text" class="form-control" name="codigo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="form-group col-md-6">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Correo electrónico</label>
                    <input type="email" class="form-control" name="correo">
                </div>
                <div class="form-group col-md-6">
                    <label>Teléfono</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Género</label>
                    <select class="form-control" name="genero">
                        <option>Seleccionar</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Rol</label>
                    <select class="form-control" name="rol">
                        <option>Seleccionar</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Cliente">Cliente</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="boton">Registrar</button>
        </form>

        <?php
        if (isset($_POST['boton'])) {
            include("../abrir_conexion.php");

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $genero = $_POST['genero'];
            $rol = $_POST['rol'];

            $conexion->query("INSERT INTO $tabla8 (idUsuario,nomUsuario,apellUsuario,correoUsuario,teleUsuario,generoUsuario,rolUsuario) values ('$codigo','$nombre','$apellido','$correo','$telefono','$genero','$rol')");

            echo '
                <script type="text/javascript">
                Swal.fire({
                    icon: "success",
                    title: "Generación exitosa",
                    text: "El nuevo usuario fue ingresado correctamente!",
                })
            ';

            include("../cerrar_conexion.php");
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>