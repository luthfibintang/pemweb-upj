<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "pemweb_db";
$port = 3306;

// Cara pertama :
// $conn = mysqli_connect($serverName, $userName, $password, $dbName, $port);

// if(!$conn){
//   die("Connection failed : " . mysqli_error());
// }


// Cara kedua :
try {
  // Enable MySQLi exception mode
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  // Create connection
  $conn = mysqli_connect($serverName, $userName, $password, $dbName, $port);

} catch (mysqli_sql_exception $e) {
  die("Connection failed: " . $e->getMessage());
}

?>