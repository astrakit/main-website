<?php require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | <?php echo $site_name; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Spline+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="src/images/favicon.png">
    <?php require 'inc/link-style.php'; ?>
</head>

<body>
    <?php require_once 'inc/common-elements.php'; ?>
    <?php require_once 'inc/navbar.php'; ?>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Discover The <span class="highlight">Future Of Chatting</span></h1>
                <p>Astrakit is a free and open-source chat app designed by nerds. Enjoy secure, seamless communication with powerful features and complete transparency, all without any cost.</p>
                <p class="subtext">Join over - satisfied users who have transformed the way they chat with people.</p>
                <div class="cta-buttons">
                    <a href="#download" class="btn primary">Download Now</a>
                    <a href="#features" class="btn secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="phone-mockup">
                    <div class="phone-screen">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="features">
        <h2>Key Features <span class="highlight">That Shine</span></h2>
        <p class="section-intro">Discover the tools that make Astrakit the perfect place to connect, share, and chat effortlessly. From seamless messaging to customizable experiences, we’ve got everything you need to stay connected your way!</p>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-lock"></i>
                <h3>Secure & Encrypted</h3>
                <p>You have control over your data, with options to delete it at any time and customizable encryption methods.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-history"></i>
                <h3>Temporary Message Storage</h3>
                <p>Messages are stored on our servers only until delivered and read, then automatically deleted, ensuring no long-term record on our infrastructure.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-code"></i>
                <h3>Open source & Free</h3>
                <p>We believe that open source software combined with privacy should be accessible to everyone. We're funded only by donations.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-eye"></i>
                <h3>Transparent</h3>
                <p>We operate with complete transparency, providing open access to our source code and development process, by still keeping your data secure at any time.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-puzzle-piece"></i>
                <h3>Feature packed</h3>
                <p>Astrakit is loaded with features that enhance your chatting experience. Stay tuned for upcoming features that will make communication even more enjoyable.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-users"></i>
                <h3>Community Driven</h3>
                <p>Join a vibrant community of users and cats (hehe) who contribute to the continuous improvement and evolution of Astrakit.</p>
            </div>
        </div>
    </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <h2>Experience Astrakit <span class="highlight">Yourself</span></h2>
            <p class="section-intro">Get a glimpse of Astrakit’s sleek design and powerful features in action!</p>
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="src/images/screenshot1.png" alt="Showcase screenshot">
                    <div class="gallery-overlay">
                        <h3>Simple interface</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="src/images/screenshot2.png" alt="Showcase screenshot">
                    <div class="gallery-overlay">
                        <h3>Feature packed</h3>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="src/images/screenshot3.png" alt="Showcase screenshot">
                    <div class="gallery-overlay">
                        <h3>Make Astrakit yours</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team">
        <div class="container">
            <h2>Who Works In <span class="highlight">Our Team</span></h2>
            <p class="section-intro">Discover the talented individuals behind Astrakit and learn how their expertise shapes our platform.</p>
            <div class="testimonial-container">
                <div class="testimonial-card" style="padding: 0 !important;">
                        <iframe src="https://api.astrakit.cc/iframe-profile?username=catpawzz" frameborder="0" height="200px" width="100%" allowtransparency="true"></iframe>
                </div>
                <div class="testimonial-card" style="padding: 0 !important;">
                    <iframe src="https://api.astrakit.cc/iframe-profile?username=noone" frameborder="0" height="200px" width="100%" allowtransparency="true"></iframe>
                </div>
                <div class="testimonial-card" style="padding: 0 !important;">
                        <iframe src="https://api.astrakit.cc/iframe-profile?username=noone" frameborder="0" height="200px" width="100%" allowtransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="download">
        <div class="container">
            <div class="glass-card">
                <h2>Ready to <span class="highlight">Get Started?</span></h2>
                <p>Getting started with Astrakit is completely free and doesn't take long at all! Not convinced? Try it out by yourself below!</p>
                <p class="version-info">Current version: ALPHA | Last updated: -</p>
                <div class="store-buttons">
                    <a href="#" class="store-btn">
                        <i class="fab fa-android"></i>
                        <span>F-Droid</span>
                    </a>
                    <a href="#" class="store-btn">
                        <i class="fab fa-google-play"></i>
                        <span>Google Play</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Get In <span class="highlight">Touch</span></h2>
            <p class="section-intro">We'd love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out.</p>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>contact@astrakit.cc</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-message"></i>
                        <span>@astrakit</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Catland (it's not real)</span>
                    </div>
                    <h4>Find us online</h4>
                    <div class="social-icons">
                        <a href="https://cat-space.net/@astrakit" style="text-decoration: none;"><i class="fab fa-mastodon"></i></a>
                        <a href="https://api.astrakit.cc/@astrakit" style="text-decoration: none;"><img src="/src/images/favicon.png" alt="Favicon" style="height: 16px; width: 16px; vertical-align: middle;"></a>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" placeholder="What would you like to tell us?" required></textarea>
                    </div>
                    <button type="button" class="btn primary" onclick="sendEmail()">Send Email</button>
                    <script>
                        function sendEmail() {
                            var name = document.getElementById('name').value;
                            var email = document.getElementById('email').value;
                            var message = document.getElementById('message').value;
                            var subject = "Astrakit Contact Form";
                            var body = "Name: " + name + "%0D%0AEmail: " + email + "%0D%0AMessage: " + message;
                            window.location.href = "mailto:contact@astrakit.cc?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
                        }
                    </script>
                </form>
            </div>
        </div>
    </section>

    <?php require_once 'inc/footer.php'; ?>

    <script src="src/app.js"></script>
</body>

</html>