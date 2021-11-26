<?php

?>

<!DOCTYPE html>
<html>
 <head>
   
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <title>⚔️GLADIATORGYM⚔️</title>
 </head>
 
<body>
 
  <nav>
  <div class="logo">
          <h4 ><a href="index.php?menu=1"style="color: inherit;">⚔️GLADIATORgym⚔️</a></h4>
        </div>
        <ul class="nav-links" >
          <li>
            <a href="trenirajkao.php?menu=2">💪Treniraj kao gladiator</a>
          </li>
           <li>
             <a href="news.php?menu=3">📰Novosti</a>
            </li>
           <li>
             <a href="contact.php?menu=4">☎️Kontakt</a>
            </li>
            <li>
              <a href="about.php?menu=5">💡O nama</a>
            </li>
           <li>
             <a href="gallery.php?menu=6">🖼️Galerija teretane</a>
            </li>
           <li>
             <a href="clanstvo.php?menu=7">👑Arena</a>
            </li>
          
        </ul>
        <div class="burgermenu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>
      </nav>

      <?php

if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("index.php"); }

else if ($_GET['menu'] == 2) { include("trenirajkao.php"); }
else if ($_GET['menu'] == 3) { include("news.php"); }


else if ($_GET['menu'] == 4) { include("contact.php"); }


else if ($_GET['menu'] == 5) { include("about.php"); }

else if ($_GET['menu'] == 6) { include("gallery.php"); }

else if ($_GET['menu'] == 7) { include("clanstvo.php"); }

?>
  
      <script src="app.js"></script>
      <main>
      
      <div class="blog-section">
          <div class="section-content blog">
               <div class="title"> 
                  <h2 >Novosti</h2>
                  <p>NEWS</p>
                </div>
                  
          
         
        
        
         <div class="cards">
            <div class="card">
                <div class="image-selection">
                    <img src="img/news1.jpg">

                </div>
                <div class="article">
                    <h4>Proširenje teretane</h4>
                    <p class="blog-post_text">Dragi Gladiatori, i budući članovi, narednih dana je planirano da obavimo sve potrebne radove kako bi prostor za teretanu proširili</p>
                   
                </div>
                <div class="blog-view">
                    <a href="news/news3.html" class="button">Pročitaj više</a>
                </div>
                <div class="posted-date">
                    <p>Objavljeno 10.rujna 2021.</p>
                </div>
            </div>
            <div class="card">
                <div class="image-selection">
                    <img src="img/news2.jpg">

                </div>
                <div class="article">
                    <h4>Crossover Sprava</h4>
                    <p class="blog-post_text">Danas ćemo opisati cable crossover spravu.Ova mašina se sastoji od sajli sa obje strane koje omogućavaju niz različitih pokreta</p>
                   
                </div>
                <div class="blog-view">
                    <a href="news/news1.html" class="button">Pročitaj više</a>
                </div>
                <div class="posted-date">
                    <p>Objavljeno 08.kolovoza 2021.</p>
                </div>
            </div>
            <div class="card">
                <div class="image-selection">
                    <img src="img/news3.jpg">

                </div>
                <div class="article">
                    <h4>Voda kao glavno oružje u treningu </h4>
                    <p class="blog-post_text">Pravilna hidracija neizmjerno je bitna za svako živo biće pa tako i ljudski organizam koji je sastavljen od 70% vode.</p>
                   
                </div>
                <div class="blog-view">
                    <a href="news/news2.html" class="button">Pročitaj više</a>
                </div>
                <div class="posted-date">
                    <p>Objavljeno 14.lipnja 2021.</p>
                </div>
            </div>
            <div class="card">
                <div class="image-selection">
                    <img src="img/news4.jpg">

                </div>
                <div class="article">
                    <h4>Sretni blagdani</h4>
                    <p class="blog-post_text">Sve najbolje za nadolazeće blagdane,želi vam team Gladiator!</p>
                   
                </div>
                <div class="blog-view">
                    <a href="news/news4.html" class="button">Pročitaj više</a>
                </div>
                <div class="posted-date">
                    <p>Objavljeno 24.prosinca 2020.</p>
                </div>
            </div>
            <div class="card">
                <div class="image-selection">
                    <img src="img/news5.jpg">

                </div>
                <div class="article">
                    <h4>Osobni treneri</h4>
                    <p class="blog-post_text">Osobni trener može biti izvrstan pokretač da se konačno dovedete u fizičku (ali uz to i psihičku) kondiciju</p>
                   
                </div>
                <div class="blog-view">
                    <a href="news/news5.html" class="button">Pročitaj više</a>
                </div>
                <div class="posted-date">
                    <p>Objavljeno 16.rujna 2020.</p>
                </div>
            </div>

        </div>
    </div>
</div>     
</main>

        
      
      
    
      
      
      
      
      
      
      
      
      
      
           <footer class="footer-distributed">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <div class="footer-right">
  
          <a href="https://github.com/DominikJozinovic/-Projektni-zadatak-HTML-CSS"><img  src="gallery/Octocat.png" title="Github" alt="Github"/></a>
          
  
        </div>
  
        <div class="footer-left">
  
        <p class="footer-links">
            <a class="link-1" href="trenirajkao.php?menu=2">💪Treniraj kao gladiator</a>
  
            <a href="news.php?menu=3">📰Novosti</a>
  
            <a href="contact.php?menu=4">☎️Kontakt</a>
  
            <a href="about.php?menu=5">💡O nama</a>
            
            <a href="gallery.php?menu=6">🖼️Galerija teretane</a>

            <a href="clanstvo.php?menu=7">👑Arena</a>
  
            
          </p>
          <?php

if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("index.php"); }

else if ($_GET['menu'] == 2) { include("trenirajkao.php"); }
else if ($_GET['menu'] == 3) { include("news.php"); }


else if ($_GET['menu'] == 4) { include("contact.php"); }


else if ($_GET['menu'] == 5) { include("about.php"); }

else if ($_GET['menu'] == 6) { include("gallery.php"); }

else if ($_GET['menu'] == 7) { include("clanstvo.php"); }

?>
  
          <p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
        </div>
  
      </footer>
    



     

      </body>
     
    
</html>