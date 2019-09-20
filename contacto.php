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
        <form class="" action="index.html" method="post">
        <div class="col-md-12 contact-form">
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <label for="Nombre">Nombre:</label><input style="width:100%" type="text" name="Nombre" value=""><br>
            <label for="Apellido">Apellido:</label><input style="width:100%" type="text" name="Apellido" value=""><br>
            <label for="RazonSocial">RazonSocial:</label><input style="width:100%" type="text" name="RazonSocial" value=""><br>
            <label for="CUIT">CUIT:</label><input type="number" style="width:100%" name="CUIT" value=""><br>
          </div>

          <div class="col-md-5">
            <label for="tipo">Tipo de Necesidad de Financiacion:</label><select style="width:100%"  class="" name="tipo">
              <option value="null" disabled selected></option>
              <option value="capital">Capital de Trabajo</option>
              <option value="proyecto">Proyecto de Inversión</option>
            </select><br>
            <label for="email">Email:</label><input style="width:100%" type="email" name="Email" value=""><br>
            <div class="col-md-12 contact-nopad">
              <div class="col-md-4 contact-nopad">
                <label for="pref">Prefijo:</label><input style="width:90%" type="number" name="Prefijo" value="">
              </div>
              <div class="col-md-8 contact-nopad">
                <label for="tel">Teléfono:</label><input style="width:100%" type="number" name="Telefono" value=""><br>
              </div>
            </div>

            <textarea name="msj" rows="2" cols="88" placeholder="Dejanos tu mensaje y nos comunicaremos a la brevedad..."></textarea>
            <button type="submit" name="Enviar" value="Enviar" style="float:right;margin-bottom:20px;">ENVIAR</button>
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
