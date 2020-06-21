<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = "localhost";
$user = "root";
$pass = "";
$date = "UsersUMSF";
$link = mysqli_connect($host,$user,$pass,$date) or die("FAILED ".mysqli_error($link));

?>