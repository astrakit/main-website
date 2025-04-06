<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3><?php echo $site_name; ?></h3>
            <p>Astrakit is a free and open-source chat app designed for seamless communication.</p>
            <div class="social-icons">
                <a href="https://cat-space.net/@astrakit" aria-label="Mastodon"><i class="fab fa-mastodon"></i></a>
                <a href="https://app.astrakit.cc/@astrakit" aria-label="Astrakit"><img src="/src/images/favicon.png" alt="Astrakit icon" style="height: 18px; width: 18px; vertical-align: middle;"></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/#features">Features</a></li>
                <li><a href="/#gallery">Gallery</a></li>
                <li><a href="/#team">Team</a></li>
                <li><a href="/#download">Download</a></li>
                <li><a href="/#contact">Contact</a></li>
                <li><a href="/creator-tools">Creator Tools</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Legal</h3>
            <ul>
                <li><a target="_blank" href="https://docs.astrakit.cc/docs/policies/privacy">Privacy Policy</a></li>
                <li><a target="_blank" href="https://docs.astrakit.cc/docs/policies/tos">Terms of Service</a></li>
                <li><a target="_blank" href="https://docs.astrakit.cc/docs/policies/securityrep">Security Notice</a></li>
                <li><a target="_blank" href="https://docs.astrakit.cc/docs/policies/gdpr">GDPR Compliance</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Resources</h3>
            <ul>
                <li><a href="/donate">Donate</a></li>
                <li><a target="_blank" href="https://docs.astrakit.cc">Documentation / Help</a></li>
                <li><a target="_blank" href="https://status.astrakit.cc">Network Status</a></li>
                <li><a target="_blank" href="https://github.com/astrakit">GitHub</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
    </div>
</footer>

<script>
// Add scroll detection for header
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    
    // Function to handle scroll
    function handleScroll() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    // Initialize scroll state
    handleScroll();
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Add visibility class to elements for animation
    const animElements = document.querySelectorAll('.feature-card, .testimonial-card, .gallery-item, h2, .glass-card, .section-intro');
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9 &&
            rect.bottom >= 0
        );
    }
    
    // Add visible class to elements in viewport
    function checkVisibility() {
        animElements.forEach(element => {
            if (isInViewport(element)) {
                element.classList.add('visible');
            }
        });
    }
    
    // Run on load
    checkVisibility();
    
    // Run on scroll with debounce for performance
    let scrollTimer;
    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(checkVisibility, 100);
    });
});
</script>