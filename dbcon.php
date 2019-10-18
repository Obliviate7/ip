<?php

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
$sql = "CREATE TABLE IF NOT EXISTS calculadora (
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
