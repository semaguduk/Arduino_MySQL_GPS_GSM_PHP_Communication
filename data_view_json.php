
<?php

include("dbconnect.php");

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$SQL = "SELECT * FROM gps.gps_veri order by event desc" or die(mysql_error());
$result =  mysql_query($SQL);

if (mysql_num_rows($result) > 0) {
      $response["koordinatlar"] = array();
       while ($row = mysql_fetch_array($result)) {
           $koordinat = array();
           $koordinat["id"] = $row["id"];
           $koordinat["event"]  = $row["event"];
           $koordinat["enlem"]  = $row["enlem"];        
           $koordinat["boylam"] = $row["boylam"]; 
           array_push($response["koordinatlar"], $koordinat);
       }
     $response["success"] = 1;
     echo json_encode($response);
}else{
    $response["success"] = 0;
    $response["message"] = "Herhangi bir kay�t bulunamad�..";
    echo json_encode($response);
}

?>
