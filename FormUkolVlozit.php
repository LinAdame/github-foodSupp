<?php
    include "conn.php";
/*
    //vypíšeme všechny dodavatele pro vytvoření políčka select ve formuláři
    $sql = "SELECT Id, Nazev, Zeme
            FROM dodavatel";
    $dodavatele = fetchAll( $sql, $conn );

    $moznosti = "";
    foreach( $dodavatele as $k ){
        $moznosti .= '<option value="' . $k[ "Id" ] . '">' .
                     $k[ "Nazev" ] . " (" . $k[ "Zeme" ] . ")
                     </option>";
        // .= znamená: $moznosti = $moznosti . "text, který přidáváme na konec";
    }*/
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
          <!--  <label for="dodavatel">Dodavatel: </label><br>
            <select name="dodavatel" value="">
                <?PHP
                  //  echo $moznosti;
                ?>
            </select><br>   -->

            <label for="Nazev">Název: </label><br>
            <input type="text" name="Nazev" value="" placeholder="Zadejte popis kategorie">
            <br>
            
            <label for="Popis">Popis: </label><br>
            <textarea name="Popis" value="" rows="4" cols="50"></textarea>
            <br>
            
            <label for="Url">Url: </label><br>
            <input type="text" name="Url" value="">
            <br><br>

            <input type="submit" value="Vložit" name="Vlozit">

        </form> 
        
    </body>
</html>

<?PHP
    //Existuje odeslání formuláře?
    if( isset( $_POST[ "Vlozit" ] )){
        
        $sql = 'INSERT INTO kategorie ( Nazev, Popis, Url ) 
                VALUES( "' . $_POST[ "Nazev" ] . '", "' . $_POST[ "Popis" ] . '", "' . $_POST[ "Url" ] . '" )';
        $vlozKategorii = akce( $sql, $conn );
    }

    //Vypíšeme tabulku s kategoriemi
    $sql = "SELECT kategorie.Nazev AS Nazev, 
            kategorie.Id AS Id,
            kategorie.Popis AS Popis
            FROM kategorie"
           ;


    $kategorie = fetchAll( $sql, $conn );
    
    echo "<br><br><table>
        <tr><th>Kategorie</th><th>Popis</th></tr>";
    foreach( $kategorie as $k ){
        echo "<tr>
                <td>" . $k[ "Nazev" ] . " </td>
                <td>" . $k[ "Popis" ] . " </td>

               
            </tr>";
    }
    echo "</table><br><br>";











