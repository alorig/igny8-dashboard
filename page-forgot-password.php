<?php
/*
Template Name: Forgot Password
*/

// Redirect if user is already logged in
if (is_user_logged_in()) {
    wp_redirect(home_url('/'));
    exit;
}

// Handle password reset request
$message = '';
$message_type = '';

if ($_POST && isset($_POST['user_login'])) {
    $user_login = sanitize_text_field($_POST['user_login']);
    
    if (empty($user_login)) {
        $message = 'Please enter your email address or username.';
        $message_type = 'error';
    } else {
        // Check if user exists
        $user = get_user_by('email', $user_login);
        if (!$user) {
            $user = get_user_by('login', $user_login);
        }
        
        if ($user) {
            // Generate reset key
            $key = get_password_reset_key($user);
            if (!is_wp_error($key)) {
                $reset_link = home_url('/reset-password/?key=' . $key . '&login=' . rawurlencode($user->user_login));
                
                // Send email (you can customize this)
                $to = $user->user_email;
                $subject = 'Password Reset Request - ' . get_bloginfo('name');
                $message_body = "Hello,\n\nYou have requested to reset your password.\n\n";
                $message_body .= "Click the following link to reset your password:\n";
                $message_body .= $reset_link . "\n\n";
                $message_body .= "If you didn't request this, please ignore this email.\n\n";
                $message_body .= "Best regards,\n" . get_bloginfo('name');
                
                $headers = array('Content-Type: text/plain; charset=UTF-8');
                
                if (wp_mail($to, $subject, $message_body, $headers)) {
                    $message = 'Password reset instructions have been sent to your email address.';
                    $message_type = 'success';
                } else {
                    $message = 'Failed to send reset email. Please try again.';
                    $message_type = 'error';
                }
            } else {
                $message = 'Error generating reset link. Please try again.';
                $message_type = 'error';
            }
        } else {
            $message = 'No user found with that email address or username.';
            $message_type = 'error';
        }
    }
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password - <?php bloginfo('name'); ?></title>
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

        /* Right Side - Forgot Password Form */
        .forgot-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: white;
        }

        .forgot-container {
            width: 100%;
            max-width: 400px;
        }

        .forgot-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .forgot-title {
            font-size: 2rem;
            font-weight: 700;
            color: #222222;
            margin-bottom: 0.5rem;
        }

        .forgot-subtitle {
            color: #6C757D;
            font-size: 1rem;
        }

        .forgot-form {
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

        .forgot-btn {
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

        .forgot-btn:hover {
            background: #0B2E6B;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(28, 126, 214, 0.3);
        }

        .forgot-btn:active {
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .landing-container {
                flex-direction: column;
            }
            
            .hero-side {
                padding: 3rem 1rem;
                min-height: 50vh;
            }
            
            .forgot-side {
                padding: 2rem 1rem;
                min-height: 50vh;
            }
            
            .hero-logo {
                font-size: 2.5rem;
            }
            
            .forgot-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .hero-side {
                padding: 2rem 1rem;
            }
            
            .forgot-side {
                padding: 1.5rem 1rem;
            }
            
            .forgot-form {
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
        .forgot-container {
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
                    Enter your email address or username and we'll send you a link to reset your password.
                </p>
            </div>
        </div>

        <!-- Right Side - Forgot Password Form -->
        <div class="forgot-side">
            <div class="forgot-container">
                <div class="forgot-header">
                    <h2 class="forgot-title">Forgot Password?</h2>
                    <p class="forgot-subtitle">Enter your email to reset your password</p>
                </div>

                <form class="forgot-form" method="post">
                    <?php if ($message): ?>
                        <div class="<?php echo $message_type; ?>-message"><?php echo esc_html($message); ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="user_login" class="form-label">Email or Username</label>
                        <input type="text" id="user_login" name="user_login" class="form-input" 
                               placeholder="Enter your email or username" 
                               value="<?php echo isset($_POST['user_login']) ? esc_attr($_POST['user_login']) : ''; ?>" 
                               required>
                    </div>

                    <button type="submit" class="forgot-btn">Send Reset Link</button>

                    <div class="form-footer">
                        <a href="<?php echo home_url('/sign-in/'); ?>">← Back to Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.forgot-form');
            const input = document.getElementById('user_login');
            
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });

            form.addEventListener('submit', function(e) {
                const email = document.getElementById('user_login').value;
                
                if (!email) {
                    e.preventDefault();
                    alert('Please enter your email address or username');
                    return;
                }
            });
        });
    </script>
</body>
</html> 