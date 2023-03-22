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

$sql = "SELECT Nazev, Id, Cena, Mnozstvi FROM zbozi";

$zbozi = fetchAll( $sql, $conn );



echo "<table>
<tr><th>Název potraviny</th><th>Id</th><th>Cena</th><th>Množství</th></tr>";

foreach( $zbozi as $d ){
    
    if( $d[ "Mnozstvi" ] <= 0 ){
        echo '<tr style="color:red;">';
    }
    else{ 
        echo "<tr>";
    }
        
    echo "<td>" . $d[ "Nazev" ] . " ( " . $d[ "Id" ] . " ) " . "</td> 
    <td>" . $d[ "Id" ] . "</td>
    <td>" . $d[ "Cena" ] . "</td>
     <td>" . $d[ "Mnozstvi" ] . "</td></tr>"
        
     ;
}


echo "</table>";




