

<?php
$MyUsername = "kullanıcı adı";  // kullanıcı adı
$MyPassword = "sifre";  // sifre
$MyHostname = "ip_address";

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("gps",$dbh);
?>


