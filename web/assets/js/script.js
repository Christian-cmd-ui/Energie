/*let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(slideIndex) {
    slides.forEach((slide, index) => {
        if (index === slideIndex) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
  }
  document.addEventListener("click", function(event) {
    var dropdown = document.getElementById("dropdown");
    var dropdownContent = document.getElementById("dropdownContent");
    if (!dropdown.contains(event.target)) {
      dropdownContent.style.display = 'none';
    }
  });  
// Automatic slide change (optional)
setInterval(nextSlide, 5000); */
let slideIndex = 0;

function showSlide(n) {
  const slides = document.getElementsByClassName("slide");
  if (n >= slides.length) {
    slideIndex = 0;
  }
  if (n < 0) {
    slideIndex = slides.length - 1;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}

function nextSlide() {
  showSlide(++slideIndex);
}

function prevSlide() {
  showSlide(--slideIndex);
}

document.addEventListener("DOMContentLoaded", function() {
  showSlide(slideIndex);
});
var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
  
// Attend que le document soit chargé
$(document).ready(function(){
  // Ajoute un gestionnaire d'événements de clic aux liens de navigation des onglets
  $('ul.nav-tabs li a').on('click', function(event) {
      // Empêche le comportement de lien par défaut
      event.preventDefault();

      // Récupère l'index de l'élément de navigation sur lequel l'utilisateur a cliqué
      var index = $(this).parent().index();

      // Cible l'élément de contenu de l'onglet correspondant en fonction de son index
      var tab_content = $('.tab-content .tab-pane').eq(index);

      // Supprime la classe active de tous les contenus d'onglet
      $('.tab-content .tab-pane').removeClass('active');

      // Ajoute la classe active à l'onglet correspondant
      tab_content.addClass('active');
  });
});
