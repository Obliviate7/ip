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

        include 'dbcon.php';

        $sql = "SELECT badlar, comision_SGR, arancel_bolsa, arancel_mercado FROM calculadora ORDER BY ID DESC LIMIT 1";
        $resultado = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($resultado);



         if(isset($_POST['submit'])) {
?>
           <style type="text/css">#resultadoscalculadora{
             display:block;
          }</style>
          <?php
          if($_POST){
             //Save the values in variable
             $fechadevenc = $_POST['fechadevenc'];
             $fechadevenc = str_replace('/', '-', $fechadevenc);
             $fechadevenc = (strtotime($fechadevenc));

             $desde = (date("d/m/Y"));
             $desde = str_replace('/', '-', $desde);
             $desde = (strtotime($desde));


              $badlar = $row["badlar"] / 100;
             $tasa1 = $badlar +  (3/100);
             $tasa2 = $badlar +  (6/100);
              $comision_SGR = $row["comision_SGR"] / 100;
              $arancel_bolsa = $row["arancel_bolsa"] / 100;
              $arancel_mercado = $row["arancel_mercado"] / 100;

             $plazo = ($fechadevenc - $desde) / 86400;
             $valordelcheque = $_POST['valordelcheque'];
             $valordelcheque = (int)$valordelcheque;
             $findeano = '2019/12/31';
             $findeano = str_replace('/', '-', $findeano);
             $findeano = (strtotime($findeano));


             function dto(){
               global $fechadevenc;
               global $findeano;
               global $tasa1;
               global $valordelcheque;
               global $plazo;
               global $tasa2;

               if ($fechadevenc <= $findeano) {
                   return ($valordelcheque * $tasa1 * $plazo / 365);
                 } else if ($fechadevenc > $findeano){
                   return ($valordelcheque * $tasa2 * $plazo / 365);
                 }
             };

             $descuento = dto();

             $gastos = ((($valordelcheque * $arancel_bolsa * $plazo / 365)) + ((($valordelcheque - $descuento * 10)) * $arancel_mercado)) * 1.21;
             $comision = (($valordelcheque * $plazo * $comision_SGR / 365) + ($valordelcheque * 0.002 * 1.21));
             $valorneto = $valordelcheque-((($valordelcheque - $descuento* 10)/10) - $gastos -  $comision);

             $cft = ((($descuento + $gastos + $comision) / $valordelcheque )*10 * 365 / $plazo)*10;

         }

         $descuento = number_format((float)$descuento, 2, '.', '');
         $gastos = number_format((float)$gastos, 2, '.', '');
         $comision = number_format((float)$comision, 2, '.', '');
         $valorneto = number_format((float)$valorneto, 2, '.', '');
         $cft = number_format((float)$cft, 2, '.', '');

         mysqli_close($conn);}
        ?>


        <div class="col-md-6" id="resultadoscalculadora">
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
  									<td class="text-right"><?php echo "$cft" ."%" ; ?></td>
  								  </tr>
  								</tbody>
                </table>
  						</div>
            </div>
<br>
            <p class="disclosure">No incluye Gastos, Comisiones ni IVA.
            La información contenida en este simulador es de carácter meramente informativo, por lo que no genera obligación de ningún tipo.</p>
          </div>
        </div>

      </div>


      </div>
      <?php          if(isset($_POST['submit'])) { ?>
      <script type="text/javascript">
      function showhide() {
        var x = document.getElementById("resultadoscalculadora");
          x.style.display = "block";
      }
      </script>
    <?php } ?>
<?php include "components/footer.php" ?>
