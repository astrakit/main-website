<?php require_once 'inc/config.php'; ?>
<?php	
$page_title = "Creator Tools | Astrakit";
$page_description = "Creator tools for Astrakit to help you create perfectly sized images and audio clips for your profile and content. Use our image cropper and audio trimmer to optimize your media.";
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
    <div class="floating-particle particle-4"></div>
    <div class="floating-particle particle-5"></div>

    <?php require_once 'inc/navbar.php'; ?>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><span class="highlight">Creator Tools</span> for Astrakit</h1>
                <p>Use these tools to create perfectly sized images and audio clips for your Astrakit profile and content.</p>
            </div>
        </div>
    </section>

    <section class="creator-section">
        <h2>Content <span class="highlight">Creator Tools</span></h2>
        <p class="section-intro">Easy-to-use tools that help you create optimized content for Astrakit. Crop images and trim audio files to the perfect size for your profile.</p>
        
        <div class="tools-nav">
            <div class="tool-tab active" data-tab="image-tool">
                <i class="fas fa-image"></i> Image Cropper
            </div>
            <div class="tool-tab" data-tab="audio-tool">
                <i class="fas fa-music"></i> Audio Trimmer
            </div>
        </div>
        
        <div class="tools-tab-content active" id="image-tool">
            <div class="tool-section">
                <h3 class="text-center">Image <span class="highlight">Cropper</span></h3>
                <p class="section-intro">Upload your image and crop it to exactly 500x250 pixels - perfect for Astrakit banners and thumbnails.</p>
                
                <div class="tools-container">
                    <div class="tool-card">
                        <div class="upload-btn-wrapper">
                            <button class="btn secondary">
                                <i class="fas fa-upload"></i> Choose an image
                            </button>
                            <input type="file" name="image" id="image-input" accept="image/*" />
                        </div>
                        
                        <div class="dimensions-display">
                            <i class="fas fa-crop-alt"></i> Target dimensions: <strong>500×250px</strong>
                        </div>
                        
                        <div class="img-container empty" id="empty-container">
                            <i class="fas fa-image"></i>
                            <p>Upload an image to start cropping</p>
                        </div>
                        
                        <div class="img-container" id="cropper-container" style="display: none;">
                            <img id="image-preview" src="#" alt="Your image">
                        </div>
                        
                        <div class="button-group">
                            <button id="crop-button" class="btn primary" disabled>
                                <i class="fas fa-crop"></i> Crop Image
                            </button>
                            <button id="reset-button" class="btn secondary" disabled>
                                <i class="fas fa-redo"></i> Reset
                            </button>
                        </div>
                        
                        <div class="result-container">
                            <h3>Your Cropped Image (500×250px)</h3>
                            <div class="result-preview">
                                <img id="cropped-image" src="#" alt="Cropped image">
                            </div>
                            <div class="button-group">
                                <a id="download-button" href="#" download="astrakit-image.png" class="btn primary">
                                    <i class="fas fa-download"></i> Download Image
                                </a>
                                <button id="new-image-button" class="btn secondary">
                                    <i class="fas fa-plus"></i> Crop Another Image
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tool-info">
                        <h3><i class="fas fa-info-circle"></i> How to use this tool</h3>
                        <ol>
                            <li>Click <strong>"Choose an image"</strong> to upload an image from your device</li>
                            <li>Adjust the crop area by dragging the corners to select the portion you want to keep</li>
                            <li>Click <strong>"Crop Image"</strong> to generate your 500×250px image</li>
                            <li>Download your cropped image using the download button</li>
                        </ol>
                        <p>This tool helps you create the perfect banner images for your Astrakit profile. The 500×250px size ensures your images look great across all devices.</p>
                        
                        <div class="privacy-note">
                            <i class="fas fa-shield-alt"></i>
                            <span>This tool processes your image directly in your browser - no images are uploaded to our servers, ensuring your privacy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tools-tab-content" id="audio-tool">
            <div class="tool-section">
                <h3 class="text-center">Audio <span class="highlight">Trimmer</span></h3>
                <p class="section-intro">Upload an audio file and trim it to a perfect 10-30 second clip with custom fade effects - ideal for Astrakit audio posts.</p>
                
                <div class="tools-container">
                    <div class="tool-card">
                        <div class="upload-btn-wrapper">
                            <button class="btn secondary">
                                <i class="fas fa-upload"></i> Choose an audio file
                            </button>
                            <input type="file" name="audio" id="audio-input" accept="audio/*" />
                        </div>
                        
                        <div class="dimensions-display">
                            <i class="fas fa-clock"></i> Duration limit: <strong>10-30 seconds</strong>
                        </div>
                        
                        <div class="empty-audio-container" id="empty-audio-container">
                            <i class="fas fa-music"></i>
                            <p>Upload an audio file to start trimming</p>
                            <div class="file-formats">Supported formats: MP3, WAV, OGG, M4A</div>
                        </div>
                        
                        <div id="audio-editor" style="display: none;">
                            <div class="audio-container">
                                <div class="waveform-container">
                                    <div id="waveform"></div>
                                </div>
                                
                                <div class="time-display">
                                    <span id="current-time">0:00</span>
                                    <span id="total-time">0:00</span>
                                </div>
                                
                                <div class="audio-controls">
                                    <button class="play-pause-btn" id="play-btn">
                                        <i class="fas fa-play" id="play-icon"></i>
                                    </button>
                                    
                                    <button class="btn secondary" id="trim-selection-btn">
                                        <i class="fas fa-cut"></i> Trim Selection
                                    </button>
                                    
                                    <button class="btn secondary" id="reset-btn">
                                        <i class="fas fa-redo"></i> Reset
                                    </button>
                                </div>
                                
                                <div class="region-info">
                                    <div>Selected region: <span id="region-start">0:00</span> to <span id="region-end">0:00</span></div>
                                    <div>Duration: <span id="region-duration" class="region-duration">0:00</span> <span id="duration-status"></span></div>
                                </div>
                                
                                <div class="duration-warning" id="duration-warning">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <span>Selection must be between 10 and 30 seconds</span>
                                </div>
                                
                                <div class="fade-controls">
                                    <div class="fade-control">
                                        <label>
                                            <i class="fas fa-volume-down"></i> Fade In
                                        </label>
                                        <div class="range-with-value">
                                            <input type="range" id="fade-in-range" min="0" max="5" step="0.1" value="0.5">
                                            <span class="range-value" id="fade-in-value">0.5s</span>
                                        </div>
                                    </div>
                                    
                                    <div class="fade-control">
                                        <label>
                                            <i class="fas fa-volume-up"></i> Fade Out
                                        </label>
                                        <div class="range-with-value">
                                            <input type="range" id="fade-out-range" min="0" max="5" step="0.1" value="0.5">
                                            <span class="range-value" id="fade-out-value">0.5s</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="audio-result" id="audio-result">
                                <h3>
                                    <i class="fas fa-check-circle"></i>
                                    Your Trimmed Audio
                                </h3>
                                <audio controls id="result-audio-player" class="result-audio-player"></audio>
                                <div class="button-group">
                                    <a id="download-audio-button" href="#" download="astrakit-audio.mp3" class="btn primary">
                                        <i class="fas fa-download"></i> Download Audio
                                    </a>
                                    <button id="new-audio-button" class="btn secondary">
                                        <i class="fas fa-plus"></i> Trim Another Audio
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tool-info">
                        <h3><i class="fas fa-info-circle"></i> How to use this tool</h3>
                        <ol>
                            <li>Click <strong>"Choose an audio file"</strong> to upload audio from your device</li>
                            <li>Drag the waveform <strong>handles</strong> to select a 10-30 second portion</li>
                            <li>Adjust <strong>fade in/out</strong> duration to smooth the start and end</li>
                            <li>Click <strong>"Trim Selection"</strong> to process your audio clip</li>
                            <li>Download your trimmed audio using the download button</li>
                        </ol>
                        <p>This tool helps you create the perfect audio clips for your Astrakit profile. The 10-30 second duration is ideal for audio posts that engage without overwhelming.</p>
                        
                        <div class="privacy-note">
                            <i class="fas fa-shield-alt"></i>
                            <span>This tool processes your audio directly in your browser - no files are uploaded to our servers, ensuring your privacy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'inc/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/6.6.3/wavesurfer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/6.6.3/plugin/wavesurfer.regions.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('image-input');
            const imagePreview = document.getElementById('image-preview');
            const emptyContainer = document.getElementById('empty-container');
            const cropperContainer = document.getElementById('cropper-container');
            const cropButton = document.getElementById('crop-button');
            const resetButton = document.getElementById('reset-button');
            const resultContainer = document.querySelector('.result-container');
            const croppedImage = document.getElementById('cropped-image');
            const downloadButton = document.getElementById('download-button');
            const newImageButton = document.getElementById('new-image-button');         
            let cropper;
            imageInput.addEventListener('change', function(e) {
                const files = e.target.files;
                if (files && files.length) {
                    const file = files[0];
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        emptyContainer.style.display = 'none';
                        cropperContainer.style.display = 'flex';
                        resultContainer.style.display = 'none';
                        if (cropper) {
                            cropper.destroy();
                        }
                        cropper = new Cropper(imagePreview, {
                            aspectRatio: 500 / 250,
                            viewMode: 1,
                            guides: true,
                            background: false,
                            autoCropArea: 0.7,
                            responsive: true,
                            minContainerWidth: 200,
                            minContainerHeight: 100,
                            ready: function() {
                                cropButton.disabled = false;
                                resetButton.disabled = false;
                            }
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });
            cropButton.addEventListener('click', function(e) {
                e.stopPropagation();
                const canvas = cropper.getCroppedCanvas({
                    width: 500,
                    height: 250,
                    imageSmoothingEnabled: true,
                    imageSmoothingQuality: 'high',
                });     
                if (canvas) {
                    canvas.toBlob(function(blob) {
                        const url = URL.createObjectURL(blob);
                        croppedImage.src = url;
                        downloadButton.href = url;
                        downloadButton.setAttribute('download', 'astrakit-image.png');
                        resultContainer.style.display = 'block';
                        resultContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }, 'image/png');
                }
            });
            
            // Add direct event handler for download button to ensure it works
            downloadButton.addEventListener('click', function(e) {
                // Prevent the default behavior only if href doesn't contain a blob URL
                if (!this.href || this.href === '#' || this.href === window.location.href) {
                    e.preventDefault();
                    alert('Please crop an image first before downloading.');
                }
                // Otherwise let the natural download behavior happen
            });
            
            resetButton.addEventListener('click', function(e) {
                e.stopPropagation();
                if (cropper) {
                    cropper.reset();
                }
                resultContainer.style.display = 'none';
            });
            newImageButton.addEventListener('click', function(e) {
                e.stopPropagation();
                imageInput.value = '';
                emptyContainer.style.display = 'flex';
                cropperContainer.style.display = 'none';
                resultContainer.style.display = 'none';
                
                if (cropper) {
                    cropper.destroy();
                    cropper = null;
                }
                
                cropButton.disabled = true;
                resetButton.disabled = true;
            });
            const toolTabs = document.querySelectorAll('.tool-tab');
            const toolsContents = document.querySelectorAll('.tools-tab-content');    
            
            // Function to activate a specific tab
            function activateTab(tabId) {
                toolTabs.forEach(t => t.classList.remove('active'));
                toolsContents.forEach(c => c.classList.remove('active'));
                
                const targetTab = document.querySelector(`.tool-tab[data-tab="${tabId}"]`);
                if (targetTab) {
                    targetTab.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                    // Update the URL hash without causing a page jump
                    history.replaceState(null, null, `#${tabId}`);
                }
            }
            
            // Check for URL hash on page load and activate that tab
            if (window.location.hash) {
                const tabId = window.location.hash.substring(1); // Remove the # symbol
                activateTab(tabId);
            }
            
            // Handle tab clicks
            toolTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const tabId = tab.getAttribute('data-tab');
                    activateTab(tabId);
                });
            });
            
            // Handle browser back/forward navigation
            window.addEventListener('popstate', function() {
                if (window.location.hash) {
                    const tabId = window.location.hash.substring(1);
                    activateTab(tabId);
                } else {
                    // Default to the first tab if no hash is present
                    activateTab('image-tool');
                }
            });
            
            const audioInput = document.getElementById('audio-input');
            const emptyAudioContainer = document.getElementById('empty-audio-container');
            const audioEditor = document.getElementById('audio-editor');
            const playBtn = document.getElementById('play-btn');
            const playIcon = document.getElementById('play-icon');
            const trimSelectionBtn = document.getElementById('trim-selection-btn');
            const resetBtn = document.getElementById('reset-btn');
            const currentTimeEl = document.getElementById('current-time');
            const totalTimeEl = document.getElementById('total-time');
            const regionStartEl = document.getElementById('region-start');
            const regionEndEl = document.getElementById('region-end');
            const regionDurationEl = document.getElementById('region-duration');
            const durationStatusEl = document.getElementById('duration-status');
            const durationWarningEl = document.getElementById('duration-warning');
            const fadeInRange = document.getElementById('fade-in-range');
            const fadeInValue = document.getElementById('fade-in-value');
            const fadeOutRange = document.getElementById('fade-out-range');
            const fadeOutValue = document.getElementById('fade-out-value');
            const audioResult = document.getElementById('audio-result');
            const resultAudioPlayer = document.getElementById('result-audio-player');
            const downloadAudioButton = document.getElementById('download-audio-button');
            const newAudioButton = document.getElementById('new-audio-button');
            let wavesurfer;
            let audioContext;
            let audioBuffer;
            let activeRegion = null;
            function initWaveSurfer() {
                if (wavesurfer) {
                    wavesurfer.destroy();
                }
                wavesurfer = WaveSurfer.create({
                    container: '#waveform',
                    waveColor: 'rgba(255, 255, 255, 0.3)',
                    progressColor: 'rgba(139, 204, 91, 0.7)',
                    cursorColor: '#8BCC5B',
                    barWidth: 2,
                    barRadius: 2,
                    cursorWidth: 1,
                    height: 100,
                    barGap: 2,
                    responsive: true,
                    plugins: [
                        WaveSurfer.regions.create({
                            regions: [],
                            dragSelection: true,
                            color: 'rgba(139, 204, 91, 0.2)',
                            handleStyle: {
                                left: {
                                    backgroundColor: '#8BCC5B',
                                    width: '4px',
                                    height: '100%',
                                    cursor: 'ew-resize'
                                },
                                right: {
                                    backgroundColor: '#8BCC5B',
                                    width: '4px',
                                    height: '100%',
                                    cursor: 'ew-resize'
                                }
                            }
                        })
                    ]
                });
                wavesurfer.on('ready', function() {
                    const duration = wavesurfer.getDuration();
                    totalTimeEl.textContent = formatTime(duration);
                    const initialStart = Math.max(0, duration / 2 - 10);
                    const initialEnd = Math.min(duration, initialStart + 20);
                    activeRegion = wavesurfer.regions.create({
                        start: initialStart,
                        end: initialEnd,
                        color: 'rgba(139, 204, 91, 0.2)',
                        drag: true,
                        resize: true
                    });
                    updateRegionInfo(activeRegion);
                    checkRegionDuration(activeRegion);
                });
                wavesurfer.on('audioprocess', function() {
                    currentTimeEl.textContent = formatTime(wavesurfer.getCurrentTime());
                });
                wavesurfer.on('region-created', function(region) {
                    wavesurfer.regions.list && Object.keys(wavesurfer.regions.list).forEach(id => {
                        if (id !== region.id) {
                            wavesurfer.regions.list[id].remove();
                        }
                    });                
                    activeRegion = region;
                    updateRegionInfo(region);
                    checkRegionDuration(region);
                });
                wavesurfer.on('region-updated', function(region) {
                    updateRegionInfo(region);
                    checkRegionDuration(region);
                });              
                wavesurfer.on('play', function() {
                    playIcon.classList.remove('fa-play');
                    playIcon.classList.add('fa-pause');
                });               
                wavesurfer.on('pause', function() {
                    playIcon.classList.remove('fa-pause');
                    playIcon.classList.add('fa-play');
                });
            }
            function formatTime(seconds) {
                seconds = Math.floor(seconds);
                const minutes = Math.floor(seconds / 60);
                seconds = seconds % 60;
                return `${minutes}:${seconds.toString().padStart(2, '0')}`;
            }
            function updateRegionInfo(region) {
                regionStartEl.textContent = formatTime(region.start);
                regionEndEl.textContent = formatTime(region.end);
                regionDurationEl.textContent = formatTime(region.end - region.start);
            }
            function checkRegionDuration(region) {
                const duration = region.end - region.start;
                trimSelectionBtn.disabled = false;
                durationWarningEl.style.display = 'none';              
                if (duration < 10) {
                    durationStatusEl.textContent = '(too short)';
                    durationStatusEl.style.color = '#ff7e33';
                    durationWarningEl.style.display = 'flex';
                    trimSelectionBtn.disabled = true;
                } else if (duration > 30) {
                    durationStatusEl.textContent = '(too long)';
                    durationStatusEl.style.color = '#ff7e33';
                    durationWarningEl.style.display = 'flex';
                    trimSelectionBtn.disabled = true;
                } else {
                    durationStatusEl.textContent = '(perfect)';
                    durationStatusEl.style.color = '#8BCC5B';
                }
            }
            function initAudioContext() {
                if (!audioContext) {
                    audioContext = new (window.AudioContext || window.webkitAudioContext)();
                }
            }
            audioInput.addEventListener('change', function(e) {
                const files = e.target.files;               
                if (files && files.length) {
                    const file = files[0];
                    initWaveSurfer();
                    emptyAudioContainer.style.display = 'none';
                    audioEditor.style.display = 'block';
                    audioResult.style.display = 'none';
                    wavesurfer.loadBlob(file);
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        initAudioContext();                       
                        const audioData = e.target.result;
                        audioContext.decodeAudioData(audioData).then(function(buffer) {
                            audioBuffer = buffer;
                        });
                    };
                    reader.readAsArrayBuffer(file);
                }
            });
            playBtn.addEventListener('click', function() {
                wavesurfer && wavesurfer.playPause();
            });
            resetBtn.addEventListener('click', function() {
                if (wavesurfer && activeRegion) {
                    wavesurfer.pause();
                    const duration = wavesurfer.getDuration();
                    const initialStart = Math.max(0, duration / 2 - 10);
                    const initialEnd = Math.min(duration, initialStart + 20);                 
                    activeRegion.update({
                        start: initialStart,
                        end: initialEnd
                    });                  
                    audioResult.style.display = 'none';
                }
            });
            fadeInRange.addEventListener('input', function() {
                fadeInValue.textContent = this.value + 's';
            });          
            fadeOutRange.addEventListener('input', function() {
                fadeOutValue.textContent = this.value + 's';
            });
            trimSelectionBtn.addEventListener('click', function() {
                if (!wavesurfer || !audioBuffer || !activeRegion) return;
                const start = activeRegion.start;
                const end = activeRegion.end;
                const fadeInDuration = parseFloat(fadeInRange.value);
                const fadeOutDuration = parseFloat(fadeOutRange.value);
                const duration = end - start;
                if (duration < 10 || duration > 30) {
                    return;
                }
                processAudio(start, end, fadeInDuration, fadeOutDuration);
            });
            function processAudio(start, end, fadeInDuration, fadeOutDuration) {
                if (!audioBuffer) return;
                const sampleRate = audioBuffer.sampleRate;
                const startSample = Math.floor(start * sampleRate);
                const endSample = Math.floor(end * sampleRate);
                const clipDuration = end - start;
                const clipBuffer = audioContext.createBuffer(
                    audioBuffer.numberOfChannels,
                    Math.ceil(clipDuration * sampleRate),
                    sampleRate
                );
                for (let channel = 0; channel < audioBuffer.numberOfChannels; channel++) {
                    const originalData = audioBuffer.getChannelData(channel);
                    const clipData = clipBuffer.getChannelData(channel);              
                    for (let i = 0; i < clipBuffer.length; i++) {
                        clipData[i] = originalData[i + startSample];
                    }
                    const fadeInSamples = Math.floor(fadeInDuration * sampleRate);
                    for (let i = 0; i < fadeInSamples && i < clipData.length; i++) {
                        const gain = i / fadeInSamples;
                        clipData[i] *= gain;
                    }
                    const fadeOutSamples = Math.floor(fadeOutDuration * sampleRate);
                    for (let i = 0; i < fadeOutSamples && i < clipData.length; i++) {
                        const gain = (fadeOutSamples - i) / fadeOutSamples;
                        const position = clipData.length - 1 - i;
                        if (position >= 0) {
                            clipData[position] *= gain;
                        }
                    }
                }
                const offlineContext = new OfflineAudioContext(
                    clipBuffer.numberOfChannels,
                    clipBuffer.length,
                    clipBuffer.sampleRate
                );          
                const source = offlineContext.createBufferSource();
                source.buffer = clipBuffer;
                source.connect(offlineContext.destination);
                source.start(0);              
                offlineContext.startRendering().then(function(renderedBuffer) {
                    const wav = audioBufferToWav(renderedBuffer);
                    const blob = new Blob([wav], { type: 'audio/wav' });
                    const url = URL.createObjectURL(blob);
                    resultAudioPlayer.src = url;
                    downloadAudioButton.href = url;
                    audioResult.style.display = 'block';
                    audioResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }).catch(function(err) {
                    console.error('Audio rendering failed:', err);
                });
            }
            function audioBufferToWav(buffer) {
                const numOfChan = buffer.numberOfChannels;
                const length = buffer.length * numOfChan * 2 + 44;
                const dataLen = buffer.length * numOfChan * 2;  
                const bitDepth = 16;
                const bytesPerSample = bitDepth / 8;
                const blockAlign = numOfChan * bytesPerSample;
                const byteRate = buffer.sampleRate * blockAlign;            
                const view = new DataView(new ArrayBuffer(length));
                writeString(view, 0, 'RIFF');
                view.setUint32(4, 36 + dataLen, true);
                writeString(view, 8, 'WAVE');
                writeString(view, 12, 'fmt ');
                view.setUint32(16, 16, true);
                view.setUint16(20, 1, true);
                view.setUint16(22, numOfChan, true);
                view.setUint32(24, buffer.sampleRate, true);
                view.setUint32(28, byteRate, true);
                view.setUint16(32, blockAlign, true);
                view.setUint16(34, bitDepth, true);
                writeString(view, 36, 'data');
                view.setUint32(40, dataLen, true);
                const data = new Float32Array(buffer.length * numOfChan);
                let offset = 44;
                let channelData;
                let sample;
                for (let i = 0; i < buffer.numberOfChannels; i++) {
                    channelData = buffer.getChannelData(i);                 
                    for (let j = 0; j < buffer.length; j++) {
                        sample = Math.max(-1, Math.min(1, channelData[j]));
                        sample = sample < 0 ? sample * 0x8000 : sample * 0x7FFF;
                        view.setInt16(offset, sample, true);
                        offset += 2;
                    }
                }               
                return view.buffer;
            }
            function writeString(view, offset, string) {
                for (let i = 0; i < string.length; i++) {
                    view.setUint8(offset + i, string.charCodeAt(i));
                }
            }
            newAudioButton.addEventListener('click', function() {
                audioInput.value = '';
                emptyAudioContainer.style.display = 'flex';
                audioEditor.style.display = 'none';
                audioResult.style.display = 'none';               
                if (wavesurfer) {
                    wavesurfer.destroy();
                    wavesurfer = null;
                }                
                audioBuffer = null;
                activeRegion = null;
            });
        });
    </script>
    <script src="src/app.js"></script>
</body>

</html>
