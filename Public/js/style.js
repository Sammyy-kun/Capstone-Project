//For Scroll Animation on landing page
const navLinks = document.querySelectorAll('.nav-link');

const sections = document.querySelectorAll("section");
let currentSection = 0;
let isScrolling = false;

window.addEventListener("wheel", (e) => {
  const productsSection = document.getElementById('products');
  const aboutSection = document.getElementById('about');
  
  if (productsSection) {
    const rect = productsSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    
    if (rect.top < windowHeight + 200 && rect.bottom > -200) {
      return;
    }
  }
  
  if (aboutSection && e.deltaY > 0) {
    const aboutRect = aboutSection.getBoundingClientRect();
    if (aboutRect.top <= 0 && aboutRect.bottom > 0) {
      return;
    }
  }

  if (isScrolling) return;
  isScrolling = true;

  if (e.deltaY > 0) {
    currentSection = Math.min(currentSection + 1, sections.length - 1);
  } else {
    currentSection = Math.max(currentSection - 1, 0);
  }

  sections[currentSection].scrollIntoView({ behavior: "smooth", block: "start" });

  setTimeout(() => {
    isScrolling = false;
  }, 800);
});




