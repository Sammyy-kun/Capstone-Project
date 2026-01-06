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

// Testimonial Carousel
document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.carousel-track');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  const items = document.querySelectorAll('.carousel-item');
  
  if (!track || !prevBtn || !nextBtn || items.length === 0) return;
  
  let currentIndex = 0;
  const itemsToShow = 3;
  const maxIndex = items.length - itemsToShow;

  function updateCarousel() {
    const itemWidth = items[0].offsetWidth;
    const gap = 24; // gap-6 = 24px
    const offset = -(currentIndex * (itemWidth + gap));
    track.style.transform = `translateX(${offset}px)`;
  }

  nextBtn.addEventListener('click', () => {
    if (currentIndex < maxIndex) {
      currentIndex++;
      updateCarousel();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  // Update carousel on window resize
  window.addEventListener('resize', updateCarousel);
});