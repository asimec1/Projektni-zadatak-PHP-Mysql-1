 const navSlide = () => {
     const burgermenu = document.querySelector('.burgermenu');
     const nav = document.querySelector('.nav-links');
     const navLinks = document.querySelectorAll('.nav-links li');
     //Pojavljivanje samog nav-a
     burgermenu.addEventListener('click',()=>{
         nav.classList.toggle('nav-active');

             //Animacija linkova
     navLinks.forEach((link, index) => {
        if(link.style.animation){
            link.style.animation ='' 
        }else{
           link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`; 
        
    }
    //testiranje provedeno sa console.log naredbom
    });
    //Animacija burgermeni icone
    burgermenu.classList.toggle('toggle');
     });
 
    }

navSlide();