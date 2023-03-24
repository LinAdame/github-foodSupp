<?php
    include "conn.php";

    //vypíšeme všechny kategorie pro vytvoření políčka select ve formuláři
    $sql = "SELECT Id, Nazev FROM kategorie";
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
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/style.css">
        
        <style>
            table, th, td {
              border: 1px solid black;
            }
        </style>
        
    </head>
    <body style="width:1024px; height:768px; margin:auto; margin-top: 20px;">
        
        <form action="" method="POST">
            
            <label for="Kategorie">Kategorie: </label><br>
            <select name="Kategorie" value="">
                <?PHP
                    echo $moznosti;
                ?>
            </select><br>
            
            <label for="Nazev">Nový název: </label><br>
            <input type="text" value="" name="Nazev" placeholder="Zde zadejte nový název kategorie" size="40">
            
            <input type="submit" value="Upravit kategorii" name="Upravit">

        </form> 
        
    </body>
</html>

<?PHP
    //Existuje odeslání formuláře?
    if( isset( $_POST[ "Upravit" ] )){
        
        $sql = 'UPDATE kategorie SET Nazev = "' . $_POST[ "Nazev" ] . '" WHERE Id = ' . $_POST[ "Kategorie" ];
        $zmenKategorii = akce( $sql, $conn );
            //znovu načteme stránku kvůli správnému načtení názvu změněné kategorie v select tagu (inputu)
        header("Refresh:0");
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
