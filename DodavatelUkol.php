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
        </style>
        
    </head>
    <body style="width:1024px; height:768px; margin:auto;">

    </body>
</html>


<?php

include "conn.php";

$sql = "SELECT Id, Nazev FROM dodavatel";

$dodavatel = fetchAll( $sql, $conn );

echo "<ul>";
foreach( $dodavatel as $d ){
    
   $sql = "SELECT COUNT( Id ) AS Pocet
        FROM dodavatel
        WHERE Id = " . $d[ "Id" ];
    $pocet = fetchAssoc ( $sql, $conn );
  
    echo "<li>" . $d[ "Nazev" ] . " ( " . $pocet[ "Pocet" ] . " )</li>";
}
 
echo "</ul>";