<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
} 
</script>

<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Potraviny</title>
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
        
        <!-- Hlavička stránky -->
        
        <header style="hlavicka">

        <h1>POTRAVINY EXTRA SUPER BIO DOBROTY</h1>
        
        <p> Dnes je 
           <?php
            echo date("j.n.Y")
            
            ?> 
        </p>
       
        
        </header>
        
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="vegetables-752153_1920.jpg" alt="Zeleninka">
                    <div class="carousel-caption">
                        <h3>Zelenina</h3>
                        <p>Veškerá naše zelenina pochází z ekologicky udržitelného zemědělství</p>
                    </div>
                </div>

                <div class="item">
                  <img src="vegetables-1085063_1920.jpg" alt="Zelenina">
                    <div class="carousel-caption">
                        <h3>Ovoce</h3>
                        <p>Naše produkty jsou z místního poctivého zemědělství</p>
                    </div>
                </div>

                <div class="item">
                  <img src="apples-1873078_1920.jpg" alt="Ovoce">
                    <div class="carousel-caption">
                        <h3>Sady</h3>
                        <p>Naši ovocnáři spolupracují s místními včelaři</p>
                    </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
            
    
        
        <!-- Sekce O nás -->

        <section class="onas" id="onas">
            

        <h2>O nás</h2>
        <p>Jsme tradiční dodavatelé těch nejkvalitnějších ověřených surovin.<br>
            <a href="VnorCyklUkol.php">
            Naši dodavatelé a jejich zboží</a><br>
            Napište nám na náš <a href="mailto:Dobroty@mail.cz">E-mail:</a>
        </p>
            
    
        <img class="foto-onas" src="cat-7738210_1920.jpg" alt="foto zelenina">
            
            
        <img class="foto-dva" src="cottage-2955582_1920.jpg" alt="foto zeleninaDva">

         <img class="foto-jablko" src="poppies-174276_1920.jpg" alt="foto ovoce">

            <br>
            
    <br><button class="button" onclick="myFunction()">Toggle dark/light mode</button>

            <!-- Sekce Kontakt -->
<section> 
  

    <h3><a href="kontakt.html">Kontakt</a></h3>

    <p>Bohdan Ovocňák<br>
    Sadová 1<br>
    Ovocňákov<br>
    123 00
    </p>
    <p>Telefon: +402 123 321 123<br>
    E-mail:<a href="mailto:Ovocnysvet@mail.com">Ovocnysvet@mail.com</a>
    </p>
</section>

               
         <!-- Patička stránky -->

    <footer class="paticka">

    <p>© 2023, Bohdan Ovocňák<br><br>
        
<!--   <a target="_blank" href="https://icons8.com/icon/19295/star">Star</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
        -->    
            </p>
    
    </footer>
        
    </body>
</html>
    
    

<?php

include "conn.php";

    
?>


