<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
?>
<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        This is admin page view able only by logged in users.
      <form action="admin.php" method="post">
          <p>
              <label for="badlar">Badlar:</label>
              <input type="text" name="badlar" id="badlar">
          </p>
          <p>
              <label for="comisionSGR">Comisión SGR:</label>
              <input type="text" name="comision_SGR" id="comisionSGR">
          </p>
          <p>
              <label for="arancelBolsa">Arancel Bolsa:</label>
              <input type="text" name="arancel_bolsa" id="arancelBolsa">
          </p>
          <p>
              <label for="arancelMercado">Arancel Mercado:</label>
              <input type="text" name="arancel_mercado" id="arancelMercado">
          </p>
          <input type="submit" value="Submit">
      </form>
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
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);}
?>
