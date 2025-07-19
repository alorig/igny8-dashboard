<?php
/*
Template Name: Sign In
*/

// Redirect if user is already logged in
if (is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1C7ED6, #0B2E6B);
            min-height: 100vh;
            color: #222222;
        }

        .signin-container {
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .signin-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
        }

        .signin-header {
            background: linear-gradient(135deg, #1C7ED6, #0B2E6B);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .signin-logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .signin-subtitle {
            opacity: 0.9;
            font-size: 1rem;
        }

        .signin-form {
            padding: 2rem;
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
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #1C7ED6;
            box-shadow: 0 0 0 3px rgba(28, 126, 214, 0.1);
        }

        .form-input::placeholder {
            color: #6C757D;
        }

        .signin-btn {
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

        .signin-btn:hover {
            background: #0B2E6B;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(28, 126, 214, 0.3);
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

        .back-link {
            text-align: center;
            margin-top: 2rem;
        }

        .back-link a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .back-link a:hover {
            opacity: 1;
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

        @media (max-width: 480px) {
            .signin-container {
                padding: 1rem;
            }
            
            .signin-header {
                padding: 1.5rem;
            }
            
            .signin-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="signin-container">
        <div class="signin-card">
            <div class="signin-header">
                <div class="signin-logo">Igny8</div>
                <div class="signin-subtitle">Sign in to your dashboard</div>
            </div>

            <form class="signin-form" action="<?php echo wp_login_url(); ?>" method="post">
                <?php
                // Show error messages if any
                if (isset($_GET['login']) && $_GET['login'] == 'failed') {
                    echo '<div class="error-message">Invalid username or password. Please try again.</div>';
                }
                
                if (isset($_GET['loggedout']) && $_GET['loggedout'] == 'true') {
                    echo '<div class="success-message">You have been successfully logged out.</div>';
                }
                ?>

                <div class="form-group">
                    <label for="user_login" class="form-label">Email or Username</label>
                    <input type="text" id="user_login" name="log" class="form-input" placeholder="Enter your email or username" required>
                </div>

                <div class="form-group">
                    <label for="user_pass" class="form-label">Password</label>
                    <input type="password" id="user_pass" name="pwd" class="form-input" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="signin-btn">Sign In</button>

                <div class="form-footer">
                    <a href="<?php echo wp_lostpassword_url(); ?>">Forgot your password?</a>
                    <br><br>
                    <a href="<?php echo wp_registration_url(); ?>">Request access to Igny8</a>
                </div>
            </form>
        </div>
    </div>

    <div class="back-link">
        <a href="<?php echo home_url(); ?>">← Back to Igny8</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.signin-form');
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
                const email = document.getElementById('user_login').value;
                const password = document.getElementById('user_pass').value;
                
                if (!email || !password) {
                    e.preventDefault();
                    alert('Please fill in all fields');
                    return;
                }
            });
        });
    </script>
</body>
</html> 