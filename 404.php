<?php require_once 'inc/config.php'; ?>
<?php	
$page_title = "404 | Astrakit";
$page_description = "Astrakit is a free and open-source chat app designed for seamless communication. Discover its features, download the app, and join our community today!";
?>
<!DOCTYPE html>
<html lang="en">
        <?php require_once 'inc/head.php'; ?>

<body>
    <div class="blur-circle circle-1"></div>
    <div class="blur-circle circle-2"></div>
    <div class="blur-circle circle-3"></div>
    <div class="floating-particle particle-1"></div>
    <div class="floating-particle particle-2"></div>
    <div class="floating-particle particle-3"></div>

    <?php require_once 'inc/navbar.php'; ?>

    <section class="hero">
        <div class="container">
            <div class="error-container">
                <i class="fas fa-map-signs error-icon"></i>
                <div class="error-code">404</div>
                <h1 class="error-message">Page Not Found</h1>
                <p class="error-description">Oops! The page you're looking for doesn't exist or has been moved. Let us help you find your way back.</p>
                <div class="error-buttons">
                    <a href="/" class="btn primary"><i class="fas fa-home"></i> Go to Homepage</a>
                    <a href="/#contact" class="btn secondary"><i class="fas fa-envelope"></i> Contact Support</a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'inc/footer.php'; ?>

    <script src="src/app.js"></script>
</body>
</html>
