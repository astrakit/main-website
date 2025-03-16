document.addEventListener("DOMContentLoaded", function() {
    // Create glowing orb elements
    const createOrbs = () => {
        const body = document.body;
        
        // Create the orbs
        const orb1 = document.createElement('div');
        orb1.className = 'glow-orb';
        orb1.style.width = '800px';
        orb1.style.height = '800px';
        orb1.style.top = '-400px';
        orb1.style.right = '-200px';
        
        const orb2 = document.createElement('div');
        orb2.className = 'glow-orb';
        orb2.style.width = '600px';
        orb2.style.height = '600px';
        orb2.style.bottom = '-300px';
        orb2.style.left = '-100px';
        
        // Append to body
        body.appendChild(orb1);
        body.appendChild(orb2);
    };
    
    // Initialize
    createOrbs();
    
    // Add data attributes to support any custom theming
    document.documentElement.setAttribute('data-theme', 'astrakit');
    
    // Add theme class to body for additional styling hooks
    document.body.classList.add('astrakit-theme');
});
