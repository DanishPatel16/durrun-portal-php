<?php
$pageTitle = "Sign In - Durrun Partner Portal";

// Simple handler: if form is submitted via POST, redirect to dashboard.php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: dashboard.php');
    exit;
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="login-container">
    <!-- Left Section -->
    <div class="login-left">
        <!-- Background Organic Wave SVG -->
        <svg class="login-left-wave" viewBox="0 0 700 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 130C150 180 320 250 500 170C590 130 650 140 700 160V240H0V130Z" fill="#ddecff" fill-opacity="0.45"/>
            <path d="M0 170C120 130 280 230 460 200C580 180 660 210 700 220V240H0V170Z" fill="#cfe3ff" fill-opacity="0.35"/>
        </svg>

        <div class="login-left-content">
            <!-- Brand Logo -->
            <div class="brand-logo-wrapper">
                <img src="assets/img/logo.svg" alt="Durrun Logo" height="38">
            </div>

            <!-- Main Heading -->
            <h1 class="portal-title">Partner Portal</h1>
            <p class="portal-desc">
                Manage your account, access ads, API, and partner resources — all in one place.
            </p>

            <!-- Feature Highlight List -->
            <div class="feature-list">
                <!-- Item 1 -->
                <div class="feature-item">
                    <div class="feature-icon-box">
                        <img src="assets/icons/Login/For Partners.svg" alt="For Partners" style="width: 24px; height: 24px;">
                    </div>
                    <div>
                        <div class="feature-title">For Partners</div>
                        <p class="feature-desc">Manage your profile, projects and integrations.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="feature-item">
                    <div class="feature-icon-box">
                        <img src="assets/icons/Login/Access Ads.svg" alt="Access Ads" style="width: 24px; height: 24px;">
                    </div>
                    <div>
                        <div class="feature-title">Access Ads</div>
                        <p class="feature-desc">Get ad creatives, tracking links and performance data.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="feature-item">
                    <div class="feature-icon-box">
                        <img src="assets/icons/Login/API.svg" alt="API Access" style="width: 24px; height: 24px;">
                    </div>
                    <div>
                        <div class="feature-title">API Access</div>
                        <p class="feature-desc">Generate API keys and monitor your usage.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="feature-item">
                    <div class="feature-icon-box">
                        <img src="assets/icons/Login/All in one portal.svg" alt="All in One Portal" style="width: 24px; height: 24px;">
                    </div>
                    <div>
                        <div class="feature-title">All in One Portal</div>
                        <p class="feature-desc">Everything you need to grow together.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left Footer Tagline -->
        <div class="partner-tagline">
            Our Partners. A Stronger Tomorrow.
        </div>
    </div>

    <!-- Right Section -->
    <div class="login-right">
        <div class="login-card-wrapper">
            <div class="login-card">
                <!-- Center Logo -->
                <img src="assets/img/logo.svg" alt="Durrun Logo" class="card-logo">

                <h2 class="login-card-title">Sign In</h2>
                <p class="login-card-subtitle">Access your partner portal</p>

                <!-- Login Form -->
                <form action="dashboard.php" method="GET">
                    <!-- Email Address -->
                    <div class="form-group-custom">
                        <label for="emailInput" class="form-label-custom">Email Address</label>
                        <div class="input-icon-group">
                            <i class="bi bi-envelope input-icon-left"></i>
                            <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter your email" required value="partner@acme.ai">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group-custom">
                        <label for="passwordInput" class="form-label-custom">Password</label>
                        <div class="input-icon-group">
                            <i class="bi bi-lock input-icon-left"></i>
                            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter your password" required value="••••••••••••">
                            <i class="bi bi-eye-slash input-toggle-password" id="togglePasswordBtn" title="Toggle password visibility"></i>
                        </div>
                    </div>

                    <!-- Forgot Password -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="#" class="forgot-password-link">Forgot password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-sign-in">
                        Sign In
                    </button>

                    <!-- OR Divider -->
                    <div class="divider-or">
                        <span>OR</span>
                    </div>

                    <!-- Google Sign In Button -->
                    <a href="dashboard.php" class="btn btn-google text-decoration-none d-flex align-items-center justify-content-center gap-2">
                        <img src="assets/icons/Login/Google.svg" alt="Google" style="width: 18px; height: 18px;">
                        <span>Continue with Google</span>
                    </a>

                    <!-- Bottom Signup Link -->
                    <div class="card-bottom-link">
                        Don't have an account? <a href="#">Contact Us</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Bottom Footer Links -->
        <div class="login-footer-row">
            <span>&copy; 2025 Durrun. All rights reserved.</span>
            <span>Build. Share. Grow Together.</span>
        </div>
    </div>
</div>

<script>
    // Password visibility toggle
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

<?php require_once __DIR__ . '/includes/footer.php'; ?>
