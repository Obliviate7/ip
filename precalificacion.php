<?php
if(isset($_POST['submit'])){
    $to = "catalina-delgado@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $cuit = $_POST['CUIT'];
    $actividad = $_POST['actividad'];
    $codigoafip = $_POST['codigoafip'];
    $financiacion = $_POST['financiacion'];
    $msj = $_POST['msj'];
    $subject = "FORMULARIO DE CONTACTO WEB";
    $message = $nombre . " " . $apellido . " ha completado el formulario!" . "\n\n" .
    "Email: " . $email . "\n\n" .
    "Telefono: " . $telefono . "\n\n" .
    "CUIT: " . $cuit . "\n\n" .
    "Actividad: " . $actividad . "\n\n" .
    "Código Actividad  AFIP: " . $codigoafip . "\n\n" .
    "Tipo de Necesidad de Financiacion: " . $financiacion . "\n\n" .
    "Mensaje: " . $msj ;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $nombre . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!doctype html>
<html lang="es">
  <head>
    <?php include 'components/head.php'; ?>
    <title>Integra Pymes SGR</title>
  </head>
  <body>
    <div class="precalificacioncreditica">
  <?php
  include "components/nav.php";
  include 'components/nav-sec.php';
  ?>
    <div class="row subtitle">
      <h2>PRECALIFICACION CREDITICIA</h2>
    </div>

    <div class="home-boxes row bg-grey">
    <form class="" action="index.html" method="post">
    <div class="col-md-12">

      <div class="col-md-1"></div>

      <div class="col-md-5">
        <label for="nombre">Nombre:</label><input style="width:100%" type="text" name="nombre" value=""><br>
        <label for="apellido">Apellido:</label><input style="width:100%" type="text" name="apellido" value=""><br>
        <label for="email">Email:</label><input style="width:100%" type="email" name="email" value=""><br>
        <label for="telefono">Teléfono:</label><input style="width:100%" type="tel" name="telefono" value=""><br>
        <label for="cuit">CUIT:</label><input type="number" style="width:100%" name="cuit" value=""><br>

      </div>

      <div class="col-md-5">
        <label for="Actividad">Actividad:</label><select style="width:100%"  class="" name="actividad">
          <option value="null" disabled selected></option>
          <option value="Agro">Agro</option>
          <option value="Comercio">Comercio</option>
          <option value="IndustriayMineria">Industria y Minería</option>
          <option value="Servicios">Servicios</option>
          <option value="Construcción">Construccion</option>
        </select><br>
        <label for="codigoafip">Código Actividad AFIP:</label><input type="number" style="width:100%" name="codigoafip" value=""><br>
        <label for="financiacion">Tipo de Necesidad de Financiacion:</label><select style="width:100%"  class="" name="financiacion">
          <option value="null" disabled selected></option>
          <option value="capital">Capital de Trabajo</option>
          <option value="proyecto">Proyecto de Inversión</option>
        </select><br>
        <label for="balanceyventas">Adjuntar balance y las ventas posteriores a su cierre:</label><input type="file" style="width:100%" name="balanceyventas" value=""><br>
        <textarea name="msj" rows="2" cols="90" placeholder="Dejanos tu mensaje y nos comunicaremos a la brevedad..."></textarea>
        <button type="submit" name="submit" value="Enviar" style="float:right;margin-bottom:20px;">ENVIAR</button>
      </div>
      <div class="col-md-1">

      </div>
    </div>
    </form>
    </div>
</div>



<?php include "components/contact.php" ?>
<?php include "components/footer.php" ?>
