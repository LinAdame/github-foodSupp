<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/style.css">
        
        <style>
            table, th, td {
                border: 1px solid black;
            }
            td {    text-align: center;
                    padding:2px; }
            table {margin: 20px;}
            body {
                background-image: url(pink-gcbf032d93_1920.png);
                font-size: 20px;
            }
        
        </style>
        
    </head>
    <body style="width:1024px; height:768px; margin:auto;">
       

        
    </body>
</html>


<?php

include "conn.php";

$sql = "SELECT Id, Faktura, Dodavatel, Cena FROM faktury";

$faktury = fetchAll( $sql, $conn );



echo "<table>
<tr><th>Faktura (Id)</th><th>Dodavatel</th><th>Zaplaceno</th></tr>";

foreach( $faktury as $d ){
    
    if( $d[ "Cena" ] <= 0 ){
        echo '<tr style="color:red;">';
    }
    else{ 
        echo "<tr>";
    }
        
    echo "<td>" . $d[ "Faktura" ] . " ( " . $d[ "Id" ] . " ) " . "</td> 
    <td>" . $d[ "Dodavatel" ] . "</td>
  
     <td>" . $d[ "Cena" ] . "</td></tr>"
        
     ;
}


echo "</table>";


