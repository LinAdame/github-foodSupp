<?php
    include "conn.php";

    //vypíšeme všechny kategorie pro vytvoření políčka select ve formuláři
    $sql = "SELECT Nazev, Id FROM kategorie";
    $kategorie = fetchAll( $sql, $conn );

    $moznosti = "";                 
    foreach( $kategorie as $k ){
        $moznosti .= '<option value="' . $k[ "Id" ] . '">' . 
                     $k[ "Nazev" ] . " (" . $k[ "Id" ] . " )
                     </option>";
    }
?>

<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
        
        <style>
            table, th, td {
              border: 1px solid black;
            }
        </style>
        
    </head>
    <body style="width:1024px; height:768px; margin:auto; margin-top: 20px;">
        
        <form action="" method="POST">
            
            <label for="Kategorie">Kategorie: </label><br>
            <select name="kategorie" value="">
                <?PHP
                    echo $moznosti;
                ?>
            </select><br>
            
            <input type="submit" value="Smazat kategorii" name="Smazat">

        </form> 
        
    </body>
</html>

<?PHP
    //Existuje odeslání formuláře?
    if( isset( $_POST[ "Smazat" ] )){
        
        $sql = "DELETE FROM kategorie WHERE Id = " . $_POST[ "kategorie" ];
        $smazKategorii = akce( $sql, $conn );
    }

    //Vypíšeme tabulku s kategoriemi
    $sql = "SELECT kategorie.Nazev AS Nazev, 
            kategorie.Id AS IdK, 
            FROM kategorie
            JOIN zbozi ON zbozi.Id = zbozi.Kategorie
            GROUP BY kategorie.Id";
    $knihy = fetchAll( $sql, $conn );
    
    echo "<br><br><table>
        <tr><th>kategorie</th><th>Název</th><th>Id</th></tr>";
    foreach( $kategorie as $k ){
        echo "<tr>
                <td>" . $k[ "Nazev" ] . " " . $k[ "IdK" ] . "</td>
                
                <td>" . $k[ "Nazev" ] . " ( " . $k[ "IdK" ] . " )</td>
            
            </tr>";
    }
    echo "</table><br><br>";
