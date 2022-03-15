/* Parallax */
const parallax = document.getElementById('kaamoulox');

window.addEventListener('scroll', () => {
    parallax.style.backgroundPositionY = -window.scrollY/5  + "px";
    
});

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

const track = document.querySelectorAll('.track');
const carousselWidth = document.querySelectorAll('.caroussel-container').offsetWidth;

next.addEventListener('click', () => {
  track.style.transform = `translateX(-${carousselWidth}px)`;
})

prev.addEventListener('click', () => {
  track.style.transform = `translateX(-${0}px)`;
})



/* fin du caroussel */
