<?php require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> | 404</title>
    <meta name="description" content="The page you were looking for could not be found.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Spline+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="src/images/favicon.png">
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: var(--main-color);
            line-height: 1;
            margin-bottom: 2rem;
            text-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: pulse 4s infinite;
        }
        
        .error-message {
            font-size: 2rem;
            margin-bottom: 2rem;
        }
        
        .error-description {
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }
        
        .error-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .error-icon {
            font-size: 5rem;
            margin-bottom: 2rem;
            color: var(--main-color);
            animation: float 3s infinite alternate ease-in-out;
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.8;
            }
        }
        
        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }
            
            .error-message {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="blur-circle circle-1"></div>
    <div class="blur-circle circle-2"></div>
    <div class="blur-circle circle-3"></div>
    
    <!-- Floating particles for additional animation -->
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
