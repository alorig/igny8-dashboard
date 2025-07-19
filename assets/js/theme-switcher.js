/**
 * Igny8 Dashboard Theme Switcher
 * Handles theme color changes and settings menu functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize theme from localStorage or default to blue
    const savedTheme = localStorage.getItem('igny8-theme') || 'blue';
    setTheme(savedTheme);
    
    // Settings menu toggle
    const settingsToggle = document.querySelector('.settings-toggle');
    const settingsMenu = document.querySelector('.settings-menu');
    
    if (settingsToggle) {
        settingsToggle.addEventListener('click', function(e) {
            e.preventDefault();
            settingsMenu.classList.toggle('active');
        });
    }
    
    // Theme option clicks
    const themeOptions = document.querySelectorAll('.theme-option');
    themeOptions.forEach(option => {
        option.addEventListener('click', function(e) {
            e.preventDefault();
            const theme = this.getAttribute('data-theme');
            setTheme(theme);
            
            // Close settings menu
            settingsMenu.classList.remove('active');
            
            // Show success message
            showThemeChangeMessage(theme);
        });
    });
    
    // Function to set theme
    function setTheme(theme) {
        // Remove existing theme classes
        document.documentElement.removeAttribute('data-theme');
        
        // Set new theme
        if (theme !== 'blue') {
            document.documentElement.setAttribute('data-theme', theme);
        }
        
        // Save to localStorage
        localStorage.setItem('igny8-theme', theme);
        
        // Update active state in menu
        updateActiveThemeInMenu(theme);
    }
    
    // Function to update active theme in menu
    function updateActiveThemeInMenu(theme) {
        // Remove active class from all theme options
        themeOptions.forEach(option => {
            option.classList.remove('active');
        });
        
        // Add active class to current theme
        const activeOption = document.querySelector(`[data-theme="${theme}"]`);
        if (activeOption) {
            activeOption.classList.add('active');
        }
    }
    
    // Function to show theme change message
    function showThemeChangeMessage(theme) {
        // Create message element
        const message = document.createElement('div');
        message.className = 'theme-change-message';
        message.innerHTML = `
            <div class="message-content">
                <span>Theme changed to ${theme.charAt(0).toUpperCase() + theme.slice(1)}</span>
                <button class="message-close">&times;</button>
            </div>
        `;
        
        // Add styles
        message.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 1000;
            animation: slideIn 0.3s ease-out;
            max-width: 300px;
        `;
        
        // Add to page
        document.body.appendChild(message);
        
        // Close button functionality
        const closeBtn = message.querySelector('.message-close');
        closeBtn.addEventListener('click', function() {
            message.remove();
        });
        
        // Auto remove after 3 seconds
        setTimeout(() => {
            if (message.parentNode) {
                message.remove();
            }
        }, 3000);
    }
    
    // Add CSS for message animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .theme-change-message .message-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .theme-change-message .message-close {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-left: 10px;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .theme-change-message .message-close:hover {
            opacity: 0.8;
        }
        
        .theme-option.active {
            background: var(--primary-color) !important;
            color: white !important;
        }
    `;
    document.head.appendChild(style);
    
});

/**
 * Utility function to get current theme
 */
function getCurrentTheme() {
    return localStorage.getItem('igny8-theme') || 'blue';
}

/**
 * Utility function to change theme programmatically
 */
function changeTheme(theme) {
    const event = new CustomEvent('themeChange', { detail: { theme: theme } });
    document.dispatchEvent(event);
} 