// Add animation to the header
const header = document.querySelector('header');

header.addEventListener('mouseover', function() {
  header.style.backgroundColor = '#555';
});

header.addEventListener('mouseout', function() {
  header.style.backgroundColor = '#333';
});

const homeSection = document.getElementById('home');
const portfolioSection = document.getElementById('portfolio');
const aboutSection = document.getElementById('about');
const contactSection = document.getElementById('contact');

homeSection.addEventListener('click', function() {
  alert('You clicked the "Home" section!');
});



aboutSection.addEventListener('click', function() {
  alert('You clicked the "About" section!');
});

contactSection.addEventListener('click', function() {
  alert('You clicked the "Contact" section!');
});


var slideIndex = 0;
showSlide(slideIndex);

function changeSlide(n) {
  showSlide(slideIndex += n);
}

function showSlide(n) {
  var slides = document.getElementsByClassName("mySlides");
  
  // Wrap around to the first slide if reaching the end
  if (n >= slides.length) {
    slideIndex = 0;
  } else if (n < 0) {
    slideIndex = slides.length - 1;
  }
  
  // Hide all slides
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  // Display the current slide
  slides[slideIndex].style.display = "block";
}


// Add event listeners to each social icon
const socialIcons = document.querySelectorAll('.social-icon');
socialIcons.forEach(icon => {
  icon.addEventListener('mouseover', showTooltip);
  icon.addEventListener('mouseout', hideTooltip);
});

// Show tooltip on mouseover
function showTooltip(event) {
  const tooltip = event.target.dataset.tooltip;
  event.target.setAttribute('data-tooltip', '');
  event.target.classList.add('tooltip');
  event.target.setAttribute('aria-label', tooltip);
}

// Hide tooltip on mouseout
function hideTooltip(event) {
  const tooltip = event.target.getAttribute('aria-label');
  event.target.setAttribute('data-tooltip', tooltip);
  event.target.classList.remove('tooltip');
  event.target.removeAttribute('aria-label');
}
