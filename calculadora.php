<!doctype html>
<html lang="es">
  <head>
    <?php include 'components/head.php'; ?>
    <title>Integra Pymes SGR</title>
  </head>
  <body>
    <div class="calculadora">
      <?php
      include "components/nav.php";
      ?>
      <div class="home-img row">
        <div class="col-md-12">
          <?php include 'components/nav-sec.php'; ?>
      </div>
      </div>
      <div class="row subtitle">
        <h2>SIMULADOR DE CHEQUES</h2>
      </div>

      <div class="np-boxes goback col-md-12 bg-white">
        <p class="orange">Calculá tus operaciones de descuento de cheques</p>
        <p>¿Querés conocer el saldo de una operación de descuento de cheques en el mercado de capitales? Ingresá los datos de la operación y te mostramos con la CALCULADORA cuál es el costo de este canal de financiamiento.</p>
        <p class="orange">Financiamiento hasta 360 días</p>
        <p>Descontá los cheques de tus clientes o tus cheques propios en el mercado de capitales con el aval de Avaluar. Financiate hasta 360 DÍAS con esta operatoria.</p>

        <div class="col-md-6">
          <div class="calculadora-box calc-1">
            <h2>Calculadora Descuentos de Cheques</h2>
            <div class="col-md-12">
              <input type="number" name="valordelcheque" value="" placeholder="Valor del cheque:">
            </div>
            <div class="col-md-12">
              <input type="text" data-date-format="DD MMMM YYYY" onfocus="(this.type='date')" name="fechadevenc" value="" placeholder="Fecha de Vencimiento:">
            </div>
            <div class="col-md-12">
              <button type="button" name="button">CALCULAR</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="calculadora-box calc-2">
            <div class="col-md-12">
              <p>Valor del cheque</p>
              <p>Total Interes</p>
              <p class="valorneto">Valor Neto</p>
            </div>
            <p class="disclosure">No incluye Gastos, Comisiones ni IVA.
            La información contenida en este simulador es de carácter meramente informativo, por lo que no genera obligación de ningún tipo.</p>
          </div>
        </div>

      </div>

      </div>
<?php include "components/footer.php" ?>
