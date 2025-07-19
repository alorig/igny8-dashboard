<?php
/**
 * Template Name: Appearance Settings
 * Template Post Type: page
 * 
 * Appearance Settings Page
 * Allows users to customize theme colors
 */
get_header();
get_sidebar();
?>
<div class="main-content">
    <h1>Appearance Settings</h1>
    <div class="module-content">
        <p>Customize the visual appearance of your Igny8 Dashboard by selecting your preferred color scheme.</p>
        
        <div class="appearance-settings">
            <h2>Color Scheme</h2>
            <div class="setting-group">
                <label for="theme-selector" class="setting-label">Choose Theme Color:</label>
                <select id="theme-selector" class="theme-dropdown">
                    <option value="blue" data-preview="blue">Blue - Professional & Clean</option>
                    <option value="green" data-preview="green">Green - Fresh & Natural</option>
                    <option value="purple" data-preview="purple">Purple - Creative & Modern</option>
                    <option value="orange" data-preview="orange">Orange - Energetic & Warm</option>
                    <option value="red" data-preview="red">Red - Bold & Powerful</option>
                </select>
            </div>
            
            <div class="theme-preview">
                <h3>Theme Preview</h3>
                <div class="preview-cards">
                    <div class="preview-card">
                        <div class="preview-header">
                            <h4>Primary Color</h4>
                        </div>
                        <div class="preview-color primary-color"></div>
                    </div>
                    <div class="preview-card">
                        <div class="preview-header">
                            <h4>Sidebar</h4>
                        </div>
                        <div class="preview-color sidebar-color"></div>
                    </div>
                    <div class="preview-card">
                        <div class="preview-header">
                            <h4>Accent</h4>
                        </div>
                        <div class="preview-color accent-color"></div>
                    </div>
                </div>
            </div>
            
            <div class="setting-actions">
                <button id="apply-theme" class="btn btn-primary">Apply Theme</button>
                <button id="reset-theme" class="btn btn-secondary">Reset to Default</button>
            </div>
        </div>
        
        <div class="theme-info">
            <h2>About Color Schemes</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h3>Blue Theme</h3>
                    <p>Professional and trustworthy. Perfect for corporate environments and business applications.</p>
                </div>
                <div class="info-card">
                    <h3>Green Theme</h3>
                    <p>Fresh and natural. Great for environmental, health, or growth-focused applications.</p>
                </div>
                <div class="info-card">
                    <h3>Purple Theme</h3>
                    <p>Creative and modern. Ideal for design, innovation, or luxury applications.</p>
                </div>
                <div class="info-card">
                    <h3>Orange Theme</h3>
                    <p>Energetic and warm. Perfect for dynamic, action-oriented applications.</p>
                </div>
                <div class="info-card">
                    <h3>Red Theme</h3>
                    <p>Bold and powerful. Great for high-impact, attention-grabbing applications.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const themeSelector = document.getElementById('theme-selector');
    const applyBtn = document.getElementById('apply-theme');
    const resetBtn = document.getElementById('reset-theme');
    
    // Load current theme
    const currentTheme = localStorage.getItem('igny8-theme') || 'blue';
    themeSelector.value = currentTheme;
    updatePreview(currentTheme);
    
    // Theme selector change
    themeSelector.addEventListener('change', function() {
        const selectedTheme = this.value;
        updatePreview(selectedTheme);
    });
    
    // Apply theme
    applyBtn.addEventListener('click', function() {
        const selectedTheme = themeSelector.value;
        setTheme(selectedTheme);
        showMessage('Theme applied successfully!', 'success');
    });
    
    // Reset theme
    resetBtn.addEventListener('click', function() {
        themeSelector.value = 'blue';
        setTheme('blue');
        updatePreview('blue');
        showMessage('Theme reset to default!', 'info');
    });
    
    function updatePreview(theme) {
        const colors = {
            blue: { primary: '#3498db', sidebar: '#2c3e50', accent: '#3498db' },
            green: { primary: '#27ae60', sidebar: '#1e8449', accent: '#27ae60' },
            purple: { primary: '#9b59b6', sidebar: '#6c3483', accent: '#9b59b6' },
            orange: { primary: '#e67e22', sidebar: '#a04002', accent: '#e67e22' },
            red: { primary: '#e74c3c', sidebar: '#922b21', accent: '#e74c3c' }
        };
        
        const color = colors[theme];
        document.querySelector('.primary-color').style.backgroundColor = color.primary;
        document.querySelector('.sidebar-color').style.backgroundColor = color.sidebar;
        document.querySelector('.accent-color').style.backgroundColor = color.accent;
    }
    
    function setTheme(theme) {
        document.documentElement.removeAttribute('data-theme');
        if (theme !== 'blue') {
            document.documentElement.setAttribute('data-theme', theme);
        }
        localStorage.setItem('igny8-theme', theme);
    }
    
    function showMessage(text, type) {
        const message = document.createElement('div');
        message.className = `message message-${type}`;
        message.textContent = text;
        message.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 5px;
            color: white;
            z-index: 1000;
            animation: slideIn 0.3s ease-out;
        `;
        
        if (type === 'success') {
            message.style.background = 'var(--success-color)';
        } else if (type === 'info') {
            message.style.background = 'var(--primary-color)';
        }
        
        document.body.appendChild(message);
        
        setTimeout(() => {
            if (message.parentNode) {
                message.remove();
            }
        }, 3000);
    }
});
</script>

<?php get_footer(); ?> 