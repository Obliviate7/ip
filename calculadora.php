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
        <p>Descontá los cheques de tus clientes o tus cheques propios en el mercado de capitales con el aval de Integra Pymes SGR. Financiate hasta 360 DÍAS con esta operatoria.</p>

        <div class="col-md-6">
          <div class="calculadora-box calc-1">
            <h2>Calculadora Descuentos de Cheques</h2>
            <form class="calcu-form" action="calculadora.php" method="post">

              <input type="number" id="valordelcheque" name="valordelcheque" value="" placeholder="Valor del cheque:" required>
              <input type="text" id="fechadevenc" name="fechadevenc" value="" placeholder="Fecha de Vencimiento:" data-date-format="DD MMMM YYYY" onfocus="(this.type='date')" required>
              <input type="submit" name="submit" value="CALCULAR">
            </form>
          </div>
        </div>

        <?php
         if(isset($_POST['submit'])) {
             //Save the values in variable
             $valordelcheque = $_POST['valordelcheque'];
             $fechadevenc = $_POST['fechadevenc'];
             $valorneto = 
             $descuento =
             $gastos =
             $comision =
             //Calculate here
             $total = $valordelcheque * $fechadevenc;

             /* Now you can use $total either to echo straight in your page,
            or inside another input field */
         }
        ?>


        <div class="col-md-6">
          <div class="calculadora-box calc-2">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
								<tbody>
                 <tr>
									 <td>Valor Neto</td>
								   <td class="text-right"><?php echo "$valorneto"; ?></td>
								 </tr>
							</tbody>
            </table>
              <div class="datosadicionales">
  								<h3>Datos adicionales</h3>
  							<table>
  								<tbody>
                    <tr>
    									<td>Descuento</td>
    									<td class="text-right"><?php echo "$descuento"; ?></td>
  								  </tr>
    								<tr>
    									<td>Gastos Agente de Bolsa sin IVA</td>
    									<td class="text-right"><?php echo "$gastos"; ?></td>
    								</tr>
    								<tr>
    									<td>Comisión SGR ( 3,85% Anual)</td>
    									<td class="text-right"><?php echo "$comision"; ?></td>
    								</tr>
  									<tr>
  									<td>CFT (costo financiero total actualizado) Anualizado</td>
  									<td class="text-right"><?php echo "$cft"; ?></td>
  								  </tr>
  								</tbody>
                </table>
  						</div>
            </div>

            <p class="disclosure">No incluye Gastos, Comisiones ni IVA.
            La información contenida en este simulador es de carácter meramente informativo, por lo que no genera obligación de ningún tipo.</p>
          </div>
        </div>

      </div>


      </div>
<?php include "components/footer.php" ?>
