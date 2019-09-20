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
        <label for="Nombre">Nombre:</label><input style="width:100%" type="text" name="Nombre" value=""><br>
        <label for="Apellido">Apellido:</label><input style="width:100%" type="text" name="Apellido" value=""><br>
        <label for="email">Email:</label><input style="width:100%" type="email" name="Email" value=""><br>
        <label for="tel">Teléfono:</label><input style="width:100%" type="tel" name="Telefono" value=""><br>
        <label for="cuit">CUIT:</label><input type="number" style="width:100%" name="cuit" value=""><br>

      </div>

      <div class="col-md-5">
        <label for="Actividad">Actividad:</label><select style="width:100%"  class="" name="Actividad">
          <option value="null" disabled selected></option>
          <option value="Agro">Agro</option>
          <option value="Comercio">Comercio</option>
          <option value="IndustriayMineria">Industria y Minería</option>
          <option value="Servicios">Servicios</option>
          <option value="Construcción">Construccion</option>
        </select><br>
        <label for="codigoafip">Código Actividad AFIP:</label><input type="number" style="width:100%" name="codigoafip" value=""><br>
        <label for="tipo">Tipo de Necesidad de Financiacion:</label><select style="width:100%"  class="" name="tipo">
          <option value="null" disabled selected></option>
          <option value="capital">Capital de Trabajo</option>
          <option value="proyecto">Proyecto de Inversión</option>
        </select><br>
        <label for="balanceyventas">Adjuntar balance y las ventas posteriores a su cierre:</label><input type="file" style="width:100%" name="balanceyventas" value=""><br>
        <textarea name="msj" rows="2" cols="90" placeholder="Dejanos tu mensaje y nos comunicaremos a la brevedad..."></textarea>
        <button type="submit" name="Enviar" value="Enviar" style="float:right;margin-bottom:20px;">ENVIAR</button>
      </div>
      <div class="col-md-1">

      </div>
    </div>
    </form>
    </div>
</div>



<?php include "components/contact.php" ?>
<?php include "components/footer.php" ?>
