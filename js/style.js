
// Fade-In Section Animation on Scroll
const fadeIns = document.querySelectorAll('.fade-in');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
});


fadeIns.forEach(fadeIn => {
  observer.observe(fadeIn);
});

// Scroll-Triggered Background Changes
window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;

  if (scrollPosition > 300) {
    document.body.style.backgroundColor = '#f0f0f0';
  } else {
    document.body.style.backgroundColor = '#ffffff';
  }
});


// Highlight Active Section in Navbar
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.navbar a');

window.addEventListener('scroll', () => {
  let current = '';
  
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    if (pageYOffset >= sectionTop - 50) {
      current = section.getAttribute('id');
    }
  });

  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href').includes(current)) {
      link.classList.add('active');
    }
  });
});
