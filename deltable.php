<?php
$servername = "localhost";
$username = "ladiesin_b1";
$password = "b1@2019";
$dbname = "ladiesin_batch1";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn)
{
    echo $conn->error;
  }

?>
