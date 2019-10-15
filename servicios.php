<!doctype html>
<html lang="es">
  <head>
    <?php include 'components/head.php'; ?>
    <title>Integra Pymes SGR</title>
  </head>
  <body>
    <div class="sospyme">
  <?php
  include "components/nav.php";
  include 'components/nav-sec.php';
  ?>
    <div class="row subtitle">
      <h2>Queremos conocer tu PyME</h2>
      <div class="col-md-12 bg-grey">
      <div class="items-6 col-md-12 bg-grey">
<div class="servicios-form" id="servicios-form">

  <h3>Ventas Totales Anuales</h3>
    <input type="radio" name="servicios" onclick="myFunction()" id="servicios-micro" value="servicios-micro">$6.740.000<br>
    <input type="radio" name="servicios" onclick="myFunction()" id="servicios-peque" value="servicios-peque">$40.410.000<br>
    <input type="radio" name="servicios" onclick="myFunction()" id="servicios-media-1" value="servicios-media-1">$337.200.000<br>
    <input type="radio" name="servicios" onclick="myFunction()" id="servicios-media-2" value="servicios-media-2">$481.570.000<br>
  </div>

<script type="text/javascript">
  function myFunction(){
    if (document.getElementById('servicios-micro').checked){
      document.getElementById('rta-servicios-micro').style.display = "block";
      document.getElementById('servicios-form').style.display = "none";
    } else if (document.getElementById('servicios-peque').checked) {
      document.getElementById('rta-servicios-peque').style.display = "block";
      document.getElementById('servicios-form').style.display = "none";
    } else if (document.getElementById('servicios-media-1').checked) {
      document.getElementById('rta-servicios-media-1').style.display = "block";
      document.getElementById('servicios-form').style.display = "none";
    } else {
      document.getElementById('rta-servicios-media-2').style.display = "block";
      document.getElementById('servicios-form').style.display = "none";
    }
  } //close myFunction
</script>
              <div class="resultado" id="rta-servicios-micro" style="display: none;">
                <div class="resultadobody">
                  <p class="resultadosub">La categorizacion de tu PyME es</p>
                  <h2>Micro</h2>
                  <p>Podemos ayudarte con propuestas y alternativas de financiamiento específicas para esta Clasificación.<br><br>
                  <b>Accedé a las mejores condiciones de financiamiento para capital de trabajo o inversión en todos los bancos y el mercado de capitales!</b><br><br>
                  Con el aval de Integra Pymes aumentan tus opciones de financiamiento y podrás elegir qué opción le conviene a tu PyME.</p>
                  <a class="btnresultado" href="precalificacion.php">Ir a Precalificación Crediticia</a>
                </div>
              </div>

              <div class="resultado" id="rta-servicios-peque" style="display: none;">
                <div class="resultadobody">
                  <p class="resultadosub">La categorizacion de tu PyME es</p>
                  <h2>Pequeña</h2>
                  <p>Podemos ayudarte con propuestas y alternativas de financiamiento específicas para esta Clasificación.<br><br>
                  <b>Accedé a las mejores condiciones de financiamiento para capital de trabajo o inversión en todos los bancos y el mercado de capitales!</b><br><br>
                  Con el aval de Integra Pymes aumentan tus opciones de financiamiento y podrás elegir qué opción le conviene a tu PyME.</p>
                  <a class="btnresultado" href="precalificacion.php">Ir a Precalificación Crediticia</a>
                </div>
              </div>

              <div class="resultado" id="rta-servicios-media-1" style="display: none;">
                <div class="resultadobody">
                  <p class="resultadosub">La categorizacion de tu PyME es</p>
                  <h2>Mediana Tramo 1</h2>
                  <p>Podemos ayudarte con propuestas y alternativas de financiamiento específicas para esta Clasificación.<br><br>
                  <b>Accedé a las mejores condiciones de financiamiento para capital de trabajo o inversión en todos los bancos y el mercado de capitales!</b><br><br>
                  Con el aval de Integra Pymes aumentan tus opciones de financiamiento y podrás elegir qué opción le conviene a tu PyME.</p>
                  <a class="btnresultado" href="precalificacion.php">Ir a Precalificación Crediticia</a>
                </div>
              </div>

              <div class="resultado" id="rta-servicios-media-2" style="display: none;">
                  <div class="resultadobody">
                    <p class="resultadosub">La categorizacion de tu PyME es</p>
                    <h2>Mediana Tramo 2</h2>
                    <p>Podemos ayudarte con propuestas y alternativas de financiamiento específicas para esta Clasificación.<br><br>
                    <b>Accedé a las mejores condiciones de financiamiento para capital de trabajo o inversión en todos los bancos y el mercado de capitales!</b><br><br>
                    Con el aval de Integra Pymes aumentan tus opciones de financiamiento y podrás elegir qué opción le conviene a tu PyME.</p>
                  <a class="btnresultado" href="precalificacion.php">Ir a Precalificación Crediticia</a>
                </div>
              </div>

          </div>
      </div>
    </div>
  </div>
</div>



<?php include "components/contact.php" ?>
<?php include "components/footer.php" ?>
