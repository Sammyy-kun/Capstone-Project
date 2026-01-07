const navLinks = document.querySelectorAll('.nav-link');

const sections = document.querySelectorAll("section");
let currentSection = 0;
let isScrolling = false;

window.addEventListener("wheel", (e) => {
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

