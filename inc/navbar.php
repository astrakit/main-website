<header>
    <div class="container">
        <a href="/" class="logo">
            <img src="src/images/favicon.png" alt="Logo" class="brand-icon">
            <?php echo $site_name; ?>
        </a>
        <nav id="mainNav">
            <ul>
                <?php 
                $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
                ?>
                <li><a href="/#features" class="<?php echo (strpos($request_uri, 'features') !== false) ? 'active-nav' : ''; ?>">Features</a></li>
                <li><a href="/#gallery" class="<?php echo (strpos($request_uri, 'gallery') !== false) ? 'active-nav' : ''; ?>">Gallery</a></li>
                <li><a href="/#team" class="<?php echo (strpos($request_uri, 'team') !== false) ? 'active-nav' : ''; ?>">Team</a></li>
                <li><a href="/#download" class="<?php echo (strpos($request_uri, 'download') !== false) ? 'active-nav' : ''; ?>">Download</a></li>
                <li><a href="/#contact" class="<?php echo (strpos($request_uri, 'contact') !== false) ? 'active-nav' : ''; ?>">Contact</a></li>
                <li><a href="/creator-tools" class="<?php echo (strpos($request_uri, 'creator-tools') !== false) ? 'active-nav' : ''; ?>">Creator Tools</a></li>
                <li><a href="/donate" class="<?php echo (strpos($request_uri, 'donate') !== false) ? 'active-nav' : ''; ?>">Donate</a></li>
            </ul>
        </nav>
        <button class="menu-btn" id="menuBtn">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const mainNav = document.getElementById('mainNav');
    
    menuBtn.addEventListener('click', function() {
        mainNav.classList.toggle('active');
        menuBtn.classList.toggle('active');
    });
</script>
