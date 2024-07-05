const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const slider = document.querySelector('.slider');

const scrollAmount = 600; 
const scrollDelay = 2000; 
const cloneOffset = 200; 

let autoScrollInterval; 

prev.addEventListener('click', () => {
  slider.scrollLeft -= scrollAmount;
});

next.addEventListener('click', () => {
  slider.scrollLeft += scrollAmount;
});

function startAutoScroll() {
  autoScrollInterval = setInterval(() => {
    if (slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - cloneOffset) {
      slider.scrollTo({
        left: 0,
        behavior: 'smooth'
      });
    } else {
      slider.scrollLeft += scrollAmount;
    }
  }, scrollDelay);
}

function stopAutoScroll() {
  clearInterval(autoScrollInterval);
}


slider.scrollLeft = scrollAmount;


startAutoScroll();


slider.addEventListener('mouseover', stopAutoScroll);
slider.addEventListener('mouseout', startAutoScroll);
prev.addEventListener('mouseover', stopAutoScroll);
next.addEventListener('mouseover', stopAutoScroll);




