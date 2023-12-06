// JavaScript pour animer la section d'accueil lors du défilement
window.addEventListener('scroll', function() {
    const accueil = document.querySelector('#accueil');
    const accueilPosition = accueil.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;
  
    if (accueilPosition < screenHeight * 0.8) {
      accueil.classList.add('active');
    } else {
      accueil.classList.remove('active');
    }
  
    // Animation de la barre de navigation au défilement
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
// JavaScript pour les animations du titre et du paragraphe
const title = document.getElementById('animatedTitle');
const description = document.querySelector('.lead');
const button = document.querySelector('.btn');

// Animation du titre avec textillate.js
$(title).textillate({
  in: {
    effect: 'fadeInUp', // Effet d'apparition du texte
    delayScale: 1.5, // Délai entre chaque lettre
    delay: 50, // Délai initial
    shuffle: true // Mélange des lettres
  }
});

// Animation du paragraphe avec anime.js
anime({
  targets: description,
  opacity: [0, 1], // Animation d'opacité pour le paragraphe
  duration: 2000, // Durée de l'animation en millisecondes
  easing: 'easeInOutQuad' // Type d'animation
});

