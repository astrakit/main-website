document.addEventListener('DOMContentLoaded', () => {
    // Animate elements when they come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    // Observe all feature cards, testimonial cards, gallery items
    document.querySelectorAll('.feature-card, .testimonial-card, .gallery-item, .section-intro, h2, .glass-card').forEach(item => {
        observer.observe(item);
    });

    // Enhanced smooth scrolling for navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            
            // If it's just "#", scroll to top
            if (targetId === '#') {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                return;
            }
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Get header height for offset
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                
                // Smooth scroll with header offset
                window.scrollTo({
                    top: targetPosition - headerHeight - 20, // Additional 20px padding
                    behavior: 'smooth'
                });
                
                // Update URL hash without causing a jump
                history.pushState(null, null, targetId);
            }
            
            // Close mobile menu if it's open
            const nav = document.querySelector('nav');
            if (nav.classList.contains('active')) {
                nav.classList.remove('active');
                document.querySelector('.mobile-menu-btn').classList.remove('active');
                document.querySelector('.mobile-menu-btn i').className = 'fas fa-bars';
            }
        });
    });
    
    // Ensure proper highlighting of active nav item
    const highlightActiveNavItem = () => {
        const scrollPosition = window.scrollY;
        const headerHeight = document.querySelector('header').offsetHeight;
        
        // Get all sections with IDs
        document.querySelectorAll('section[id]').forEach(section => {
            const sectionTop = section.offsetTop - headerHeight - 100;
            const sectionHeight = section.offsetHeight;
            const sectionId = '#' + section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                // Remove active class from all nav links
                document.querySelectorAll('nav a').forEach(link => {
                    link.classList.remove('active-nav');
                });
                
                // Add active class to current section's nav link
                document.querySelector(`nav a[href="${sectionId}"]`)?.classList.add('active-nav');
            }
        });
    };
    
    // Call on scroll and on page load
    window.addEventListener('scroll', highlightActiveNavItem);
    highlightActiveNavItem();

    // Header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.style.padding = '1rem 5%';
            header.style.backgroundColor = 'rgba(22, 22, 22, 0.9)';
        } else {
            header.style.padding = '2rem 5%';
            header.style.backgroundColor = 'rgba(22, 22, 22, 0.7)';
        }
    });
    
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('nav');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
            
            const icon = mobileMenuBtn.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            }
        });
    }
    
    // Form submission handling
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Form submission logic would go here
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    }
    
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Newsletter subscription logic would go here
            alert('Thank you for subscribing to our newsletter!');
            newsletterForm.reset();
        });
    }
    
    // Placeholder for missing images
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('error', function() {
            this.style.backgroundColor = '#333';
            this.style.display = 'flex';
            this.style.alignItems = 'center';
            this.style.justifyContent = 'center';
            this.alt = 'Image not found';
            
            // Don't recursively trigger the error handler
            this.removeEventListener('error', arguments.callee);
        });
    });

    // Enhanced scroll effect for animations
    const scrollElements = document.querySelectorAll('.feature-card, .testimonial-card, .gallery-item, .section-intro, h2, .glass-card');
    const elementInView = (el, percentageScroll = 100) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop <= 
            ((window.innerHeight || document.documentElement.clientHeight) * (percentageScroll/100))
        );
    };

    const displayScrollElement = (element) => {
        element.classList.add('visible');
    };

    const hideScrollElement = (element) => {
        // Only hide if we want to re-animate on scroll up
        // element.classList.remove('visible');
    };

    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 85)) {
                displayScrollElement(el);
            } else {
                hideScrollElement(el);
            }
        });
    };

    // Add event listener for scroll
    window.addEventListener('scroll', () => {
        handleScrollAnimation();
    });
    
    // Handle animations on initial load
    handleScrollAnimation();
    
    // Dynamic header padding based on scroll position
    const updateHeaderPadding = () => {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    
    window.addEventListener('scroll', updateHeaderPadding);
    updateHeaderPadding();
});
