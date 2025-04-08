<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASTRAKIT :: WELCOME TO OUR 90s WEBPAGE!!</title>
    <link rel="stylesheet" href="src/style.css">
    <style>
        /* 90s Retro Styling */
        body {
            background-color: var(--bg-color);
            background-image: url('data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><rect width="40" height="40" fill="%23161616"/><rect x="0" y="0" width="20" height="20" fill="%23191919"/><rect x="20" y="20" width="20" height="20" fill="%23191919"/></svg>');
            color: var(--text-color);
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            cursor: url('data:image/svg+xml;utf8,<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="4" r="4" fill="%238BCC5B"/></svg>'), auto;
            margin: 0;
            padding: 0;
        }

        .retro-container {
            max-width: 780px;
            margin: 80px auto 40px; /* Increased top margin from 20px to 80px */
            border: 10px ridge var(--main-color);
            background-color: rgba(22, 22, 22, 0.9);
            box-shadow: 10px 10px 0 rgba(139, 204, 91, 0.5);
            padding: 20px;
            position: relative;
        }

        .under-construction-banner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #000;
            text-align: center;
            padding: 8px 0;
            border-bottom: 2px solid var(--main-color);
            z-index: 1000;
            animation: scrollColors 10s infinite;
        }

        @keyframes scrollColors {
            0%, 100% { background-color: #000000; }
            25% { background-color: #0a1a0a; }
            50% { background-color: #122012; }
            75% { background-color: #0a1a0a; }
        }

        .under-construction-text {
            font-weight: bold;
            color: #ff0;
            letter-spacing: 2px;
            animation: blink 1s step-end infinite;
        }

        .retro-header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            border: 1px solid rgba(139, 204, 91, 0.3);
            padding: 20px 10px;
            background: #111;
            box-shadow: inset 0 0 20px #000;
        }

        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .star {
            position: absolute;
            width: 3px;
            height: 3px;
            background-color: var(--main-color);
            border-radius: 50%;
            animation: twinkle 1.5s infinite alternate;
        }

        @keyframes twinkle {
            0% { opacity: 0.3; }
            100% { opacity: 1; }
        }

        .blink-text {
            animation: blink 1s step-end infinite;
            font-weight: bold;
            color: var(--main-color);
            font-size: 24px;
            text-shadow: 2px 2px 2px #000;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        .rainbow-text {
            background-image: linear-gradient(
                to right,
                #ff0000, #ff7f00, #ffff00, #00ff00, #0000ff, #4b0082, #8b00ff
            );
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: rainbow 8s linear infinite;
            background-size: 400% 100%;
            font-weight: bold;
            font-size: 18px;
            margin: 15px 0;
        }

        @keyframes rainbow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .marquee-container {
            overflow: hidden;
            border: 3px inset #444;
            background-color: #111;
            padding: 10px 0;
            margin: 20px 0;
        }

        .marquee {
            white-space: nowrap;
            animation: marquee 20s linear infinite;
            display: inline-block;
            color: var(--main-color);
            font-weight: bold;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .old-school-hr {
            display: block;
            border: 0;
            height: 10px;
            margin: 25px 0;
            background-image: url('data:image/svg+xml;utf8,<svg width="32" height="10" viewBox="0 0 32 10" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 32,0 16,10" fill="%238BCC5B" opacity="0.7"/></svg>');
            background-repeat: repeat-x;
        }

        .construction-gif {
            display: block;
            margin: 20px auto;
            height: 60px;
            image-rendering: pixelated;
            background-image: url('data:image/svg+xml;utf8,<svg width="400" height="60" viewBox="0 0 400 60" xmlns="http://www.w3.org/2000/svg"><rect width="400" height="60" fill="black"/><text x="10" y="35" font-family="Arial" font-size="24" fill="%238BCC5B">UNDER CONSTRUCTION</text><polygon points="260,10 290,10 290,25 310,25 310,10 340,10 340,50 310,50 310,35 290,35 290,50 260,50" fill="%238BCC5B" opacity="0.8"/></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border: 2px solid var(--main-color);
        }

        .construction {
            text-align: center;
            margin: 30px 0;
            position: relative;
            padding: 20px;
            border: 5px dashed var(--main-color);
            background-color: rgba(0, 0, 0, 0.5);
        }

        .construction::before, .construction::after {
            content: "";
            background-image: url('data:image/svg+xml;utf8,<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><polygon points="25,5 45,40 5,40" fill="%238BCC5B"/><text x="22" y="37" fill="black" font-family="Arial" font-size="20" font-weight="bold">!</text></svg>');
            background-repeat: no-repeat;
            width: 50px;
            height: 50px;
            position: absolute;
            top: -25px;
        }

        .construction::before {
            left: 30px;
        }

        .construction::after {
            right: 30px;
        }

        .guestbook {
            margin: 30px 0;
            padding: 20px;
            border: 3px double var(--main-color);
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .guestbook-title {
            font-size: 22px;
            color: var(--main-color);
            margin-bottom: 15px;
            text-shadow: 2px 2px 0 #000;
        }

        .counter-box {
            margin: 20px auto;
            text-align: center;
            padding: 15px;
            border: 2px groove #333;
            background-color: #0a0a0a;
            display: inline-block;
        }

        .counter-label {
            display: block;
            margin-bottom: 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #ddd;
        }

        .visitor-counter {
            display: inline-block;
            background-color: #000;
            color: var(--main-color);
            padding: 5px 10px;
            border: 2px inset #555;
            font-family: "VT323", "Courier New", monospace;
            font-size: 24px;
            letter-spacing: 3px;
            margin: 5px 0;
            text-shadow: 0 0 5px rgba(139, 204, 91, 0.7);
        }

        .table-content {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 2px solid var(--main-color);
            background-color: rgba(0, 0, 0, 0.5);
        }

        .table-content td, .table-content th {
            border: 1px solid var(--main-color);
            padding: 10px;
            text-align: left;
        }

        .table-content th {
            background-color: rgba(139, 204, 91, 0.2);
            color: var(--main-color);
            font-weight: bold;
        }

        .table-content tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .badge {
            position: absolute;
            top: -30px;
            right: -30px;
            width: 120px;
            height: 120px;
            background-color: var(--main-color);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transform: rotate(15deg);
            box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.5);
            color: var(--bg-color);
            font-weight: bold;
            font-size: 12px;
            text-align: center;
            padding: 10px;
            animation: wobble 3s infinite alternate;
            line-height: 1.2;
            z-index: 10;
        }

        .netscape-badge {
            position: absolute;
            top: -35px;
            left: -35px;
            width: 110px;
            height: 110px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 5;
            transform: rotate(-15deg);
            animation: float 4s ease-in-out infinite;
        }

        .netscape-badge img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @keyframes float {
            0%, 100% { transform: rotate(-15deg) translateY(0); }
            50% { transform: rotate(-15deg) translateY(-10px); }
        }

        @keyframes wobble {
            0%, 100% { transform: rotate(15deg); }
            50% { transform: rotate(20deg); }
        }

        .midi-player {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            background-color: #000;
            padding: 15px;
            border: 3px inset #444;
        }

        .midi-controls {
            display: flex;
            gap: 10px;
        }

        .midi-button {
            padding: 8px 15px;
            background: linear-gradient(to bottom, #444, #222);
            border: 2px outset #555;
            color: var(--main-color);
            font-weight: bold;
            cursor: pointer;
        }

        .midi-button:active {
            border-style: inset;
        }

        .separator {
            height: 20px;
            background-image: url('data:image/svg+xml;utf8,<svg width="30" height="10" viewBox="0 0 30 10" xmlns="http://www.w3.org/2000/svg"><rect width="5" height="10" fill="%238BCC5B" opacity="0.7"/><rect x="10" width="5" height="10" fill="%238BCC5B" opacity="0.7"/><rect x="20" width="5" height="10" fill="%238BCC5B" opacity="0.7"/></svg>');
            background-repeat: repeat-x;
            background-size: 30px 10px;
            margin: 25px 0;
        }

        .retro-form {
            margin: 30px 0;
            padding: 20px;
            border: 3px ridge #444;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .retro-input {
            display: block;
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 2px inset #555;
            background-color: #000;
            color: var(--main-color);
            font-family: "Comic Sans MS", "Comic Sans", cursive;
        }

        .form-button {
            width: 100%;
            padding: 10px;
            font-weight: bold;
            background: linear-gradient(to bottom, #333, #222);
            border: outset 4px #555;
            color: var(--main-color);
            cursor: pointer;
            transition: all 0.1s;
            text-transform: uppercase;
        }

        .form-button:active {
            border-style: inset;
        }

        .notepad-badge {
            display: inline-block;
            margin: 20px 0;
            padding: 8px 15px;
            background-color: #000;
            color: #ddd;
            border: 2px solid var(--main-color);
            font-family: "Courier New", monospace;
            font-size: 12px;
            text-align: center;
        }

        .footer-info {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: var(--text-secondary);
            line-height: 1.5;
        }

        .hit-counter {
            background-color: #000;
            display: inline-block;
            padding: 5px 15px;
            border: 3px double #444;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .counter-digits {
            display: flex;
        }

        .counter-digit {
            width: 25px;
            height: 40px;
            background-color: #000;
            color: #3f3;
            border: 1px inset #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Digital", "Courier New", monospace;
            font-size: 24px;
            margin: 0 2px;
            text-shadow: 0 0 5px #3f3;
        }

        .awards-section {
            margin: 30px 0;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .award-badge {
            border: 2px solid #666;
            background-color: #111;
            padding: 5px;
            display: inline-block;
            max-width: 100px;
            font-size: 10px;
            color: #ddd;
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.5);
        }

        .award-badge img {
            display: block;
            width: 88px;
            height: 31px;
            image-rendering: pixelated;
            background-color: var(--main-color);
            margin-bottom: 5px;
            opacity: 0.9;
        }

        .new-icon {
            display: inline-block;
            background-color: #f00;
            color: #fff;
            font-size: 10px;
            padding: 2px 5px;
            border-radius: 3px;
            margin-left: 10px;
            animation: pulse 1s infinite;
            font-weight: bold;
            vertical-align: super;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .webmaster-link {
            display: inline-block;
            margin-top: 15px;
            color: var(--main-color);
            text-decoration: underline;
            font-weight: bold;
        }

        /* Create animated giflike elements */
        .flame {
            display: inline-block;
            position: relative;
        }

        .flame::after {
            content: "🔥";
            position: absolute;
            top: 0;
            left: 0;
            animation: flicker 0.5s infinite alternate;
        }

        @keyframes flicker {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(0.9); }
        }

        /* Information Boxes */
        .info-box {
            border: 2px solid var(--main-color);
            margin: 20px 0;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .info-header {
            background-color: var(--main-color);
            color: #000;
            padding: 5px 10px;
            font-weight: bold;
            text-align: center;
        }

        .info-content {
            padding: 15px;
        }
    </style>
</head>
<body>
    <!-- Under Construction Banner -->
    <div class="under-construction-banner">
        <span class="under-construction-text">⚠️ SITE UNDER CONSTRUCTION ⚠️</span>
    </div>

    <div class="retro-container">
        <!-- Starfield effect -->
        <div class="stars">
            <?php for($i = 0; $i < 50; $i++): ?>
                <div class="star" style="top: <?php echo rand(0, 100); ?>%; left: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 15)/10; ?>s;"></div>
            <?php endfor; ?>
        </div>

        <!-- Netscape Badge -->
        <div class="netscape-badge">
            <svg width="110" height="110" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="48" fill="#000" stroke="#8BCC5B" stroke-width="2"/>
                <text x="50" y="40" fill="#8BCC5B" font-family="Arial" font-size="12" text-anchor="middle">NETSCAPE</text>
                <text x="50" y="55" fill="#8BCC5B" font-family="Arial" font-size="12" text-anchor="middle">NOW!</text>
                <text x="50" y="70" fill="#8BCC5B" font-family="Arial" font-size="10" text-anchor="middle">COMPATIBLE</text>
            </svg>
        </div>

        <!-- Badge -->
        <div class="badge">OPTIMIZED FOR 800x600 RESOLUTION</div>

        <!-- Header -->
        <div class="retro-header">
            <div class="blink-text">Welcome to ASTRAKIT!</div>
            <div style="color: var(--text-secondary); margin-top: 5px;">~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~</div>
            <h2 style="font-family: 'Times New Roman', serif; color: var(--main-color); text-shadow: 2px 2px 0 #000;">
                <span class="flame">A</span>STRAK<span class="flame">I</span>T CYBER ZONE
            </h2>
            <div style="color: var(--text-secondary); margin-bottom: 5px;">~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~</div>
            <div class="rainbow-text">EXPERIENCE THE INFORMATION SUPERHIGHWAY</div>
        </div>

        <!-- Marquee -->
        <div class="marquee-container">
            <div class="marquee">
                *** WELCOME TO THE ASTRAKIT RETRO EXPERIENCE! *** THIS PAGE IS OPTIMIZED FOR 800x600 RESOLUTION *** LAST UPDATED: <?php echo date('F d, Y'); ?> *** BEST VIEWED WITH NETSCAPE NAVIGATOR 4.0 ***
            </div>
        </div>

        <!-- Construction animation -->
        <div class="construction-gif"></div>

        <!-- Under Construction -->
        <div class="construction">
            <div class="blink-text" style="font-size: 18px;">UNDER CONSTRUCTION</div>
            <p>This website is still being built! Please excuse the digital dust and information superhighway traffic cones.</p>
        </div>

        <!-- Content -->
        <div style="margin: 20px 0;">
            <h3 style="color: var(--main-color); text-shadow: 2px 2px 0 #000;">ABOUT THE ASTRAKIT PROJECT <span class="new-icon">NEW!</span></h3>
            <p>Welcome to the official ASTRAKIT website, circa 1997! This page is a nostalgic celebration of the early World Wide Web aesthetic while showcasing our modern technology.</p>
            
            <div class="old-school-hr"></div>
            
            <div class="info-box">
                <div class="info-header">ASTRAKIT FEATURES</div>
                <div class="info-content">
                    <table class="table-content">
                        <tr>
                            <th>Feature</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>🐱 Cat Friendly</td>
                            <td>All of our software is tested and approved by cats!</td>
                        </tr>
                        <tr>
                            <td>💻 Modern Tech</td>
                            <td>Using the latest technology with a retro aesthetic</td>
                        </tr>
                        <tr>
                            <td>🚀 Fast Performance <span class="new-icon">NEW!</span></td>
                            <td>Optimized for 28.8kbps modems and beyond!</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="separator"></div>
            
            <!-- MIDI Player -->
            <div class="midi-player">
                <div class="midi-controls">
                    <button class="midi-button" id="play-midi">▶ PLAY MIDI</button>
                    <button class="midi-button">⏹ STOP</button>
                    <span style="color: var(--text-secondary); margin-left: 10px;">Now playing: astrakit_theme.mid</span>
                </div>
            </div>
        </div>

        <!-- Hit Counter -->
        <div class="counter-box">
            <span class="counter-label">YOU ARE VISITOR NUMBER:</span>
            <div class="counter-digits">
                <?php 
                    $visitor_count = rand(10000, 99999);
                    $digits = str_split($visitor_count);
                    foreach($digits as $digit):
                ?>
                <div class="counter-digit"><?php echo $digit; ?></div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="retro-form">
            <h3 style="color: var(--main-color); text-align: center; margin-bottom: 15px;">JOIN OUR MAILING LIST! <span class="new-icon">HOT!</span></h3>
            <p style="text-align: center; margin-bottom: 15px;">Get the latest updates delivered straight to your inbox!</p>
            <form onsubmit="alert('Thank you for subscribing to our newsletter!'); return false;">
                <input type="text" class="retro-input" placeholder="Your Name" required>
                <input type="email" class="retro-input" placeholder="Your Email" required>
                <button type="submit" class="form-button">SUBSCRIBE NOW</button>
            </form>
        </div>

        <!-- Guestbook -->
        <div class="guestbook">
            <div class="guestbook-title">📓 SIGN OUR GUESTBOOK! 📓</div>
            <p>Let us know you were here! Click below to leave a message.</p>
            <button onclick="alert('Our guestbook is currently under construction. Please check back soon!')" class="form-button" style="max-width: 200px; margin: 15px auto; display: block;">SIGN GUESTBOOK</button>
        </div>

        <!-- Web Awards Section -->
        <div style="text-align: center; margin: 30px 0;">
            <h3 style="color: var(--main-color); text-shadow: 2px 2px 0 #000; margin-bottom: 15px;">OUR WEB AWARDS</h3>
            <div class="awards-section">
                <div class="award-badge">
                    <div style="background: #8BCC5B; width: 88px; height: 31px; display: flex; justify-content: center; align-items: center; color: #000; font-weight: bold; font-size: 10px; text-align: center;">COOL SITE OF THE DAY</div>
                    <span>June 1997</span>
                </div>
                <div class="award-badge">
                    <div style="background: #8BCC5B; width: 88px; height: 31px; display: flex; justify-content: center; align-items: center; color: #000; font-weight: bold; font-size: 10px; text-align: center;">5 STAR SITE</div>
                    <span>WebCrawler</span>
                </div>
                <div class="award-badge">
                    <div style="background: #8BCC5B; width: 88px; height: 31px; display: flex; justify-content: center; align-items: center; color: #000; font-weight: bold; font-size: 10px; text-align: center;">TOP 100 SITES</div>
                    <span>Lycos 1997</span>
                </div>
            </div>
        </div>

        <!-- Footer Information -->
        <div class="footer-info">
            <div class="notepad-badge">
                <span style="font-family: 'Times New Roman', serif;">MADE WITH</span> Notepad.exe
            </div>
            <p>This page is best viewed with Netscape Navigator 4.0 or Internet Explorer 3.0</p>
            <p>Resolution: 800x600, 256 Colors</p>
            <p>© 1997-<?php echo date('Y'); ?> ASTRAKIT Webzone - All rights reserved</p>
            <a href="mailto:webmaster@astrakit.com" class="webmaster-link">Email the Webmaster</a>
            <p style="margin-top: 10px; font-size: 10px;">Last Updated: <?php echo date('F d, Y'); ?></p>
        </div>
    </div>

    <script>
        // Create more stars dynamically
        document.addEventListener('DOMContentLoaded', function() {
            const starsContainer = document.querySelector('.stars');
            for (let i = 0; i < 50; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.top = Math.random() * 100 + '%';
                star.style.left = Math.random() * 100 + '%';
                star.style.animationDelay = (Math.random() * 1.5) + 's';
                starsContainer.appendChild(star);
            }
            
            // Simulated MIDI Player functionality
            const playButton = document.getElementById('play-midi');
            playButton.addEventListener('click', function() {
                alert('🎵 Your MIDI file would be playing now if this was 1997! Enjoy the digital silence! 🎵');
            });

            // Add some fun 90s interactions
            document.body.addEventListener('click', function(e) {
                // 5% chance of showing a popup message when clicking anywhere
                if (Math.random() < 0.05) {
                    const messages = [
                        "Did you know? The first web browser was called WorldWideWeb, later renamed Nexus.",
                        "Welcome to the Information Superhighway!",
                        "Don't forget to add us to your bookmarks!",
                        "This site is optimized for 28.8kbps modems and faster!",
                        "Remember to sign our guestbook before you leave!"
                    ];
                    
                    setTimeout(function() {
                        alert(messages[Math.floor(Math.random() * messages.length)]);
                    }, 100);
                }
            });
        });
    </script>
</body>
</html>
