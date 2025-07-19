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
    
    <div class="card appearance-settings">
        <div class="card-header">
            <h2 class="card-title">Theme Customization</h2>
            <p class="card-subtitle">Customize the appearance of your Igny8 Dashboard</p>
        </div>
        
        <div class="card-content">
            <div class="setting-group">
                <label for="theme-selector" class="setting-label">Choose Theme Color</label>
                <select id="theme-selector" class="theme-dropdown">
                    <option value="blue">Blue Theme (Default)</option>
                    <option value="green">Green Theme</option>
                    <option value="purple">Purple Theme</option>
                    <option value="orange">Orange Theme</option>
                    <option value="red">Red Theme</option>
                </select>
            </div>

            <div class="theme-preview">
                <h3>Theme Preview</h3>
                <div class="preview-cards">
                    <div class="card preview-card" data-theme="blue">
                        <div class="preview-header">
                            <h4>Blue Theme</h4>
                            <div class="preview-color" style="background: #3498db;"></div>
                        </div>
                        <p class="text-small">Professional and modern</p>
                    </div>
                    
                    <div class="card preview-card" data-theme="green">
                        <div class="preview-header">
                            <h4>Green Theme</h4>
                            <div class="preview-color" style="background: #27ae60;"></div>
                        </div>
                        <p class="text-small">Fresh and natural</p>
                    </div>
                    
                    <div class="card preview-card" data-theme="purple">
                        <div class="preview-header">
                            <h4>Purple Theme</h4>
                            <div class="preview-color" style="background: #8e44ad;"></div>
                        </div>
                        <p class="text-small">Creative and elegant</p>
                    </div>
                    
                    <div class="card preview-card" data-theme="orange">
                        <div class="preview-header">
                            <h4>Orange Theme</h4>
                            <div class="preview-color" style="background: #e67e22;"></div>
                        </div>
                        <p class="text-small">Energetic and warm</p>
                    </div>
                    
                    <div class="card preview-card" data-theme="red">
                        <div class="preview-header">
                            <h4>Red Theme</h4>
                            <div class="preview-color" style="background: #e74c3c;"></div>
                        </div>
                        <p class="text-small">Bold and powerful</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-footer">
            <div class="setting-actions">
                <p class="text-secondary">Your theme preference will be saved automatically and applied across all pages.</p>
            </div>
        </div>
    </div>

    <div class="grid grid-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Theme Features</h3>
            </div>
            <div class="card-content">
                <ul>
                    <li>Automatic theme persistence</li>
                    <li>Consistent styling across modules</li>
                    <li>Responsive design support</li>
                    <li>Accessibility optimized</li>
                </ul>
            </div>
        </div>

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Customization Tips</h3>
            </div>
            <div class="card-content">
                <ul>
                    <li>Choose colors that match your brand</li>
                    <li>Consider accessibility for all users</li>
                    <li>Test themes on different devices</li>
                    <li>Theme changes apply immediately</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 