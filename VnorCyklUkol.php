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
            body {
                background-image: url(background-3017167_1920.jpg);
            }
        </style>
        
    </head>
    <body style="width:1024px; height:768px; margin:auto;">

        
    </body>
</html>


<?php

include "conn.php";

$sql = "SELECT Id, Nazev
        FROM dodavatel";
$dodavatel = fetchAll( $sql, $conn );


foreach( $dodavatel as $d ){
    
    $sql = "SELECT Nazev, Kategorie, Cena, Popis
        FROM zbozi
        WHERE Dodavatel = " . $d[ "Id" ];
    $zbozi = fetchAll( $sql, $conn );
    
    echo "<table>
    <tr><th>" . $d[ "Nazev" ] . "</th>
            <th>(" . $d[ "Id" ] . ")</th></tr>";

        foreach( $zbozi as $z ){
        echo "<tr>
            <td>" . $z[ "Nazev" ] . "</td>
            <td>" . $z[ "Kategorie" ] . "</td>
            <td>" . $z[ "Cena" ] . "</td>
            <td>" . $z[ "Popis" ] . "</td>
        </tr>";
    }
    echo "</table><br><br>";
}
