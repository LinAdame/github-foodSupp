<?php

include "conn.php";

$sql = "SELECT Nazev FROM dodavatel";
$dodavatel = fetchAll( $sql, $conn );

foreach( $dodavatel as $d ){
    echo $d[ "Nazev" ] . ", ";
}