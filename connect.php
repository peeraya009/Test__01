<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dev_2019";


$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if (!$conn) {
  echo "<h1>Connection Fail</h1>" . mysqli_connect_error();
}
else{
    //echo "<h1>Connection Successful</h1>";
}
?>