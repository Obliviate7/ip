<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:index.php'); die();
    }
    if(isset($_POST['submit'])){
      $username = $_POST['username']; $password = $_POST['password'];
      if($username === 'admin' && $password === '1nt3gr4'){
        $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
      } {
        echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
      }
    }

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ipDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE calculadora (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
badlar VARCHAR(30) NOT NULL,
comision_SGR VARCHAR(30) NOT NULL,
arancel_bolsa VARCHAR(30) NOT NULL,
arancel_mercado VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla calculadora creada exitosamente";
} else {
    echo "Error creanto la tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>
<body>
  <div class="container">
    <h3 class="text-center">Login</h3>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
</body>
</html>
