// Mobile nav toggle
const navToggle = document.getElementById('navToggle');
const navLinks = document.querySelector('.nav-links');
navToggle.onclick = () => {
    navLinks.classList.toggle('open');
};

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
            navLinks.classList.remove('open');
        }
    });
});

// Highlight active nav link on scroll
const sections = document.querySelectorAll('section');
const navItems = document.querySelectorAll('.nav-links li a');
window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 80;
        if (pageYOffset >= sectionTop) {
            current = section.getAttribute('id');
        }
    });
    navItems.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});

// Testimonial carousel
const testimonials = document.querySelectorAll('.testimonial');
const dots = document.querySelectorAll('.carousel-dot');
let currentTestimonial = 0;

function showTestimonial(idx) {
    testimonials.forEach((t, i) => {
        t.classList.toggle('active', i === idx);
        dots[i].classList.toggle('active', i === idx);
    });
}

dots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
        currentTestimonial = idx;
        showTestimonial(idx);
    });
});

// Auto-rotate testimonials every 6 seconds
setInterval(() => {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    showTestimonial(currentTestimonial);
}, 6000);

// Initial state
showTestimonial(0);