<?php 
include ("dbconn.php");
print '

<!DOCTYPE html>
<html>
 <head>
   <title>Welcome to the HARDEST gym in the world</title>
  <meta charset="UTF-8">
  <meta name="description" content="Prvi projektni zadatak iz predmeta    NTPWS">
  <meta name="keywords" content="html css php ntpws web programming">
  <meta name="author" content="Dominik Jozinovic">
  <meta name="viewport" content="width=device-width, initial-            scale=1.0">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
   <link rel="stylesheet" href="style.css">
 </head>
 
<body>
  <header>
     <div class="gladiatorgym"></div>
     <nav>
        <ul class="nav-links">
          <li><a href="index.php?menu=1">#TRENIRAJ<span>KAO</span><span>GLADIATOR</span></a></li>
           <li><a href="index.php?menu=2">Novosti</a></li>
           <li><a href="index.php?menu=3">Kontakt</a></li>
            <li><a href="index.php?menu=4">O nama</a></li>
           <li><a href="index.php?menu=5">Galerija teretane</a></li>
           <li><a href="index.php?menu=6">Postani Gladijator</a></li>
          <div class="tocka"></div>
        <ul>
      </nav>
  </header>';
  <main>';
		

	if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("index.php"); }
	

	else if ($_GET['menu'] == 2) { include("news.php"); }
	

	else if ($_GET['menu'] == 3) { include("contact.php"); }
	

	else if ($_GET['menu'] == 4) { include("about.php"); }

  else if ($_GET['menu'] == 2) { include("gallery.php"); }

  else if ($_GET['menu'] == 2) { include("clanstvo.php"); }
	
	print '
	</main>

    <footer class="footer-distributed">';

			<div class="footer-right">

				<a href="https://github.com/DominikJozinovic/-Projektni-zadatak-HTML-CSS"><img  src="img/GitHubIcon.png" title="Github" alt="Github"/></a>
				

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="index.php?menu=1">Naslovna strana</a>

					<a href="index.php?menu=2">Novosti</a>

					<a href="index.php?menu=3">Kontakt</a>

					<a href="index.php?menu=4">O nama</a>
					
					<a href="index.php?menu=5">Galerija teretane</a>

          <a href="index.php?menu=6">Postani Gladijator</a>

					
				</p>

        if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("index.php"); }
	

        else if ($_GET['menu'] == 2) { include("news.php"); }
        
      
        else if ($_GET['menu'] == 3) { include("contact.php"); }
        
      
        else if ($_GET['menu'] == 4) { include("about.php"); }
      
        else if ($_GET['menu'] == 2) { include("gallery.php"); }
      
        else if ($_GET['menu'] == 2) { include("clanstvo.php"); }

				<p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
			</div>

		</footer>
</body>

</html>';

?>