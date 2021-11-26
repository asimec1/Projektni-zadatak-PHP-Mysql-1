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
          <h4 ><a href="index.html"style="color: inherit;">⚔️GLADIATORgym⚔️</a></h4>
        </div>
        <ul class="nav-links" >
          <li>
            <a href="trenirajkao.html">💪Treniraj kao gladiator</a>
          </li>
           <li>
             <a href="news.html">📰Novosti</a>
            </li>
           <li>
             <a href="contact.html">☎️Kontakt</a>
            </li>
            <li>
              <a href="about.html">💡O nama</a>
            </li>
           <li>
             <a href="gallery.html">🖼️Galerija teretane</a>
            </li>
           <li>
             <a href="clanstvo.html">👑Arena</a>
            </li>
          
        </ul>
        <div class="burgermenu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>
      </nav>
      <script src="app.js"></script>
      

        <div class= "containerc">
          <div class= "cardc">
          <div class="inner-box" id="cardc">
            <div class="card-front">
            <h2>Dobrodošli natrag!</h2>
            <form>
              <input type= "email" class="input-box" placeholder="Adresa e-pošte" required>
              <input type= "password" class="input-box" placeholder="Lozinka" required>
              <button type="submit" class="submit-btn">Prijavi se</button>
              <input type="checkbox"><span> Zapamti me</span>
            </form>
            <button type="button" class="btnc" onclick="openRegister()">Želim postati Gladiator</button>
            <a href="">Zaboravljena lozinka</a>
            </div>
            <div class="card-back">
              <h2>Registracija</h2>
            <form>
              <input type= "text" class="input-box" placeholder="Vaše ime i prezime" required>
              <input type= "email" class="input-box" placeholder="Adresa e-pošte" required>
              <input type= "search" class="input-box" placeholder="Država" required>
              <input type= "text" class="input-box" placeholder="Adresa stanovanja" required>
              <input type= "password" class="input-box" placeholder="Lozinka" required>
              <button type="submit" class="submit-btn">Registriraj se</button>
              
              
             
            
            </form>
            <button type="button" class="btnc" onclick="openLogin()">Prijavi se s postojećim računom</button>
            <a href="">Zaboravljena lozinka</a>
            </div>
          </div>
          </div>

          <script>
            var card = document.getElementById("cardc");

            function openRegister(){
              cardc.style.transform = "rotateY(-180deg)";

            }

            function openLogin(){
              cardc.style.transform = "rotateY(0deg)";
              
            }

          </script>




        </div>
       
        
      
     
      <footer class="footer-distributed">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <div class="footer-right">
  
          <a href="https://github.com/DominikJozinovic/-Projektni-zadatak-HTML-CSS"><img  src="gallery/Octocat.png" title="Github" alt="Github"/></a>
          
  
        </div>
  
        <div class="footer-left">
  
          <p class="footer-links">
            <a class="link-1" href="trenirajkao.html">💪Treniraj kao gladiator</a>
  
            <a href="news.html">📰Novosti</a>
  
            <a href="contact.html">☎️Kontakt</a>
  
            <a href="about.html">💡O nama</a>
            
            <a href="gallery.html">🖼️Galerija teretane</a>

            <a href="clanstvo.html">👑Arena</a>
  
            
          </p>
  
          <p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
        </div>
  
      </footer>
    



     

      </body>
     
    
</html>