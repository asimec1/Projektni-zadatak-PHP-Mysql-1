<!DOCTYPE html>
<html>
 <head>
   
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <title>⚔️GLADIATORGYM⚔️</title>
 
 </head>
 
<body>
 
  <nav>
  <div class="logo">
          <h4 ><a href="../index.php?menu=1"style="color: inherit;">⚔️GLADIATORgym⚔️</a></h4>
        </div>
        <ul class="nav-links" >
          <li>
            <a href="../trenirajkao.php?menu=2">💪Treniraj kao gladiator</a>
          </li>
           <li>
             <a href="../news.php?menu=3">📰Novosti</a>
            </li>
           <li>
             <a href="../contact.php?menu=4">☎️Kontakt</a>
            </li>
            <li>
              <a href="../about.php?menu=5">💡O nama</a>
            </li>
           <li>
             <a href="../gallery.php?menu=6">🖼️Galerija teretane</a>
            </li>
           <li>
             <a href="../clanstvo.php?menu=7">👑Arena</a>
            </li>
          
        </ul>
        <div class="burgermenu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        </div>
      </nav>

      <?php

if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("../index.php"); }

else if ($_GET['menu'] == 2) { include("../trenirajkao.php"); }
else if ($_GET['menu'] == 3) { include("../news.php"); }


else if ($_GET['menu'] == 4) { include("../contact.php"); }


else if ($_GET['menu'] == 5) { include("../about.php"); }

else if ($_GET['menu'] == 6) { include("../gallery.php"); }

else if ($_GET['menu'] == 7) { include("../clanstvo.php"); }

?>
  
      <script src="../app.js"></script>
      

      <main>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
       
      <div class = "n1info">
         
            <div class = "inner-container">
              <h1>Cable crossover</h1>
              <p class="text"> Kada prvi put uđete u Gladiator gym  centar prvo što ćete ugledati brojne sprave postavljene tako da vam omogućavaju vježbe za svaki dio tjela. Kada sjednete za određenom spravom, ona drži vaše tjelo u odgovarajućem položaju i vodi ga kroz pokrete koji izazivaju kontrakcije određenih mišića, a sve što vi treba da uradite jeste da gurate ili vučete rukohvate ili šipku.
                Sprave za vježbanje su idealne za početnike, jer pružaju odabir opterećenja i prate vaše tjelo kroz pokrete, tako da je mogućnost povrede minimalna. Sprave uglavnom izoliraju određeni mišić, tako da možete biti sigurni da radite baš njega u određenoj vježbi. Putem sprava, početnici imaju mogućnost da spoznaju pravilno izvođenje pokreta i lagano napreduju u svom programu vježbanja.
                Danas ćemo opisati cable crossover spravu.Ova mašina se sastoji od sajli sa obje strane koje omogućavaju niz različitih pokreta (razvlačenja, biceps pregib, triceps ekstenzija, letenje za ramena, vučenja za leđa i sl.) Ova mašina je jako zanimljiva jer pruža mogućnost slobodnih pokreta. Za ovu mašinu potrebno vam je dobro poznavanje ljudskog tjela i malo mašte, a kada je ogromna gužva u našem klubu ona može pružiti idealnu zamjenu za mnoge vježbe i mašine.
              </p>
         
          </div>

      </div>
		
        
      
      </main>
      <footer class="footer-distributed">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <div class="footer-right">
  
          <a href="https://github.com/DominikJozinovic/-Projektni-zadatak-HTML-CSS"><img  src="../gallery/Octocat.png" title="Github" alt="Github"/></a>
          
  
        </div>
  
        <div class="footer-left">
  
          <p class="footer-links">
            <a class="link-1" href="../trenirajkao.php?menu=1">💪Treniraj kao gladiator</a>
  
            <a href="../trenirajkao.php?menu=2">📰Novosti</a>
  
            <a href="../contact.html">☎️Kontakt</a>
  
            <a href="../about.html">💡O nama</a>
            
            <a href="../gallery.html">🖼️Galerija teretane</a>

            <a href="../login.html">👑Arena</a>
  
            
          </p>

          <?php

if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("../index.php"); }

else if ($_GET['menu'] == 2) { include("../trenirajkao.php"); }
else if ($_GET['menu'] == 3) { include("../news.php"); }


else if ($_GET['menu'] == 4) { include("../contact.php"); }


else if ($_GET['menu'] == 5) { include("../about.php"); }

else if ($_GET['menu'] == 6) { include("../gallery.php"); }

else if ($_GET['menu'] == 7) { include("../clanstvo.php"); }

?>
  
          <p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
        </div>
  
      </footer>
    



     

      </body>
     
    
</html>