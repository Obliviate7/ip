<?php
if(isset($_POST['submit'])){
    $to = "catalina-delgado@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $razonsocial = $_POST['razonsocial'];
    $cuit = $_POST['CUIT'];
    $financiacion = $_POST['financiacion'];
    $email = $_POST['email'];
    $prefijo = $_POST['prefijo'];
    $telefono = $_POST['telefono'];
    $msj = $_POST['msj'];
    $subject = "FORMULARIO DE CONTACTO WEB";
    $message = echo '
    <html>
    <head>
      <title>lleno el formulario</title>
    </head>
    <body>
      <table>
        <tr>
          <th>Razon Social: </th><th>'$razonsocial'</th>
        </tr>
        <tr>
        <th>CUIT: </th><th>'$cuit'</th>
        </tr>
        <tr>
          <th>Tipo de Necesidad de Financiacion: </th><th>'$financiacion'</th>
        </tr>
        <tr>
          <th>Email: </th><th>'$email'</th>
        </tr>
        <tr>
          <th>Prefijo: </th><th>'$prefijo'</th><th>Telefono: </th><th>'$telefono'</th>
        </tr>
        <tr>
          <th>Mensaje: </th><th>'$msj'</th>
        </tr>
      </table>
    </body>
    </html>
';

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
    <div class="contact">
      <?php
      include "components/nav.php";
      ?>
        <div class="home-img row">
          <div class="col-md-12">
            <?php include 'components/nav-sec.php'; ?>
        </div>
        </div>

      <div class="row subtitle">
        <h2>¿QUÉRES PONERTE EN CONTACTO CON NOSOTROS?</h2>
      </div>

      <div class="col-md-12 bg-grey">
        <div class="home-boxes row" style="margin-top:0px;">
        <form class="" action="contacto.php" method="post">
        <div class="col-md-12 contact-form">
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <label for="nombre">Nombre:</label><input style="width:100%" type="text" name="nombre" value=""><br>
            <label for="apellido">Apellido:</label><input style="width:100%" type="text" name="apellido" value=""><br>
            <label for="razonsocial">RazonSocial:</label><input style="width:100%" type="text" name="razonsocial" value=""><br>
            <label for="CUIT">CUIT:</label><input type="number" style="width:100%" name="CUIT" value=""><br>
          </div>

          <div class="col-md-5">
            <label for="tipo">Tipo de Necesidad de Financiacion:</label><select style="width:100%"  class="" name="tipo">
              <option value="null" disabled selected></option>
              <option value="capital">Capital de Trabajo</option>
              <option value="proyecto">Proyecto de Inversión</option>
            </select><br>
            <label for="email">Email:</label><input style="width:100%" type="email" name="email" value=""><br>
            <div class="col-md-12 contact-nopad">
              <div class="col-md-4 contact-nopad">
                <label for="prefijo">Prefijo:</label><input style="width:90%" type="number" name="prefijo" value="">
              </div>
              <div class="col-md-8 contact-nopad">
                <label for="telefono">Teléfono:</label><input style="width:100%" type="number" name="telefono" value=""><br>
              </div>
            </div>

            <textarea name="msj" rows="2" cols="88" placeholder="Dejanos tu mensaje y nos comunicaremos a la brevedad..."></textarea>
            <button type="submit" name="submit" value="Enviar" style="float:right;margin-bottom:20px;">ENVIAR</button>
          </div>
          <div class="col-md-1">

          </div>
        </div>
        </form>
        </div>
      </div>


      <?php
      include "components/contact.php";
      include "components/footer.php"
      ?>
</div>
