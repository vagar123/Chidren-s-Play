<!DOCTYPE html>
<html>
  <head>
    <title>formulario</title>
  </head>
  <body>
    <center>
      <form action="proveedores.php" method="POST">
        <div>
          <h1>Formulario Proveedores</h1>
          <label>id del Proveedor</label>
          <input type="number" name="datos" placeholder="ID" />

          <br /><br />

          <label>Nombre Proveedores</label>
          <input type="text" name="nombreP" placeholder="Nombre Proveedores" />

          <br /><br />

          <label>Correo Proveedores</label>
          <input type="email" name="correo" placeholder="Correo Proveedores" />

          <br /><br />

          <label>Telefono Proveedores</label>
          <input
            type="number"
            name="telfo"
            placeholder="Telefono Proveedores"
          />

          <br /><br />

          <label>Dirrecciones Proveedores</label>
          <input
            type="text"
            name="direcc"
            placeholder="Dirrecciones Proveedores"
          />

          <br /><br />

          <label>Fecha</label>
          <input type="date" name="fecha" placeholder="Fecha" />

          <br /><br />
          <input type="submit" value="Enviar" name="btn1" />
        </div>
      </form>
    </center>

    <?php 
    if(isset($_POST['btn1'])){
    include("../abrir_conexion.php");

    $datos=$_POST['datos'];
    $nombreP=$_POST['nombreP'];
    $correo=$_POST['correo'];
    $telfo=$_POST['telfo'];
    $direcc=$_POST['direcc'];
    $fecha=$_POST['fecha'];

    $conexion->query("INSERT INTO $tabla10
    (idProveedor,nomProveedor,correoProveedor,telProveedor,direccionProveedor,fechaEntrada)
    values('$datos','$nombreP','$correo','$telfo','$direcc','$fecha')");
    echo"los datos fueron ingresados correctamente";
    include("../cerrar_conexion.php"); } 
    ?>

  </body>
</html>
