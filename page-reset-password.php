<?php
/*
Template Name: Reset Password
*/

// Redirect if user is already logged in
if (is_user_logged_in()) {
    wp_redirect(home_url('/'));
    exit;
}

// Get reset key and login from URL
$reset_key = isset($_GET['key']) ? sanitize_text_field($_GET['key']) : '';
$user_login = isset($_GET['login']) ? sanitize_text_field($_GET['login']) : '';

$message = '';
$message_type = '';
$show_form = false;

// Validate reset key and user
if ($reset_key && $user_login) {
    $user = get_user_by('login', $user_login);
    
    if ($user) {
        // Check if the reset key is valid
        $valid_key = check_password_reset_key($reset_key, $user_login);
        
        if (!is_wp_error($valid_key)) {
            $show_form = true;
        } else {
            $message = 'This password reset link has expired or is invalid. Please request a new one.';
            $message_type = 'error';
        }
    } else {
        $message = 'Invalid user account. Please check your reset link.';
        $message_type = 'error';
    }
} else {
    $message = 'Invalid reset link. Please request a new password reset.';
    $message_type = 'error';
}

// Handle password reset form submission
if ($_POST && isset($_POST['new_password']) && $show_form) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    if (empty($new_password)) {
        $message = 'Please enter a new password.';
        $message_type = 'error';
    } elseif (strlen($new_password) < 6) {
        $message = 'Password must be at least 6 characters long.';
        $message_type = 'error';
    } elseif ($new_password !== $confirm_password) {
        $message = 'Passwords do not match. Please try again.';
        $message_type = 'error';
    } else {
        // Reset the password
        reset_password($user, $new_password);
        
        // Delete the reset key
        delete_user_meta($user->ID, 'password_reset_key');
        delete_user_meta($user->ID, 'password_reset_time');
        
        $message = 'Your password has been successfully reset. You can now sign in with your new password.';
        $message_type = 'success';
        $show_form = false;
    }
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* Landing Page Styles */
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1C7ED6, #0B2E6B);
            min-height: 100vh;
            color: #222222;
        }

        .landing-container {
            display: flex;
            min-height: 100vh;
        }

        /* Left Side - Hero Content */
        .hero-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 500px;
            text-align: center;
        }

        .hero-logo {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffffff, #4DABF7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-tagline {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            opacity: 0.8;
        }

        /* Right Side - Reset Password Form */
        .reset-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: white;
        }

        .reset-container {
            width: 100%;
            max-width: 400px;
        }

        .reset-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .reset-title {
            font-size: 2rem;
            font-weight: 700;
            color: #222222;
            margin-bottom: 0.5rem;
        }

        .reset-subtitle {
            color: #6C757D;
            font-size: 1rem;
        }

        .reset-form {
            background: #F7F9FB;
            padding: 2rem;
            border-radius: 12px;
            border: 1px solid #E1E4E8;
            box-shadow: 0 4px 20px rgba(28, 126, 214, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #222222;
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #E1E4E8;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus {
            outline: none;
            border-color: #1C7ED6;
            box-shadow: 0 0 0 3px rgba(28, 126, 214, 0.1);
        }

        .form-input::placeholder {
            color: #6C757D;
        }

        .reset-btn {
            width: 100%;
            padding: 14px;
            background: #1C7ED6;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .reset-btn:hover {
            background: #0B2E6B;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(28, 126, 214, 0.3);
        }

        .reset-btn:active {
            transform: translateY(0);
        }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #E1E4E8;
        }

        .form-footer a {
            color: #1C7ED6;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #0B2E6B;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid #f5c6cb;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid #c3e6cb;
        }

        .password-requirements {
            background: #e7f3ff;
            color: #0c5460;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid #bee5eb;
            font-size: 0.9rem;
        }

        .password-requirements ul {
            margin: 0.5rem 0 0 0;
            padding-left: 1.5rem;
        }

        .password-requirements li {
            margin-bottom: 0.25rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .landing-container {
                flex-direction: column;
            }
            
            .hero-side {
                padding: 3rem 1rem;
                min-height: 50vh;
            }
            
            .reset-side {
                padding: 2rem 1rem;
                min-height: 50vh;
            }
            
            .hero-logo {
                font-size: 2.5rem;
            }
            
            .reset-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .hero-side {
                padding: 2rem 1rem;
            }
            
            .reset-side {
                padding: 1.5rem 1rem;
            }
            
            .reset-form {
                padding: 1.5rem;
            }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content,
        .reset-container {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <!-- Left Side - Hero Content -->
        <div class="hero-side">
            <div class="hero-content">
                <h1 class="hero-logo">Igny8</h1>
                <p class="hero-tagline">Reset Your Password</p>
                <p class="hero-description">
                    Enter your new password below. Make sure it's secure and easy to remember.
                </p>
            </div>
        </div>

        <!-- Right Side - Reset Password Form -->
        <div class="reset-side">
            <div class="reset-container">
                <div class="reset-header">
                    <h2 class="reset-title">Set New Password</h2>
                    <p class="reset-subtitle">Create a secure password for your account</p>
                </div>

                <?php if ($message): ?>
                    <div class="<?php echo $message_type; ?>-message"><?php echo esc_html($message); ?></div>
                <?php endif; ?>

                <?php if ($show_form): ?>
                    <form class="reset-form" method="post">
                        <div class="password-requirements">
                            <strong>Password Requirements:</strong>
                            <ul>
                                <li>At least 6 characters long</li>
                                <li>Use a mix of letters, numbers, and symbols</li>
                                <li>Avoid common passwords</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" id="new_password" name="new_password" class="form-input" 
                                   placeholder="Enter your new password" required>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-input" 
                                   placeholder="Confirm your new password" required>
                        </div>

                        <button type="submit" class="reset-btn">Reset Password</button>
                    </form>
                <?php endif; ?>

                <div class="form-footer">
                    <a href="<?php echo home_url('/sign-in/'); ?>">← Back to Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.reset-form');
            if (form) {
                const inputs = form.querySelectorAll('.form-input');
                
                inputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('focused');
                    });
                    
                    input.addEventListener('blur', function() {
                        if (!this.value) {
                            this.parentElement.classList.remove('focused');
                        }
                    });
                });

                form.addEventListener('submit', function(e) {
                    const newPassword = document.getElementById('new_password').value;
                    const confirmPassword = document.getElementById('confirm_password').value;
                    
                    if (!newPassword || !confirmPassword) {
                        e.preventDefault();
                        alert('Please fill in all fields');
                        return;
                    }
                    
                    if (newPassword.length < 6) {
                        e.preventDefault();
                        alert('Password must be at least 6 characters long');
                        return;
                    }
                    
                    if (newPassword !== confirmPassword) {
                        e.preventDefault();
                        alert('Passwords do not match');
                        return;
                    }
                });
            }
        });
    </script>
</body>
</html> 