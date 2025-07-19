<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
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

        .hero-features {
            text-align: left;
            margin-top: 2rem;
        }

        .hero-feature {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .hero-feature::before {
            content: "✓";
            color: #4DABF7;
            font-weight: bold;
            margin-right: 0.75rem;
            font-size: 1.2rem;
        }

        /* Right Side - Login Form */
        .login-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: white;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-title {
            font-size: 2rem;
            font-weight: 700;
            color: #222222;
            margin-bottom: 0.5rem;
        }

        .login-subtitle {
            color: #6C757D;
            font-size: 1rem;
        }

        .login-form {
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

        .login-btn {
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

        .login-btn:hover {
            background: #0B2E6B;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(28, 126, 214, 0.3);
        }

        .login-btn:active {
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

        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: #6C757D;
            font-size: 0.9rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #E1E4E8;
        }

        .divider span {
            padding: 0 1rem;
        }

        .social-login {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border: 2px solid #E1E4E8;
            border-radius: 8px;
            background: white;
            color: #222222;
            text-decoration: none;
            text-align: center;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .social-btn:hover {
            border-color: #1C7ED6;
            background: #F7F9FB;
            transform: translateY(-1px);
        }

        .beta-badge {
            display: inline-block;
            background: linear-gradient(45deg, #4DABF7, #1C7ED6);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .disclaimer {
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 8px;
            margin-top: 2rem;
            font-size: 0.9rem;
            opacity: 0.8;
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
            
            .login-side {
                padding: 2rem 1rem;
                min-height: 50vh;
            }
            
            .hero-logo {
                font-size: 2.5rem;
            }
            
            .login-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .hero-side {
                padding: 2rem 1rem;
            }
            
            .login-side {
                padding: 1.5rem 1rem;
            }
            
            .login-form {
                padding: 1.5rem;
            }
            
            .social-login {
                flex-direction: column;
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
        .login-container {
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-feature {
            animation: fadeInUp 0.8s ease-out;
            animation-delay: calc(var(--i) * 0.1s);
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <!-- Left Side - Hero Content -->
        <div class="hero-side">
            <div class="hero-content">
                <div class="beta-badge">BETA LAUNCH - AUGUST 2025</div>
                <h1 class="hero-logo">Igny8</h1>
                <p class="hero-tagline">Infinite, Writing, Refreshing, Ranking</p>
                <p class="hero-description">
                    Write, refresh, and rank for organic growth. Igny8 creates keyword-aligned content and keeps it fresh on schedule, building authority and improving rankings through intelligent automation.
                </p>
                
                <div class="hero-features">
                    <div class="hero-feature" style="--i: 1">AI-powered content generation</div>
                    <div class="hero-feature" style="--i: 2">Automatic content refresh</div>
                    <div class="hero-feature" style="--i: 3">Smart interlinking system</div>
                    <div class="hero-feature" style="--i: 4">Structured SEO campaigns</div>
                    <div class="hero-feature" style="--i: 5">Authority building backlinks</div>
                </div>
                
                <div class="disclaimer">
                    Under Development: Igny8 is currently in final build stages. Expected Beta Launch: August 2025
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="login-side">
            <div class="login-container">
                <div class="login-header">
                    <h2 class="login-title">Welcome Back</h2>
                    <p class="login-subtitle">Sign in to your Igny8 dashboard</p>
                </div>

                <form class="login-form" action="<?php echo wp_login_url(); ?>" method="post">
                    <div class="form-group">
                        <label for="user_login" class="form-label">Email or Username</label>
                        <input type="text" id="user_login" name="log" class="form-input" placeholder="Enter your email or username" required>
                    </div>

                    <div class="form-group">
                        <label for="user_pass" class="form-label">Password</label>
                        <input type="password" id="user_pass" name="pwd" class="form-input" placeholder="Enter your password" required>
                    </div>

                    <button type="submit" class="login-btn">Sign In</button>

                    <div class="form-footer">
                        <a href="<?php echo wp_lostpassword_url(); ?>">Forgot your password?</a>
                    </div>
                </form>

                <div class="divider">
                    <span>or continue with</span>
                </div>

                <div class="social-login">
                    <a href="#" class="social-btn">Google</a>
                    <a href="#" class="social-btn">Microsoft</a>
                </div>

                <div class="form-footer">
                    <p style="margin: 0; color: #6C757D; font-size: 0.9rem;">
                        Don't have an account? <a href="<?php echo wp_registration_url(); ?>">Request access</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add loading animation
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const form = document.querySelector('.login-form');
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

            // Form submission
            form.addEventListener('submit', function(e) {
                const email = document.getElementById('user_login').value;
                const password = document.getElementById('user_pass').value;
                
                if (!email || !password) {
                    e.preventDefault();
                    alert('Please fill in all fields');
                    return;
                }
            });

            // Social login buttons (placeholder)
            document.querySelectorAll('.social-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Social login coming soon!');
                });
            });
        });
    </script>
</body>
</html> 