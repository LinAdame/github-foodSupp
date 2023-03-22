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

$sql = "SELECT Nazev, Id, Cena
        FROM zbozi";

$zbozi = fetchAll( $sql, $conn );

echo "<table>
<tr><th>Název</th><th>Id</th><th>Cena</th></tr>";

foreach( $zbozi as $z ){
    
    $sql = "SELECT zbozi.Nazev
            FROM zbozi"
    $z = fetchAll( $sql, $conn );
}
















