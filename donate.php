<?php require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate | <?php echo $site_name; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Spline+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="src/images/favicon.png">
    <?php require 'inc/link-style.php'; ?>
</head>

<body>
    <!-- Background elements -->
    <div class="blur-circle circle-1"></div>
    <div class="blur-circle circle-2"></div>
    <div class="blur-circle circle-3"></div>
    <div class="floating-particle particle-1"></div>
    <div class="floating-particle particle-2"></div>
    <div class="floating-particle particle-3"></div>
    <div class="floating-particle particle-4"></div>
    <div class="floating-particle particle-5"></div>
    
    <!-- Include navigation header -->
    <?php include 'inc/navbar.php'; ?>

    <main class="container donate-page">
        <div class="hero-section">
            <h1>Support <span class="highlight">AstraKit</span></h1>
            <p class="lead">Your contribution helps us continue developing open-source tools and resources</p>
        </div>
        
        <section class="donation-info">
            <h2>Why <span class="highlight">Donate</span>?</h2>
            <p class="section-intro">AstraKit is a community-driven project that relies on the support of users like you</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-tools"></i>
                    <h3>Maintain & Improve</h3>
                    <p>Help us maintain and improve our existing tools with regular updates and bug fixes.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-rocket"></i>
                    <h3>Develop New Features</h3>
                    <p>Enable us to develop new features and expand our offerings to meet community needs.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-unlock"></i>
                    <h3>Keep Resources Free</h3>
                    <p>Support our mission to keep our resources freely available to everyone, everywhere.</p>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-users"></i>
                    <h3>Support Our Team</h3>
                    <p>Help support our team of dedicated developers and contributors who make AstraKit possible.</p>
                </div>
            </div>
            
            <div class="glass-card mt-5">
                <h3 class="text-center">Make a <span class="highlight">Donation</span></h3>
                <p class="text-center mb-4">Choose your preferred donation platform:</p>
                
                <div class="donation-platforms">
                    <a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=YOURBUTTONID" class="btn primary donation-btn mb-3">
                        <i class="fab fa-paypal me-2"></i> Donate via PayPal
                    </a>
                    
                    <a target="_blank" href="https://buymeacoffee.com/astrakit" class="btn secondary donation-btn mb-3">
                        <i class="fas fa-mug-hot me-2"></i> Buy us a Coffee
                    </a>
                    
                </div>
                
                <div class="donation-note mt-3 text-center">
                    <small>You'll be redirected to the selected payment processor to complete your donation securely.</small>
                </div>
            </div>
        </section>
        
        <section class="other-ways">
            <h2>Other Ways to <span class="highlight">Support</span></h2>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fab fa-github"></i>
                    <h3>GitHub Sponsors</h3>
                    <p>Support us through GitHub Sponsors for recurring monthly donations.</p>
                    <a href="https://github.com/sponsors/astrakit" class="btn secondary">Become a Sponsor</a>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-code"></i>
                    <h3>Contribute Code</h3>
                    <p>Help improve AstraKit by contributing to our repositories.</p>
                    <a href="https://github.com/astrakit" class="btn secondary">View Projects</a>
                </div>
                
                <div class="feature-card">
                    <i class="fas fa-share-alt"></i>
                    <h3>Spread the Word</h3>
                    <p>Share AstraKit with your network and help us grow our community.</p>
                    <div class="social-icons">
                        <a href="https://twitter.com/share?url=https://astrakit.com" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://astrakit.com" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://astrakit.com" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add visibility class to elements for animation
        const animElements = document.querySelectorAll('.feature-card, .testimonial-card, h2, .section-intro, .glass-card');
        
        // Function to check if element is in viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
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
        
        // Run on scroll
        window.addEventListener('scroll', checkVisibility);
    });
    </script>

    <?php include 'inc/footer.php'; ?>

</body>
</html>
