<?php 

	

	
	# Database connection
	include ("dbconn.php");

    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	

	
print '

<!DOCTYPE html>
<html>
 <head>
   
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"  href="style.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <title>⚔️GLADIATORGYM⚔️</title>
 </head>
 
<body>
 
  <nav>';
   

 
  
  include("menu.php");
        
  print '
</nav>

<script src="app.js"></script>
<main>';



if (!isset($menu) || $menu == 1) { include("home.php");}

# News
else if ($menu == 2) { include("trenirajkao.php"); }

# Contact
else if ($menu == 3) { include("news.php"); }

# About us
else if ($menu == 4) { include("contact.php"); }

# Register
else if ($menu == 5) { include("about.php"); }

# Signin
else if ($menu == 6) { include("gallery.php"); }

# Admin webpage
else if ($menu == 7) { include("clanstvo.php"); }

print '
      <footer class="footer-distributed">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <div class="footer-right">
  
          <a href="https://github.com/DominikJozinovic/-Projektni-zadatak-HTML-CSS"><img  src="gallery/Octocat.png" title="Github" alt="Github"/></a>
          
  
        </div>
  
        <div class="footer-left">';
     
        include("footer.php");

        print '

          <p>Gladiator gym &copy; 2021 Dominik Jozinović </p>
        </div>
  
      </footer>
    



     

      </body>
     
    
</html>';
?>
