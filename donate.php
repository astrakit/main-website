<?php require_once 'inc/config.php'; ?>
<?php	
$page_title = "Donate | Astrakit";
$page_description = "Support Astrakit and help us continue developing free, open-source software for everyone.";
?>
<!DOCTYPE html>
<html lang="en">

    <?php require_once 'inc/head.php'; ?>	

<body>
    <?php require_once 'inc/common-elements.php'; ?>
    <?php require_once 'inc/navbar.php'; ?>

    <main class="container donate-page">
        <div class="hero-section">
            <h1>Support <span class="highlight">Astrakit</span></h1>
            <p class="lead">Your contribution helps us continue developing free, open-source tools for everyone</p>
        </div>
        
        <section class="impact-section">
            <h2 class="text-center">Your Support <span class="highlight">Makes a Difference</span></h2>
            <p class="section-intro">Every donation directly impacts what we can build and how quickly we can improve Astrakit</p>
            
            <div class="impact-grid">
                <div class="impact-item">
                    <div class="impact-number">100%</div>
                    <div class="impact-text">Of donations go directly toward development and server costs</div>
                </div>
                <div class="impact-item">
                    <div class="impact-number">All</div>
                    <div class="impact-text">Users benefit from each improvement we make</div>
                </div>
                <div class="impact-item">
                    <div class="impact-number">0</div>
                    <div class="impact-text">Cost to use Astrakit, keeping communication free for everyone</div>
                </div>
            </div>
        </section>
        
        <section class="donation-info">
            <h2 class="text-center">Ways to <span class="highlight">Support</span></h2>
            <p class="section-intro">Choose the donation method that works best for you</p>
            
            <div class="donation-methods">
                <div class="donation-method">
                    <i class="fab fa-paypal"></i>
                    <h3>PayPal</h3>
                    <p>Make a one-time or recurring donation using PayPal. Quick, easy, and secure.</p>
                    <a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=YOURBUTTONID" class="btn primary">
                        Donate with PayPal
                    </a>
                </div>
                
                <div class="donation-method">
                    <i class="fas fa-mug-hot"></i>
                    <h3>Buy Me a Coffee</h3>
                    <p>A simple way to show appreciation and support our team with a virtual coffee.</p>
                    <a target="_blank" href="https://buymeacoffee.com/astrakit" class="btn primary">
                        Buy a Coffee
                    </a>
                </div>
                
                <div class="donation-method">
                    <i class="fab fa-github"></i>
                    <h3>GitHub Sponsors</h3>
                    <p>Become a monthly sponsor through GitHub and support our ongoing development.</p>
                    <a target="_blank" href="https://github.com/sponsors/astrakit" class="btn primary">
                        Become a Sponsor
                    </a>
                </div>
            </div>
            
            <div class="donation-cta">
                <h2>Make a <span class="highlight">Donation</span></h2>
                <p>Every contribution helps us improve Astrakit and keep it freely available for everyone</p>
                
                <div class="donation-amount-options">
                    <div class="donation-amount">$5</div>
                    <div class="donation-amount active">$10</div>
                    <div class="donation-amount">$25</div>
                    <div class="donation-amount">$50</div>
                    <div class="donation-amount">$100</div>
                    <div class="donation-amount">Custom</div>
                </div>
                
                <a href="https://www.paypal.com/donate/?hosted_button_id=YOURBUTTONID" class="btn primary" style="min-width: 200px;">
                    <i class="fas fa-heart me-2"></i> Donate Now
                </a>
                
                <div class="appreciation-message">
                    <i class="fas fa-heart"></i>
                    Thank you for supporting our mission to create free and open-source communication tools!
                </div>
            </div>
        </section>
        
        <section class="other-ways">
            <h2 class="text-center">Other Ways to <span class="highlight">Help</span></h2>
            <p class="section-intro">You can also support Astrakit without financial contribution</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-code"></i>
                    <h3>Contribute Code</h3>
                    <p>Help improve Astrakit by contributing to our open-source repositories on GitHub.</p>
                    <a href="https://github.com/astrakit" class="btn secondary">View Projects</a>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-bug"></i>
                    <h3>Report Issues</h3>
                    <p>Help us identify and fix bugs by reporting issues you encounter while using Astrakit.</p>
                    <a href="https://astrakit.featurebase.app" class="btn secondary">Report an Issue</a>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-share-alt"></i>
                    <h3>Spread the Word</h3>
                    <p>Share Astrakit with your friends and on social media to help us grow our community.</p>
                    <div class="social-icons">
                        <a href="https://twitter.com/share?url=https://astrakit.cc" target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://astrakit.cc" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://astrakit.cc" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'inc/footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const animElements = document.querySelectorAll('.feature-card, .impact-item, .donation-method, h2, .section-intro, .glass-card');
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
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
        window.addEventListener('scroll', checkVisibility);
        const donationAmounts = document.querySelectorAll('.donation-amount');
        donationAmounts.forEach(amount => {
            amount.addEventListener('click', function() {
                donationAmounts.forEach(a => a.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
    </script>
</body>

</html>
