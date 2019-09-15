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
<<<<<<< HEAD:precalificacion.php
    <div class="row subtitle">
      <h2>PRECALIFICACION CREDITICIA</h2>
=======

    <div class="home-img row">
      <div class="col-md-12">
        <?php include 'components/nav-sec.php'; ?>
    </div>

>>>>>>> 4b66dd38fab5af5fabb79ac7c764aa9dc6cc432c:contacto.php
    </div>

    <div class="home-boxes row" style="margin-top:0px;">
    <form class="" action="index.html" method="post">
    <div class="col-md-12">
      <div class="col-md-1">

      </div>
      <div class="col-md-5">
        <input style="width:100%" type="text" name="Nombre" value="" placeholder="Nombre:"><br>
        <input style="width:100%" type="text" name="Apellido" value="" placeholder="Apellido:"><br>
        <input style="width:100%" type="email" name="Email" value="" placeholder="Email:"><br>
        <select style="width:100%"  class="" name="tipo">
          <option value="null" disabled selected>Tipo de Necesidad de Financiacion</option>
        </select><br>
        <select style="width:100%"  class="" name="Actividad">
          <option value="null" disabled selected>Actividad</option>
        </select><br>
        <input style="width:100%" type="tel" name="Telefono" value="" placeholder="Telefono:"><br>
      </div>
      <div class="col-md-5">
        <input type="number" style="width:100%" name="Cuit" value="" placeholder="CUIT:"><br>
        <input type="number" style="width:100%" name="Cuit" value="" placeholder="Codigo Actividad AFIP:"><br>
        <input type="file" style="width:100%" name="Cuit" value="" placeholder="Adjuntar balance y las ventas posteriores a su cierre:"><br>
        <textarea name="msj" rows="3" cols="80" placeholder="Dejanos tu mensaje y nos comunicaremos a la brevedad..."></textarea>
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
