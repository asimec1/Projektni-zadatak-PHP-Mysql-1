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
     
  <div class="container">
		<div class="contact-box">
			<div class="left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.8133672584645!2d16.013225815759938!3d45.875043413955645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d9b236649f79%3A0xd24a661fcb22b410!2s%C5%A0tefanovec%20ul.%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1637703141976!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
			<div class="right">
				<h2>Kontaktirajte nas</h2>
				<input type="text" class="field" placeholder="Ime i prezime">
				<input type="email" class="field" placeholder="Email">
				<input type="number" class="field" placeholder="Broj mobitela/telefona">
				<textarea placeholder="Poruka" class="field"></textarea>
				<button class="btn">Pošalji</button>
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

