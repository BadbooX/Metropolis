
let header = document.querySelector("nav");
console.log("window.scrollY");
window.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    header.style.opacity = 0.8;
  } else {
    header.style.opacity = 1;
  }
});
/* fin du parallax */

/* Caroussel */
const prev = document.querySelectorAll('.prev');
const next = document.querySelectorAll('.next');

const track = document.querySelector('.track');
const carousselWidth = document.querySelectorAll('.caroussel-container').offsetWidth;

for (i = 0; i < next.length; i++) { 
   
next[i].addEventListener('click', () => {
    track.style.transform = 'translateX(-'+String(window.innerWidth)+'px)';
  })

  }

  for (i = 0; i < prev.length; i++) { 

    prev[i].addEventListener('click', () => {
        track.style.transform = 'translateX('+String(window.innerWidth/20)+'px)';
      })
      
}




