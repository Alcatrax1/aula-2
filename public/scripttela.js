const carouselInner = document.querySelector('.carousel-inner');
const prevBtn = document.querySelector('.carousel-prev');
const nextBtn = document.querySelector('.carousel-next');
const items = document.querySelectorAll('.carousel-item');
let activeIndex = 0;

function showSlide(index) {
  if (index < 0) {
    activeIndex = items.length - 1;
  } else if (index >= items.length) {
    activeIndex = 0;
  } else {
    activeIndex = index;
  }

  const translateX = -activeIndex * items[0].offsetWidth;
  carouselInner.style.transform = `translateX(${translateX}px)`;
}

prevBtn.addEventListener('click', () => showSlide(activeIndex - 1));
nextBtn.addEventListener('click', () => showSlide(activeIndex + 1));

// Inicializar o carrossel
showSlide(activeIndex);
