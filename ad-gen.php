<?php
require_once 'inc/config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log('Form submitted: ' . print_r($_POST, true));
}

if (!file_exists('generated')) {
    mkdir('generated', 0777, true);
    chmod('generated', 0777);
}

if (isset($_POST['generate_ad'])) {
    try {
        $width = intval($_POST['width']);
        $height = intval($_POST['height']);
        $text = $_POST['ad_text'];
        $description = $_POST['description'] ?? '';
        $bg_color = $_POST['bg_color'];
        $text_color = $_POST['text_color'];
        $accent_color = $_POST['accent_color'];
        $description_color = $_POST['description_color'] ?? $text_color;
        $include_logo = isset($_POST['include_logo']) ? true : false;
        $layout_type = $_POST['layout_type'] ?? 'left';
        $include_particles = isset($_POST['include_particles']) ? true : false;
        
        if ($width < 50 || $height < 50 || $width > 2000 || $height > 1200) {
            $error = "Dimensions must be between 50px and 2000x1200px";
        } else {
            if (!function_exists('imagecreatetruecolor')) {
                throw new Exception("GD Library is not installed or not enabled");
            }

            $image = imagecreatetruecolor($width, $height);
            
            $bg_color_rgb = sscanf($bg_color, "#%02x%02x%02x");
            $bg = imagecolorallocate($image, $bg_color_rgb[0], $bg_color_rgb[1], $bg_color_rgb[2]);
            imagefill($image, 0, 0, $bg);
            
            $text_color_rgb = sscanf($text_color, "#%02x%02x%02x");
            $txt_color = imagecolorallocate($image, $text_color_rgb[0], $text_color_rgb[1], $text_color_rgb[2]);
            
            $description_color_rgb = sscanf($description_color, "#%02x%02x%02x");
            $desc_color = imagecolorallocate($image, $description_color_rgb[0], $description_color_rgb[1], $description_color_rgb[2]);
            
            $accent_color_rgb = sscanf($accent_color, "#%02x%02x%02x");
            $accent = imagecolorallocate($image, $accent_color_rgb[0], $accent_color_rgb[1], $accent_color_rgb[2]);
            
            if ($include_particles) {
                $blur_circle1 = imagecreatetruecolor($width/2, $height/2);
                $circle1_color = imagecolorallocate($blur_circle1, $accent_color_rgb[0], $accent_color_rgb[1], $accent_color_rgb[2]);
                imagefill($blur_circle1, 0, 0, $circle1_color);
                imagefilledellipse($blur_circle1, $width/4, $height/4, $width/2, $height/2, $circle1_color);
                
                for ($i = 0; $i < 40; $i++) {
                    imagefilter($blur_circle1, IMG_FILTER_GAUSSIAN_BLUR);
                }
                
                imagecopymerge($image, $blur_circle1, $width - $width/3, -$height/4, 0, 0, $width/2, $height/2, 20);
                
                $blur_circle2 = imagecreatetruecolor($width/2, $height/2);
                $circle2_color = imagecolorallocate($blur_circle2, $accent_color_rgb[0], $accent_color_rgb[1], $accent_color_rgb[2]);
                imagefill($blur_circle2, 0, 0, $circle2_color);
                imagefilledellipse($blur_circle2, $width/4, $height/4, $width/3, $height/3, $circle2_color);
                
                for ($i = 0; $i < 40; $i++) {
                    imagefilter($blur_circle2, IMG_FILTER_GAUSSIAN_BLUR);
                }
                
                imagecopymerge($image, $blur_circle2, -$width/6, $height - $height/3, 0, 0, $width/2, $height/2, 15);
                
                for ($i = 0; $i < 10; $i++) {
                    $particle_size = rand(2, 6);
                    $particle_x = rand(0, $width);
                    $particle_y = rand(0, $height);
                    $particle_opacity = rand(30, 80);
                    $particle_color = imagecolorallocatealpha(
                        $image, 
                        $accent_color_rgb[0], 
                        $accent_color_rgb[1], 
                        $accent_color_rgb[2], 
                        127 - ($particle_opacity * 1.27)
                    );
                    imagefilledellipse($image, $particle_x, $particle_y, $particle_size, $particle_size, $particle_color);
                }
                
                imagedestroy($blur_circle1);
                imagedestroy($blur_circle2);
            }
            
            $font_path = 'src/fonts/Outfit-Bold.ttf';
            $desc_font_path = 'src/fonts/Outfit-Regular.ttf';
            
            $font_size = $height / 5;
            $desc_font_size = $font_size / 2.2;
            
            switch($layout_type) {
                case 'centered':
                    $text_bbox = imagettfbbox($font_size, 0, $font_path, $text);
                    $text_width = $text_bbox[2] - $text_bbox[0];
                    $text_height = $text_bbox[1] - $text_bbox[7];
                    $text_x = ($width / 2) - ($text_width / 2);
                    $text_y = ($height / 2) - ($text_height / 2);
                    
                    if (!empty($description)) {
                        $text_y = $height * 0.4;
                    }
                    
                    imagettftext($image, $font_size, 0, $text_x, $text_y, $txt_color, $font_path, $text);
                    
                    if (!empty($description)) {
                        $desc_bbox = imagettfbbox($desc_font_size, 0, $desc_font_path, $description);
                        $desc_width = $desc_bbox[2] - $desc_bbox[0];
                        $desc_x = ($width / 2) - ($desc_width / 2);
                        $desc_y = $text_y + $text_height + 30;
                        imagettftext($image, $desc_font_size, 0, $desc_x, $desc_y, $desc_color, $desc_font_path, $description);
                    }
                    
                    if ($include_logo) {
                        $logo = imagecreatefrompng("src/images/favicon.png");
                        $logo_width = imagesx($logo);
                        $logo_height = imagesy($logo);
                        $logo_x = ($width / 2) - ($logo_width / 2);
                        $logo_y = $text_y - $logo_height - 20;
                        imagecopy($image, $logo, $logo_x, $logo_y, 0, 0, $logo_width, $logo_height);
                    }
                    break;
                    
                case 'right':
                    $padding = $width * 0.05;
                    $text_bbox = imagettfbbox($font_size, 0, $font_path, $text);
                    $text_width = $text_bbox[2] - $text_bbox[0];
                    $text_height = $text_bbox[1] - $text_bbox[7];
                    $text_x = $width - $text_width - $padding;
                    $text_y = $height / 2 + $text_height / 2;
                    
                    if (!empty($description)) {
                        $text_y = $height * 0.4;
                    }
                    
                    imagettftext($image, $font_size, 0, $text_x, $text_y, $txt_color, $font_path, $text);
                    
                    if (!empty($description)) {
                        $desc_y = $text_y + $text_height + 20;
                        imagettftext($image, $desc_font_size, 0, $text_x, $desc_y, $desc_color, $desc_font_path, $description);
                    }
                    
                    if ($include_logo) {
                        $logo = imagecreatefrompng("src/images/favicon.png");
                        $logo_width = imagesx($logo);
                        $logo_height = imagesy($logo);
                        $logo_x = $text_x + $text_width - $logo_width;
                        $logo_y = $text_y - $logo_height - 20;
                        imagecopy($image, $logo, $logo_x, $logo_y, 0, 0, $logo_width, $logo_height);
                    }
                    break;
                    
                case 'left':
                default:
                    $padding = $width * 0.05;
                    
                    if ($include_logo) {
                        $logo = imagecreatefrompng("src/images/favicon.png");
                        $logo_width = imagesx($logo);
                        $logo_height = imagesy($logo);
                        $logo_pos_x = $padding;
                        $logo_pos_y = $height / 2 - $logo_height / 2;
                        
                        if (!empty($description)) {
                            $logo_pos_y = $height * 0.35;
                        }
                        
                        imagecopy($image, $logo, $logo_pos_x, $logo_pos_y, 0, 0, $logo_width, $logo_height);
                        $text_start_x = $logo_pos_x + $logo_width + 15;
                    } else {
                        $text_start_x = $padding;
                    }
                    
                    $text_bbox = imagettfbbox($font_size, 0, $font_path, $text);
                    $text_height = $text_bbox[1] - $text_bbox[7];
                    $text_pos_y = $height / 2 + $text_height / 2;
                    
                    if (!empty($description)) {
                        $text_pos_y = $height * 0.4;
                    }
                    
                    imagettftext($image, $font_size, 0, $text_start_x, $text_pos_y, $txt_color, $font_path, $text);
                    
                    if (!empty($description)) {
                        $desc_y = $text_pos_y + $text_height + 20;
                        imagettftext($image, $desc_font_size, 0, $text_start_x, $desc_y, $desc_color, $desc_font_path, $description);
                    }
                    break;
            }
            
            $file_name = 'generated_ad_' . time() . '.png';
            $file_path = 'generated/' . $file_name;
            
            if (!is_writable('generated')) {
                throw new Exception("The 'generated' directory is not writable");
            }
            
            if (!imagepng($image, $file_path)) {
                throw new Exception("Failed to save the image. Check permissions and disk space.");
            }
            
            $download_link = $file_path;
            
            imagedestroy($image);
            
            error_log("Banner successfully generated: $file_path");
        }
    } catch (Exception $e) {
        $error = "Error generating banner: " . $e->getMessage();
        error_log($error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Generator | <?php echo $site_name; ?></title>
    <meta name="description" content="Create beautiful banners and blog headers in the Astrakit design language">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Spline+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="src/images/favicon.png">
    <?php require 'inc/link-style.php'; ?>
    <style>
        .ad-generator {
            padding-top: 120px;
            min-height: 100vh;
        }
        
        .generator-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        
        @media (max-width: 768px) {
            .generator-container {
                grid-template-columns: 1fr;
            }
        }
        
        .ad-controls {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: var(--border-radius-md);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .ad-preview {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: var(--border-radius-md);
            border: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .preview-container {
            margin-top: 1rem;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
            border-radius: var(--border-radius-sm);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: var(--shadow-md);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .size-inputs {
            display: flex;
            gap: 1rem;
        }
        
        .size-inputs input {
            width: 100%;
        }
        
        .color-group {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .color-preview {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        .presets {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: 0.5rem;
        }
        
        .preset-size {
            padding: 0.4rem 0.8rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius-sm);
            font-size: 0.85rem;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .preset-size:hover {
            background-color: var(--main-color);
            color: var(--bg-color);
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin: 1rem 0;
        }
        
        .checkbox-group input {
            width: 18px;
            height: 18px;
        }
        
        .layout-options {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .layout-option {
            padding: 0.6rem 1.2rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .layout-option.selected {
            background-color: var(--main-color);
            color: var(--bg-color);
        }
        
        .layout-option:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .live-preview {
            max-width: 100%;
            height: auto;
            border-radius: var(--border-radius-sm);
            background-color: #161616;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .live-preview-text {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: #fff;
            z-index: 1;
        }
        
        .live-preview-description {
            font-family: 'Outfit', sans-serif;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.7em;
            z-index: 1;
            margin-top: 10px;
        }
        
        .live-preview-logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            object-fit: contain;
            z-index: 1;
        }
        
        .blur-circle-preview {
            position: absolute;
            border-radius: 50%;
            filter: blur(30px);
            z-index: 0;
            opacity: 0.3;
        }
        
        .circle-preview-1 {
            width: 100px;
            height: 100px;
            background-color: var(--animated-bg-color-1);
            top: -30px;
            right: -20px;
        }
        
        .circle-preview-2 {
            width: 140px;
            height: 140px;
            background-color: var(--animated-bg-color-2);
            bottom: -40px;
            left: -40px;
        }
        
        .preview-content {
            z-index: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
        }
        
        .preview-content.centered {
            align-items: center;
            text-align: center;
        }
        
        .preview-content.right {
            align-items: flex-end;
            text-align: right;
        }
        
        .top-content {
            display: flex;
            align-items: center;
        }
        
        .floating-particle-preview {
            position: absolute;
            width: 4px;
            height: 4px;
            background-color: var(--main-color);
            border-radius: 50%;
            z-index: 0;
            opacity: 0.6;
        }
        
        .particle-preview-1 { top: 20%; left: 10%; }
        .particle-preview-2 { top: 65%; left: 75%; }
        .particle-preview-3 { top: 30%; left: 60%; }
        .particle-preview-4 { top: 70%; left: 20%; }
        .particle-preview-5 { top: 15%; left: 80%; }
        
        .result-container {
            margin-top: 2rem;
            text-align: center;
            padding: 2rem;
            background-color: var(--card-bg);
            border-radius: var(--border-radius-md);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .result-image {
            max-width: 100%;
            height: auto;
            margin: 1rem 0;
            border-radius: var(--border-radius-sm);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: var(--shadow-md);
        }
        
        .tabs {
            display: flex;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .tab {
            padding: 0.8rem 1.5rem;
            background: transparent;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.95rem;
            position: relative;
        }
        
        .tab.active {
            color: var(--main-color);
        }
        
        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--main-color);
        }
        
        .tab:hover {
            color: var(--text-color);
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
    </style>
</head>

<body>
    <?php require_once 'inc/common-elements.php'; ?>
    <?php require_once 'inc/navbar.php'; ?>

    <section class="ad-generator">
        <div class="container">
            <h1>Astrakit <span class="highlight">Banner Generator</span></h1>
            <p class="section-intro">Create beautiful banners and blog headers in the Astrakit design language. Add titles, descriptions, customize your design, and export in PNG format.</p>
            
            <?php if (isset($error)): ?>
                <div class="alert" style="background-color: rgba(255, 50, 50, 0.2); padding: 1rem; border-radius: var(--border-radius-sm); margin-bottom: 2rem;">
                    <p style="color: #fff; margin: 0;"><?php echo $error; ?></p>
                </div>
            <?php endif; ?>
            
            <?php if (isset($download_link)): ?>
                <div class="result-container">
                    <h2>Your Banner is <span class="highlight">Ready!</span></h2>
                    <div>
                        <img src="<?php echo $download_link; ?>" alt="Generated Banner" class="result-image">
                    </div>
                    <p>Your banner has been generated successfully!</p>
                    <a href="<?php echo $download_link; ?>" download class="btn primary">
                        <i class="fas fa-download"></i> Download Banner
                    </a>
                    <a href="ad-gen.php" class="btn secondary" style="margin-top: 1rem;">
                        <i class="fas fa-redo"></i> Create Another
                    </a>
                </div>
            <?php else: ?>
                <div class="generator-container">
                    <div class="ad-controls">
                        <h3>Banner <span class="highlight">Settings</span></h3>
                        
                        <div class="tabs">
                            <button type="button" class="tab active" data-tab="basics">Basic Settings</button>
                            <button type="button" class="tab" data-tab="design">Design</button>
                        </div>
                        
                        <form method="post" action="" id="ad-form" enctype="multipart/form-data">
                            <div class="tab-content active" id="basics-tab">
                                <div class="form-group">
                                    <label for="ad-size">Banner Size (width × height)</label>
                                    <div class="size-inputs">
                                        <input type="number" id="width" name="width" value="800" min="50" max="2000" required>
                                        <input type="number" id="height" name="height" value="300" min="50" max="1200" required>
                                    </div>
                                    <div class="presets">
                                        <div class="preset-size" data-width="800" data-height="300">800×300 (Blog Header)</div>
                                        <div class="preset-size" data-width="1200" data-height="600">1200×600 (Featured)</div>
                                        <div class="preset-size" data-width="1600" data-height="400">1600×400 (Wide)</div>
                                        <div class="preset-size" data-width="600" data-height="600">600×600 (Square)</div>
                                        <div class="preset-size" data-width="500" data-height="750">500×750 (Story)</div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="ad-text">Banner Title</label>
                                    <input type="text" id="ad-text" name="ad_text" value="Your Awesome Title" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="description">Description / Subtitle</label>
                                    <input type="text" id="description" name="description" value="Add a compelling subtitle or description for your banner" placeholder="Optional description or subtitle">
                                </div>
                                
                                <div class="form-group">
                                    <label>Layout Style</label>
                                    <div class="layout-options">
                                        <div class="layout-option selected" data-value="left">Left Aligned</div>
                                        <div class="layout-option" data-value="centered">Centered</div>
                                        <div class="layout-option" data-value="right">Right Aligned</div>
                                    </div>
                                    <input type="hidden" id="layout-type" name="layout_type" value="left">
                                </div>
                                
                                <div class="checkbox-group">
                                    <input type="checkbox" id="include-logo" name="include_logo" checked>
                                    <label for="include-logo">Include Astrakit Logo</label>
                                </div>
                            </div>
                            
                            <div class="tab-content" id="design-tab">
                                <div class="form-group">
                                    <label>Background Color</label>
                                    <div class="color-group">
                                        <div class="color-preview" id="bg-color-preview"></div>
                                        <input type="color" id="bg-color" name="bg_color" value="#161616">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Title Color</label>
                                    <div class="color-group">
                                        <div class="color-preview" id="text-color-preview"></div>
                                        <input type="color" id="text-color" name="text_color" value="#ffffff">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description Color</label>
                                    <div class="color-group">
                                        <div class="color-preview" id="description-color-preview"></div>
                                        <input type="color" id="description-color" name="description_color" value="#cccccc">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Accent Color (for particles & effects)</label>
                                    <div class="color-group">
                                        <div class="color-preview" id="accent-color-preview"></div>
                                        <input type="color" id="accent-color" name="accent_color" value="#8BCC5B">
                                    </div>
                                </div>
                                
                                <div class="checkbox-group">
                                    <input type="checkbox" id="include-particles" name="include_particles" checked>
                                    <label for="include-particles">Include Floating Particles & Blur Effects</label>
                                </div>
                            </div>
                            
                            <input type="hidden" name="animation_type" value="none">
                            <input type="hidden" name="export_type" value="png">
                            <input type="hidden" name="generate_ad" value="1">
                            
                            <button type="submit" class="btn primary" id="generate-btn">
                                <i class="fas fa-magic"></i> Generate Banner
                            </button>
                        </form>
                    </div>
                    
                    <div class="ad-preview">
                        <h3>Live <span class="highlight">Preview</span></h3>
                        <div class="preview-container" id="preview-container">
                            <div class="live-preview" id="live-preview">
                                <div class="blur-circle-preview circle-preview-1"></div>
                                <div class="blur-circle-preview circle-preview-2"></div>
                                
                                <div class="floating-particle-preview particle-preview-1"></div>
                                <div class="floating-particle-preview particle-preview-2"></div>
                                <div class="floating-particle-preview particle-preview-3"></div>
                                <div class="floating-particle-preview particle-preview-4"></div>
                                <div class="floating-particle-preview particle-preview-5"></div>
                                
                                <div class="preview-content" id="preview-content">
                                    <div class="top-content">
                                        <img src="src/images/favicon.png" alt="Astrakit Logo" class="live-preview-logo" id="preview-logo">
                                        <div class="live-preview-text" id="preview-text">Your Awesome Title</div>
                                    </div>
                                    <div class="live-preview-description" id="preview-description">Add a compelling subtitle or description for your banner</div>
                                </div>
                            </div>
                        </div>
                        <p class="subtext">This is a real-time preview. The final generated banner may look slightly different.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php require_once 'inc/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const widthInput = document.getElementById('width');
            const heightInput = document.getElementById('height');
            const adTextInput = document.getElementById('ad-text');
            const descriptionInput = document.getElementById('description');
            const bgColorInput = document.getElementById('bg-color');
            const textColorInput = document.getElementById('text-color');
            const descriptionColorInput = document.getElementById('description-color');
            const accentColorInput = document.getElementById('accent-color');
            const includeLogoCheckbox = document.getElementById('include-logo');
            const includeParticlesCheckbox = document.getElementById('include-particles');
            
            const bgColorPreview = document.getElementById('bg-color-preview');
            const textColorPreview = document.getElementById('text-color-preview');
            const descriptionColorPreview = document.getElementById('description-color-preview');
            const accentColorPreview = document.getElementById('accent-color-preview');
            
            const previewContainer = document.getElementById('preview-container');
            const livePreview = document.getElementById('live-preview');
            const previewContent = document.getElementById('preview-content');
            const previewText = document.getElementById('preview-text');
            const previewDescription = document.getElementById('preview-description');
            const previewLogo = document.getElementById('preview-logo');
            
            const presetSizes = document.querySelectorAll('.preset-size');
            const layoutOptions = document.querySelectorAll('.layout-option');
            const particles = document.querySelectorAll('.floating-particle-preview');
            const blurCircles = document.querySelectorAll('.blur-circle-preview');
            
            const layoutTypeInput = document.getElementById('layout-type');
            
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    this.classList.add('active');
                    document.getElementById(this.dataset.tab + '-tab').classList.add('active');
                });
            });
            
            function updatePreview() {
                const width = widthInput.value + 'px';
                const height = heightInput.value + 'px';
                const text = adTextInput.value;
                const description = descriptionInput.value;
                const bgColor = bgColorInput.value;
                const textColor = textColorInput.value;
                const descriptionColor = descriptionColorInput.value;
                const accentColor = accentColorInput.value;
                const includeLogo = includeLogoCheckbox.checked;
                const includeParticles = includeParticlesCheckbox.checked;
                const layoutType = layoutTypeInput.value;
                
                previewContainer.style.width = width;
                previewContainer.style.height = height;
                
                livePreview.style.width = width;
                livePreview.style.height = height;
                livePreview.style.backgroundColor = bgColor;
                
                previewText.textContent = text;
                previewText.style.color = textColor;
                
                previewDescription.textContent = description;
                previewDescription.style.color = descriptionColor;
                previewDescription.style.display = description ? 'block' : 'none';
                
                previewContent.className = 'preview-content';
                if (layoutType === 'centered') {
                    previewContent.classList.add('centered');
                } else if (layoutType === 'right') {
                    previewContent.classList.add('right');
                }
                
                particles.forEach(particle => {
                    particle.style.display = includeParticles ? 'block' : 'none';
                    particle.style.backgroundColor = accentColor;
                });
                
                blurCircles.forEach(circle => {
                    circle.style.display = includeParticles ? 'block' : 'none';
                    circle.style.backgroundColor = accentColor;
                });
                
                if (includeLogo) {
                    previewLogo.style.display = 'block';
                } else {
                    previewLogo.style.display = 'none';
                }
                
                bgColorPreview.style.backgroundColor = bgColor;
                textColorPreview.style.backgroundColor = textColor;
                descriptionColorPreview.style.backgroundColor = descriptionColor;
                accentColorPreview.style.backgroundColor = accentColor;
                
                if (parseInt(widthInput.value) < 300 || parseInt(heightInput.value) < 150) {
                    previewText.style.fontSize = '16px';
                    previewDescription.style.fontSize = '12px';
                } else {
                    const fontSizeBase = Math.min(parseInt(heightInput.value) / 6, 36);
                    previewText.style.fontSize = fontSizeBase + 'px';
                    previewDescription.style.fontSize = (fontSizeBase / 1.8) + 'px';
                }
            }
            
            widthInput.addEventListener('input', updatePreview);
            heightInput.addEventListener('input', updatePreview);
            adTextInput.addEventListener('input', updatePreview);
            descriptionInput.addEventListener('input', updatePreview);
            bgColorInput.addEventListener('input', updatePreview);
            textColorInput.addEventListener('input', updatePreview);
            descriptionColorInput.addEventListener('input', updatePreview);
            accentColorInput.addEventListener('input', updatePreview);
            includeLogoCheckbox.addEventListener('change', updatePreview);
            includeParticlesCheckbox.addEventListener('change', updatePreview);
            
            presetSizes.forEach(preset => {
                preset.addEventListener('click', function() {
                    widthInput.value = this.dataset.width;
                    heightInput.value = this.dataset.height;
                    updatePreview();
                });
            });
            
            layoutOptions.forEach(option => {
                option.addEventListener('click', function() {
                    layoutOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    layoutTypeInput.value = this.dataset.value;
                    updatePreview();
                });
            });
            
            const form = document.getElementById('ad-form');
            const generateBtn = document.getElementById('generate-btn');
            
            generateBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                form.submit();
                
                this.disabled = true;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating...';
            });
            
            updatePreview();
        });
    </script>
</body>
</html>
