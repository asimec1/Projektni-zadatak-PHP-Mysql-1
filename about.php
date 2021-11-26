
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
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
       
      <div class = "ainfo">
        <video width="50%" controls poster="img/video-cover.jpg" >
          <source src="video/Gym Promo video _ Gym commercial _ Cinematic fitness film _ Fitness commercial _ fitness promo video.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
            <div class = "ainner-container">
           
              <p class="atext">Napravljena od profesionalca za profesionalce, Gladiator gym ima sve na jednom mjestu. Snagu,funkcionalnost i kondiciju.
                <p class="atext">Dođi i uvjeri se!</p>
                <p class="btext"><time datetime="2021-06-14">14. lipnja 2021.</time>, ekskluzivno je snimljena prva reklama novog prostora u GladiatorGym-u.</p>
          <p class="btext">Video courtesy of <a href="https://www.youtube.com/watch?v=4-zjQvTDnbw&ab_channel=SynergyFilm" target="">ignite.com</a></p>
         
		</p> 
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

?>>
  
          <p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
        </div>
  
      </footer>
    



     

      </body>
     
    
</html>

