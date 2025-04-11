document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    
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
    const layoutTypeInput = document.getElementById('layout-type');
    
    const presetSizes = document.querySelectorAll('.preset-size');
    const layoutOptions = document.querySelectorAll('.layout-option');
    
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    
    const generateBtn = document.getElementById('generate-btn');
    const adForm = document.getElementById('ad-form');
    
    const resultContainer = document.getElementById('result-container');
    const generatorContainer = document.getElementById('generator-container');
    const resultImage = document.getElementById('result-image');
    const downloadBtn = document.getElementById('download-btn');
    const createAnotherBtn = document.getElementById('create-another-btn');
    
    let logoImage = new Image();
    logoImage.src = 'src/images/favicon.png';
    
    let pixelRatio = window.devicePixelRatio || 1;
    
    let fontsLoaded = false;
    document.fonts.ready.then(() => {
        fontsLoaded = true;
        updatePreview();
    });
    
    function hexToRgb(hex) {
        const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    }
    
    function drawSoftBlurredCircle(ctx, x, y, radius, color, opacity = 0.2) {
        const tempCanvas = document.createElement('canvas');
        const tempCtx = tempCanvas.getContext('2d');
        
        const size = radius * 2.5;
        tempCanvas.width = size;
        tempCanvas.height = size;
        
        const rgbColor = hexToRgb(color);
        
        const gradient = tempCtx.createRadialGradient(
            size/2, size/2, 0,
            size/2, size/2, radius
        );
        
        gradient.addColorStop(0, `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, ${opacity})`);
        gradient.addColorStop(0.8, `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, ${opacity * 0.5})`);
        gradient.addColorStop(1, `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, 0)`);
        
        tempCtx.fillStyle = gradient;
        tempCtx.fillRect(0, 0, size, size);
        
        tempCtx.filter = 'blur(30px)';
        tempCtx.globalCompositeOperation = 'source-over';
        tempCtx.fillStyle = gradient;
        tempCtx.fillRect(0, 0, size, size);
        
        ctx.drawImage(tempCanvas, x - size/2, y - size/2);
    }
    
    function drawParticles(ctx, width, height, color, count = 8) {
        const rgbColor = hexToRgb(color);
        
        for (let i = 0; i < count; i++) {
            const size = Math.random() * 3 + 1;
            const x = Math.random() * width;
            const y = Math.random() * height;
            const opacity = Math.random() * 0.4 + 0.1;
            
            const gradientSize = size * 2;
            const gradient = ctx.createRadialGradient(
                x, y, 0,
                x, y, gradientSize
            );
            
            gradient.addColorStop(0, `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, ${opacity})`);
            gradient.addColorStop(1, `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, 0)`);
            
            ctx.fillStyle = gradient;
            ctx.beginPath();
            ctx.arc(x, y, gradientSize, 0, Math.PI * 2);
            ctx.fill();
        }
    }
    
    function renderBanner(generateFinal = false) {
        const width = parseInt(widthInput.value);
        const height = parseInt(heightInput.value);
        const text = adTextInput.value;
        const description = descriptionInput.value;
        const bgColor = bgColorInput.value;
        const textColor = textColorInput.value;
        const descriptionColor = descriptionColorInput.value;
        const accentColor = accentColorInput.value;
        const includeLogo = includeLogoCheckbox.checked;
        const includeParticles = includeParticlesCheckbox.checked;
        const layoutType = layoutTypeInput.value;
        
        if (width < 50 || height < 50 || width > 2000 || height > 1200) {
            showAlert("Dimensions must be between 50px and 2000x1200px");
            return null;
        }
        
        canvas.width = width * pixelRatio;
        canvas.height = height * pixelRatio;
        canvas.style.width = width + 'px';
        canvas.style.height = height + 'px';
        
        ctx.scale(pixelRatio, pixelRatio);
        ctx.clearRect(0, 0, width, height);
        
        ctx.fillStyle = bgColor;
        ctx.fillRect(0, 0, width, height);
        
        if (includeParticles) {
            drawSoftBlurredCircle(ctx, width * 0.8, height * 0.2, width * 0.3, accentColor, 0.15);
            drawSoftBlurredCircle(ctx, width * 0.2, height * 0.8, width * 0.25, accentColor, 0.12);
            
            drawParticles(ctx, width, height, accentColor, 10);
        }
        
        const fontSize = Math.min(height / 8, width / 16); 
        const descFontSize = fontSize * 0.5;
        
        ctx.textBaseline = 'top';
        
        switch(layoutType) {
            case 'centered':
                ctx.font = `${fontSize}px 'Outfit', sans-serif`;
                ctx.fillStyle = textColor;
                ctx.textAlign = 'center';
                
                let textY = height / 2 - fontSize / 1.5;
                
                if (description) {
                    textY = height * 0.35;
                }
                
                if (includeLogo && logoImage.complete) {
                    const logoSize = Math.min(fontSize, 60);
                    ctx.drawImage(
                        logoImage, 
                        width / 2 - logoSize / 2, 
                        textY - logoSize - 20, 
                        logoSize, 
                        logoSize
                    );
                }
                
                ctx.shadowColor = 'rgba(0, 0, 0, 0.2)';
                ctx.shadowBlur = 3;
                ctx.shadowOffsetY = 2;
                ctx.fillText(text, width / 2, textY);
                ctx.shadowColor = 'transparent';
                
                if (description) {
                    ctx.font = `${descFontSize}px 'Spline Sans', sans-serif`;
                    ctx.fillStyle = descriptionColor;
                    ctx.fillText(description, width / 2, textY + fontSize + 15);
                }
                break;
                
            case 'right':
                ctx.font = `${fontSize}px 'Outfit', sans-serif`;
                ctx.fillStyle = textColor;
                ctx.textAlign = 'right';
                
                const padding = width * 0.07;
                let textXRight = width - padding;
                let textYRight = height / 2 - fontSize / 1.5;
                
                if (description) {
                    textYRight = height * 0.35;
                }
                
                if (includeLogo && logoImage.complete) {
                    const logoSize = Math.min(fontSize, 60);
                    ctx.drawImage(
                        logoImage, 
                        width - padding - logoSize, 
                        textYRight - logoSize - 20, 
                        logoSize, 
                        logoSize
                    );
                }
                
                ctx.shadowColor = 'rgba(0, 0, 0, 0.2)';
                ctx.shadowBlur = 3;
                ctx.shadowOffsetY = 2;
                ctx.fillText(text, textXRight, textYRight);
                ctx.shadowColor = 'transparent';
                
                if (description) {
                    ctx.font = `${descFontSize}px 'Spline Sans', sans-serif`;
                    ctx.fillStyle = descriptionColor;
                    ctx.fillText(description, textXRight, textYRight + fontSize + 15);
                }
                break;
                
            case 'left':
            default:
                ctx.textAlign = 'left';
                const paddingLeft = width * 0.07;
                let startX = paddingLeft;
                let textYLeft = height / 2 - fontSize / 1.5;
                
                if (description) {
                    textYLeft = height * 0.35;
                }
                
                if (includeLogo && logoImage.complete) {
                    const logoSize = Math.min(fontSize, 60);
                    ctx.drawImage(
                        logoImage, 
                        paddingLeft, 
                        textYLeft, 
                        logoSize, 
                        logoSize
                    );
                    startX = paddingLeft + logoSize + 20;
                }
                
                ctx.shadowColor = 'rgba(0, 0, 0, 0.2)';
                ctx.shadowBlur = 3;
                ctx.shadowOffsetY = 2;
                ctx.font = `${fontSize}px 'Outfit', sans-serif`;
                ctx.fillStyle = textColor;
                ctx.fillText(text, startX, textYLeft);
                ctx.shadowColor = 'transparent';
                
                if (description) {
                    ctx.font = `${descFontSize}px 'Spline Sans', sans-serif`;
                    ctx.fillStyle = descriptionColor;
                    ctx.fillText(description, startX, textYLeft + fontSize + 15);
                }
                break;
        }
        
        ctx.scale(1/pixelRatio, 1/pixelRatio);
        
        if (generateFinal) {
            return canvas.toDataURL('image/png');
        }
        
        return null;
    }
    
    function updatePreview() {
        if (!fontsLoaded) return;
        renderBanner();
        
        const width = widthInput.value + 'px';
        const height = heightInput.value + 'px';
        
        previewContainer.style.width = width;
        previewContainer.style.height = height;
        
        bgColorPreview.style.backgroundColor = bgColorInput.value;
        textColorPreview.style.backgroundColor = textColorInput.value;
        descriptionColorPreview.style.backgroundColor = descriptionColorInput.value;
        accentColorPreview.style.backgroundColor = accentColorInput.value;
    }
    
    function showAlert(message) {
        const alertContainer = document.getElementById('alert-container');
        alertContainer.innerHTML = `
            <div class="alert">
                <p>${message}</p>
            </div>
        `;
        
        setTimeout(() => {
            alertContainer.innerHTML = '';
        }, 5000);
    }
    
    function formatFilename(text) {
        return text
            .toLowerCase()
            .replace(/[^\w\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .substring(0, 60);
    }
    
    function generateBanner() {
        try {
            const dataUrl = renderBanner(true);
            const title = adTextInput.value.trim();
            const filename = formatFilename(title) || 'astrakit-banner';
            
            if (dataUrl) {
                resultImage.src = dataUrl;
                downloadBtn.href = dataUrl;
                downloadBtn.setAttribute('download', `${filename}.png`);
                
                resultContainer.style.display = 'block';
                generatorContainer.style.display = 'none';
            }
        } catch (error) {
            showAlert('Error generating banner: ' + error.message);
            console.error(error);
        }
    }
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(this.dataset.tab + '-tab').classList.add('active');
        });
    });
    
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
    
    adForm.addEventListener('submit', function(e) {
        e.preventDefault();
        generateBtn.disabled = true;
        generateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating...';
        
        setTimeout(() => {
            generateBanner();
            generateBtn.disabled = false;
            generateBtn.innerHTML = '<i class="fas fa-magic"></i> Generate Banner';
        }, 500);
    });
    
    createAnotherBtn.addEventListener('click', function() {
        resultContainer.style.display = 'none';
        generatorContainer.style.display = 'grid';
    });
    
    logoImage.onload = updatePreview;
    window.addEventListener('load', updatePreview);
    
    window.updatePreview = updatePreview;

    const templates = {
        'modern-dark': {
            width: 1200,
            height: 600,
            bgColor: '#121212',
            textColor: '#ffffff',
            descriptionColor: '#cccccc',
            accentColor: '#8BCC5B',
            layout: 'centered',
            includeLogo: true,
            includeParticles: true,
            title: 'Modern & Minimal',
            description: 'Clean design with a professional look'
        },
        'gradient-green': {
            width: 1200,
            height: 600,
            bgColor: '#0F2027',
            textColor: '#ffffff',
            descriptionColor: '#e0e0e0',
            accentColor: '#8BCC5B',
            layout: 'left',
            includeLogo: true,
            includeParticles: true,
            title: 'Gradient Design',
            description: 'Bold colors that make your content stand out'
        },
        'minimal-light': {
            width: 800,
            height: 400,
            bgColor: '#f5f5f5',
            textColor: '#212121',
            descriptionColor: '#616161',
            accentColor: '#8BCC5B',
            layout: 'centered',
            includeLogo: true,
            includeParticles: false,
            title: 'Light & Clean',
            description: 'Minimalist design for clean presentation'
        },
        'tech-blue': {
            width: 1200,
            height: 600,
            bgColor: '#0A192F',
            textColor: '#64FFDA',
            descriptionColor: '#CCD6F6',
            accentColor: '#64FFDA',
            layout: 'right',
            includeLogo: true,
            includeParticles: true,
            title: 'Tech Inspired',
            description: 'Perfect for technology and innovation themes'
        },
        'vibrant-green': {
            width: 800,
            height: 400,
            bgColor: '#1E3A24',
            textColor: '#8BCC5B',
            descriptionColor: '#E0F5D7',
            accentColor: '#8BCC5B',
            layout: 'centered',
            includeLogo: true,
            includeParticles: true,
            title: 'Vibrant & Bold',
            description: 'Energetic design that captures attention'
        },
        'astrakit': {
            width: 1200,
            height: 600,
            bgColor: '#161616',
            textColor: '#ffffff',
            descriptionColor: '#cccccc',
            accentColor: '#8BCC5B',
            layout: 'left',
            includeLogo: true,
            includeParticles: true,
            title: 'Astrakit Official',
            description: 'The official branding style of Astrakit'
        }
    };

    // Add template selection functionality
    const templateCards = document.querySelectorAll('.template-card');
    templateCards.forEach(card => {
        card.addEventListener('click', function() {
            templateCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            
            const templateName = this.getAttribute('data-template');
            const template = templates[templateName];
            
            if (template) {
                // Apply template settings
                widthInput.value = template.width;
                heightInput.value = template.height;
                bgColorInput.value = template.bgColor;
                textColorInput.value = template.textColor;
                descriptionColorInput.value = template.descriptionColor;
                accentColorInput.value = template.accentColor;
                adTextInput.value = template.title;
                descriptionInput.value = template.description;
                includeLogoCheckbox.checked = template.includeLogo;
                includeParticlesCheckbox.checked = template.includeParticles;
                
                // Update layout option
                layoutOptions.forEach(opt => {
                    opt.classList.remove('selected');
                    if (opt.getAttribute('data-value') === template.layout) {
                        opt.classList.add('selected');
                        layoutTypeInput.value = template.layout;
                    }
                });
                
                // Show basics tab after template selection
                tabs.forEach(tab => {
                    tab.classList.remove('active');
                    if (tab.getAttribute('data-tab') === 'basics') {
                        tab.classList.add('active');
                    }
                });
                
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === 'basics-tab') {
                        content.classList.add('active');
                    }
                });
                
                // Update the preview
                updatePreview();
            }
        });
    });
});
