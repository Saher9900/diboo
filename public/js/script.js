// DIBOO FASHION - JavaScript for Scroll Animations and Interactions

document.addEventListener('DOMContentLoaded', function() {
    // Scroll Animation Observer
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(element => {
        observer.observe(element);
    });

    // Product Filter Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filterValue = this.getAttribute('data-id');

            productItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.classList.remove('hidden');
                    // Re-trigger animation
                    const card = item.querySelector('.product-card');
                    card.classList.remove('visible');
                    setTimeout(() => {
                        card.classList.add('visible');
                    }, 100);
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });

    // Smooth Scroll for Navigation Links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Navbar Background Change on Scroll
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.15)';
        } else {
            navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        }
    });

    // Form Submission Handler (Contact Form)
    const contactForm = document.querySelector('.contact-form-card form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Simple validation
            if (name && email && subject && message) {
                // Show success message (in a real app, this would send data to a server)
                alert('شكرًا لتواصلكم معنا! سنرد عليكم في أقرب وقت ممكن.');
                contactForm.reset();
            } else {
                alert('يرجى ملء جميع الحقول المطلوبة.');
            }
        });
    }

    // Add staggered animation delay for product cards
    const productCards = document.querySelectorAll('.product-card');
    // productCards.forEach((card, index) => {
    //     card.style.transitionDelay = `${index * 0.1}s`;
    // });

    // Add staggered animation delay for feature cards
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    // Add staggered animation delay for value cards
    const valueCards = document.querySelectorAll('.value-card');
    valueCards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    // Mobile Menu Close on Link Click
    const mobileMenuLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const navbarToggler = document.querySelector('.navbar-toggler');

    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992) {
                navbarCollapse.classList.remove('show');
            }
        });
    });

    // Add loading animation for images (placeholder for future image loading)
    const productImages = document.querySelectorAll('.product-image');
    productImages.forEach(image => {
        image.addEventListener('load', function() {
            this.classList.add('loaded');
        });
    });

    // Parallax effect for hero section (subtle)
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.5;
            heroSection.style.backgroundPositionY = `${scrolled * parallaxSpeed}px`;
        });
    }

    // Add hover effect enhancement for product cards
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-15px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Counter Animation for Statistics (if added in future)
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start);
            }
        }, 16);
    }

    // Initialize tooltips (if Bootstrap tooltips are used)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Add active state to current page in navigation
    // const currentPath = window.location.pathname;
    // const currentPage = currentPath.split('/').pop() || 'index.html';
    
    // navLinks.forEach(link => {
    //     const linkHref = link.getAttribute('href');
    //     if (linkHref === currentPage) {
    //         link.classList.add('active');
    //     } else {
    //         link.classList.remove('active');
    //     }
    // });

    console.log('DIBOO FASHION - Website initialized successfully');
});
