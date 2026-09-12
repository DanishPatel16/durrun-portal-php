<?php
/**
 * Durrun Partner Portal - Login Page (Standalone Version)
 * All CSS, HTML, and scripts are self-contained in this single file.
 * Only external dependencies are CDN links (Bootstrap 5, Icons, Google Fonts) and local logo images.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Durrun Partner Portal</title>
    
    <!-- 1. Google Font: Source Sans Pro / Source Sans 3 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- 2. Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- 3. Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --primary-color: #0066ff;
            --primary-hover: #0052cc;
            --text-dark: #0f172a;
            --text-body: #334155;
            --text-muted: #64748b;
            --font-family-base: 'Source Sans 3', 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            font-family: var(--font-family-base);
            color: var(--text-body);
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        .login-left {
            flex: 1.05;
            background: linear-gradient(160deg, #f9fbff 0%, #f0f6ff 50%, #e8f2fe 100%);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 3.5rem 4.5rem;
            overflow: hidden;
        }

        .login-left-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .login-left-content {
            position: relative;
            z-index: 2;
        }

        .portal-title {
            font-size: 2.75rem;
            font-weight: 800;
            color: #0c152e;
            letter-spacing: -0.5px;
            margin-top: 3.5rem;
            margin-bottom: 0.85rem;
        }

        .portal-desc {
            font-size: 1.05rem;
            color: var(--text-muted);
            line-height: 1.6;
            max-width: 480px;
            margin-bottom: 3.5rem;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            max-width: 500px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1.25rem;
        }

        .feature-icon-box {
            width: 48px;
            height: 48px;
            min-width: 48px;
            background-color: #e3efff;
            color: var(--primary-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            box-shadow: 0 2px 6px rgba(0, 102, 255, 0.06);
        }

        .feature-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.15rem;
        }

        .feature-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            margin: 0;
            line-height: 1.45;
        }

        .partner-tagline {
            font-size: 0.88rem;
            color: #5a739b;
            letter-spacing: 0.08em;
            font-weight: 500;
            position: relative;
            z-index: 2;
            margin-top: 2rem;
        }

        .login-right {
            flex: 1.15;
            background-color: #f7f9fb;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 3rem 2rem 2rem;
        }

        .login-card-wrapper {
            width: 100%;
            max-width: 470px;
            margin: auto 0;
        }

        .login-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #edf2f7;
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.05), 0 2px 8px rgba(0, 0, 0, 0.02);
            padding: 3rem 2.75rem;
            text-align: center;
        }

        .card-logo {
            height: 38px;
            margin-bottom: 1.25rem;
        }

        .login-card-title {
            font-size: 1.85rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 0.35rem;
        }

        .login-card-subtitle {
            font-size: 0.95rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
        }

        .form-group-custom {
            text-align: left;
            margin-bottom: 1.35rem;
        }

        .form-label-custom {
            font-size: 0.88rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.5rem;
            display: block;
        }

        .input-icon-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon-group .input-icon-left {
            position: absolute;
            left: 14px;
            color: #94a3b8;
            font-size: 1.05rem;
            pointer-events: none;
        }

        .input-icon-group .form-control {
            padding-left: 2.75rem;
            padding-right: 2.75rem;
            height: 48px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.95rem;
            font-family: var(--font-family-base);
            color: #1e293b;
        }

        .input-icon-group .form-control:focus {
            border-color: #0066ff;
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.12);
            outline: none;
        }

        .input-icon-group .input-toggle-password {
            position: absolute;
            right: 14px;
            color: #64748b;
            cursor: pointer;
            font-size: 1.1rem;
            padding: 4px;
        }

        .forgot-password-link {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-color);
            text-decoration: none;
        }

        .forgot-password-link:hover {
            text-decoration: underline;
            color: var(--primary-hover);
        }

        .btn-sign-in {
            background-color: var(--primary-color);
            border: none;
            color: #ffffff;
            font-weight: 600;
            font-size: 1rem;
            height: 48px;
            border-radius: 10px;
            width: 100%;
            margin-top: 1.25rem;
            transition: background-color 0.2s ease;
        }

        .btn-sign-in:hover {
            background-color: var(--primary-hover);
            color: #ffffff;
        }

        .divider-or {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0;
        }

        .divider-or::before,
        .divider-or::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }

        .divider-or span {
            padding: 0 1rem;
            font-size: 0.8rem;
            color: #94a3b8;
            font-weight: 600;
        }

        .btn-google {
            height: 48px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background-color: #ffffff;
            color: #1e293b;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            width: 100%;
            transition: background-color 0.2s, border-color 0.2s;
        }

        .btn-google:hover {
            background-color: #f8fafc;
            border-color: #cbd5e1;
        }

        .card-bottom-link {
            font-size: 0.88rem;
            color: var(--text-muted);
            margin-top: 1.75rem;
        }

        .card-bottom-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }

        .card-bottom-link a:hover {
            text-decoration: underline;
        }

        .login-footer-row {
            width: 100%;
            max-width: 470px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.82rem;
            color: #64748b;
            padding-top: 1rem;
        }

        @media (max-width: 991px) {
            .login-container { flex-direction: column; }
            .login-left, .login-right { padding: 2.5rem 1.5rem; }
        }
    </style>
</head>
<body>

<div class="login-container">
    <!-- Left Hero Section -->
    <div class="login-left">
        <!-- Decorative SVG Wave -->
        <svg class="login-left-wave" viewBox="0 0 700 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 130C150 180 320 250 500 170C590 130 650 140 700 160V240H0V130Z" fill="#ddecff" fill-opacity="0.45"/>
            <path d="M0 170C120 130 280 230 460 200C580 180 660 210 700 220V240H0V170Z" fill="#cfe3ff" fill-opacity="0.35"/>
        </svg>

        <div class="login-left-content">
            <!-- Brand Logo -->
            <div>
                <img src="assets/img/logo_card.png" alt="Durrun Logo" height="38">
            </div>

            <!-- Title & Subtitle -->
            <h1 class="portal-title">Partner Portal</h1>
            <p class="portal-desc">
                Manage your account, access ads, API, and partner resources — all in one place.
            </p>

            <!-- 4 Features -->
            <div class="feature-list">
                <div class="feature-item">
                    <div class="feature-icon-box"><i class="bi bi-people"></i></div>
                    <div>
                        <div class="feature-title">For Partners</div>
                        <p class="feature-desc">Manage your profile, projects and integrations.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon-box"><i class="bi bi-megaphone"></i></div>
                    <div>
                        <div class="feature-title">Access Ads</div>
                        <p class="feature-desc">Get ad creatives, tracking links and performance data.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon-box"><i class="bi bi-code-slash"></i></div>
                    <div>
                        <div class="feature-title">API Access</div>
                        <p class="feature-desc">Generate API keys and monitor your usage.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon-box"><i class="bi bi-grid"></i></div>
                    <div>
                        <div class="feature-title">All in One Portal</div>
                        <p class="feature-desc">Everything you need to grow together.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="partner-tagline">
            Our Partners. A Stronger Tomorrow.
        </div>
    </div>

    <!-- Right Sign In Section -->
    <div class="login-right">
        <div class="login-card-wrapper">
            <div class="login-card">
                <img src="assets/img/logo_card.png" alt="Durrun Logo" class="card-logo">

                <h2 class="login-card-title">Sign In</h2>
                <p class="login-card-subtitle">Access your partner portal</p>

                <!-- Form -->
                <form action="dashboard.php" method="GET">
                    <div class="form-group-custom">
                        <label for="emailInput" class="form-label-custom">Email Address</label>
                        <div class="input-icon-group">
                            <i class="bi bi-envelope input-icon-left"></i>
                            <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter your email" required value="partner@acme.ai">
                        </div>
                    </div>

                    <div class="form-group-custom">
                        <label for="passwordInput" class="form-label-custom">Password</label>
                        <div class="input-icon-group">
                            <i class="bi bi-lock input-icon-left"></i>
                            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter your password" required value="••••••••••••">
                            <i class="bi bi-eye-slash input-toggle-password" id="togglePasswordBtn" title="Toggle password visibility"></i>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <a href="#" class="forgot-password-link">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-sign-in">
                        Sign In
                    </button>

                    <div class="divider-or">
                        <span>OR</span>
                    </div>

                    <!-- Google SSO -->
                    <a href="dashboard.php" class="btn btn-google text-decoration-none">
                        <svg width="18" height="18" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                            <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                            <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                            <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
                        </svg>
                        <span>Continue with Google</span>
                    </a>

                    <div class="card-bottom-link">
                        Don't have an account? <a href="#">Contact Us</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="login-footer-row">
            <span>&copy; 2025 Durrun. All rights reserved.</span>
            <span>Build. Share. Grow Together.</span>
        </div>
    </div>
</div>

<!-- Password Visibility Script -->
<script>
    const toggleBtn = document.getElementById('togglePasswordBtn');
    const passwordInput = document.getElementById('passwordInput');

    if (toggleBtn && passwordInput) {
        toggleBtn.addEventListener('click', function() {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    }
</script>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
