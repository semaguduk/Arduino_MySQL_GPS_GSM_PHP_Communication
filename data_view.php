

<html>

<head>
    <title>Arduino Gps Log</title>

    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
    padding-right: 20px;
                padding-left: 20px;
                color: #003399;
        }
        .table_titles {
    color: #FF00FF;
    background-color: #000;
        }
        .table_cells_odd {
    background-color: #CCC;
        }
        .table_cells_even {
    background-color: #FAFAFA;
        }
        table {
    border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
</head>

    <body>
        <h1>Arduino Gps Log</h1>
    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            <td class="table_titles">id</td>
            <td class="table_titles">event</td>
            <td class="table_titles">enlem</td>
            <td class="table_titles">boylam</td>

          </tr>
<?php

include("dbconnect.php");

$SQL = "SELECT * FROM gps.gps_veri order by event desc" or die(mysql_error());

$result =  mysql_query($SQL);



if (!empty($oddrow)) {
    if ($oddrow)
    {
        $css_class=' class="table_cells_odd"';
    }
    else
    {
        $css_class=' class="table_cells_even"';
    }

    $oddrow = !$oddrow;
}

         echo '<tr>';
/** @var TYPE_NAME $css_class */

while ($row = mysql_fetch_array($result)) {
  
    echo ' <td' . $css_class . '>' . $row["id"] . '</td>';

    echo '<td' . $css_class . '>' . $row["event"] . '</td>';
    echo '<td' . $css_class . '>' . $row["enlem"] . '</td>';
    echo '<td' . $css_class . '>' . $row["boylam"] . '</td>';
    echo '</tr>';
}
?>
</table>
</body>
</html>


