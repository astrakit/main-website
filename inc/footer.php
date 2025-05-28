<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3><?php echo $site_name; ?></h3>
            <p>Astrakit is a free and open-source chat app designed for seamless communication and collaboration.</p>
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
                <li><a target="_blank" href="https://github.com/astrakit">GitHub ORG</a></li>
                <li><a target="_blank" href="https://astrakit.featurebase.app">Report Issues</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <a href="https://www.buymeacoffee.com/astrakit"><img src="https://img.buymeacoffee.com/button-api/?text=Support our cause&emoji=😸&slug=astrakit&button_colour=8bcc5b&font_colour=000000&font_family=Inter&outline_colour=000000&coffee_colour=FFDD00" /></a>
        <p>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
    </div>
</footer>

<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="astrakit" data-description="Support me on Buy me a coffee!" data-message="" data-color="#8bcc5b" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    function handleScroll() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    handleScroll();
    window.addEventListener('scroll', handleScroll);
    const animElements = document.querySelectorAll('.feature-card, .testimonial-card, .gallery-item, h2, .glass-card, .section-intro');
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9 &&
            rect.bottom >= 0
        );
    }
    function checkVisibility() {
        animElements.forEach(element => {
            if (isInViewport(element)) {
                element.classList.add('visible');
            }
        });
    }
    checkVisibility();
    let scrollTimer;
    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(checkVisibility, 100);
    });
});
</script>