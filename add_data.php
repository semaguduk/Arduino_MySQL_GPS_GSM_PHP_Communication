<?php
// Connect to MySQL
include("dbconnect.php");

$SQL = "INSERT INTO gps.gps_veri (event,enlem ,boylam) VALUES ('".$_GET["gelenevent"]."','".$_GET["gelenenlem"]."', '".$_GET["gelenboylam"]."')";

mysql_query($SQL);
?>
