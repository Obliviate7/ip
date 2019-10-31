<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
?>
<html>
    <head>
      <?php include 'components/head.php'; ?>
        <title>Administrador</title>
    </head>
    <body>
<?php
      include 'dbcon.php';

      $sql = "SELECT badlar, comision_SGR, arancel_bolsa, arancel_mercado FROM calculadora ORDER BY ID DESC LIMIT 1";
      $resultado = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($resultado);
      $badlar = $row["badlar"];
      $comision_SGR = $row["comision_SGR"];
      $arancel_bolsa = $row["arancel_bolsa"];
      $arancel_mercado = $row["arancel_mercado"];
  ?>
      <?php
      include "components/nav.php";
      ?>
<div class="admincontent col-md-12 content-fluid ">
        <p>Esta pagina es solo visible para el administrador.<br>
        Completar debajo los valores necesarios para el utilizar la calculadora con el siguiente formato:<br>
        <strong>57,68% cargarlo -> 57.68.</strong></p>
        <div class="col-md-6">
      <form action="admin.php" method="post">
          <p>
              <label for="badlar">Badlar:</label><input type="text" class="form-control" name="badlar" id="badlar">
          </p>
          <p>
              <label for="comisionSGR">Comisión SGR:</label>
              <input type="text" class="form-control" name="comision_SGR" id="comisionSGR">
          </p>
          <p>
              <label for="arancelBolsa">Arancel Bolsa:</label>
              <input type="text" class="form-control" name="arancel_bolsa" id="arancelBolsa">
          </p>
          <p>
              <label for="arancelMercado">Arancel Mercado:</label>
              <input type="text" class="form-control" name="arancel_mercado" id="arancelMercado">
          </p>
          <input type="submit" class="btn btn-primary" value="Submit">
      </form>
        </div>

        <div class="col-md-6">
          <p>Datos Actuales</p>
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <td>Badlar:</td>
                <td class="text-right"><?php echo "$badlar"; ?></td>
              </tr>
              <tr>
                <td>Comisión SGR:</td>
                <td class="text-right"><?php echo "$comision_SGR"; ?></td>
              </tr>
              <tr>
                <td>Arancel Bolsa:</td>
                <td class="text-right"><?php echo "$arancel_bolsa"; ?></td>
              </tr>
              <tr>
              <td>Arancel Mercado:</td>
              <td class="text-right"><?php echo "$arancel_mercado"; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

    </body>
</html>

<?php
if($_POST){
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "ipDB");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$badlar = mysqli_real_escape_string($link, $_REQUEST['badlar']);
$comision_SGR = mysqli_real_escape_string($link, $_REQUEST['comision_SGR']);
$arancel_bolsa = mysqli_real_escape_string($link, $_REQUEST['arancel_bolsa']);
$arancel_mercado = mysqli_real_escape_string($link, $_REQUEST['arancel_mercado']);

// Attempt insert query execution
$sql = "INSERT INTO calculadora (badlar, comision_SGR, arancel_bolsa, arancel_mercado) VALUES ('$badlar', '$comision_SGR', '$arancel_bolsa', '$arancel_mercado')";
if(mysqli_query($link, $sql)){
    echo "Datos actualizados correctamente, por favor refresque la página.";
} else{
    echo "ERROR: no fue posible cargar los datos $sql. " . mysqli_error($link);
}

// Close connection
}
?>
