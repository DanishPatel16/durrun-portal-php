<?php
$pageTitle = "Provider Profile - Durrun Partner Portal";
require_once __DIR__ . '/includes/header.php';
?>

<div class="app-wrapper">
    <!-- Top Navigation Bar (with Global Platform Links as shown in Design) -->
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button" aria-label="Toggle navigation">
                <i class="bi bi-list fs-5"></i>
            </button>
            <a href="dashboard.php" class="d-flex align-items-center text-decoration-none">
                <img src="assets/img/logo_card.png" alt="Durrun Logo" class="nav-brand-logo">
            </a>
        </div>

        <div class="nav-right-actions">
            <!-- Search Bar -->
            <div class="nav-search-box d-none d-md-block" style="width: 240px;">
                <input type="text" class="nav-search-input" placeholder="Search..." style="padding-left: 1rem; padding-right: 2.2rem;">
                <i class="bi bi-search" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.85rem;"></i>
            </div>

            <!-- Help -->
            <a href="#" class="nav-action-link">
                <i class="bi bi-headset fs-5"></i>
            </a>

            <!-- Notification Bell with Dot -->
            <a href="#" class="nav-action-link position-relative">
                <i class="bi bi-bell fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="width: 8px; height: 8px; margin-left: -5px; margin-top: 5px;"></span>
            </a>

            <!-- User Avatar & Dropdown -->
            <div class="dropdown">
                <button class="user-dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-avatar-badge">A</div>
                    <i class="bi bi-chevron-down text-muted" style="font-size: 0.75rem;"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" style="border-radius: 12px; min-width: 180px;">
                    <li class="px-3 py-2 border-bottom">
                        <div class="fw-bold text-dark" style="font-size: 0.9rem;">Acme AI</div>
                        <div class="text-muted" style="font-size: 0.8rem;">partner@acme.ai</div>
                    </li>
                    <li><a class="dropdown-item py-2" href="provider-profile.php"><i class="bi bi-person me-2 text-muted"></i>Profile</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-gear me-2 text-muted"></i>Settings</a></li>
                    <li><hr class="dropdown-divider my-1"></li>
                    <li><a class="dropdown-item py-2 text-danger" href="login.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Dashboard Layout -->
    <div class="dashboard-layout">
        <!-- Common Sidebar Component -->
        <?php require_once __DIR__ . '/includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Header Greeting & Save Changes Button -->
            <div class="welcome-header align-items-center">
                <div>
                    <h1 class="welcome-title">Provider Profile</h1>
                    <p class="welcome-subtitle">Manage your company information as it appears on Durrun.</p>
                </div>
                <div>
                    <button type="submit" form="profileForm" class="btn btn-primary px-4 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.95rem;">
                        Save Changes
                    </button>
                </div>
            </div>

            <!-- Profile Form -->
            <form id="profileForm" action="" method="POST">
                <div class="row g-4">
                    <!-- Left Column (Basic, Contact, Location, Social, Tags) -->
                    <div class="col-12 col-xl-7">
                        <!-- Card 1: Basic Information -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Basic Information</h2>
                            <div class="row g-4">
                                <!-- Logo Box & Upload -->
                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <div class="profile-avatar-box position-relative">
                                        <div class="avatar-text">ACME</div>
                                        <button type="button" class="btn btn-light position-absolute bottom-0 end-0 rounded-circle shadow-sm border p-0 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; margin-bottom: -5px; margin-right: -5px;" title="Change logo">
                                            <i class="bi bi-pencil-fill" style="font-size: 0.75rem; color: #0066ff;"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm mt-3 w-100 fw-semibold" style="border-radius: 8px; border-color: #dbeafe; background: #eff6ff; color: #0066ff;">
                                        Change Logo
                                    </button>
                                    <span class="text-muted mt-1" style="font-size: 0.75rem;">PNG, JPG or SVG (Max 2MB)</span>
                                </div>

                                <!-- Fields -->
                                <div class="col-12 col-sm-8">
                                    <div class="mb-3">
                                        <label class="form-label-custom">Company Name <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control profile-input" name="company_name" value="Acme AI" required>
                                    </div>

                                    <div class="row g-2 mb-3">
                                        <div class="col-7">
                                            <label class="form-label-custom">Website <span class="text-primary">*</span></label>
                                            <input type="url" class="form-control profile-input" name="website" value="https://acmeai.com" required>
                                        </div>
                                        <div class="col-5">
                                            <label class="form-label-custom">Founded</label>
                                            <input type="text" class="form-control profile-input" name="founded" value="2023">
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <label class="form-label-custom">Short Description <span class="text-primary">*</span></label>
                                        <textarea class="form-control profile-input" name="short_description" rows="3" required>Acme AI builds advanced and safe AI models for developers and businesses. Our mission is to make AI more accessible, reliable and beneficial for everyone.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Contact Information -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Contact Information</h2>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Contact Email <span class="text-primary">*</span></label>
                                    <input type="email" class="form-control profile-input" name="contact_email" value="partnerships@acmeai.com" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Support Email</label>
                                    <input type="email" class="form-control profile-input" name="support_email" value="support@acmeai.com">
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: Location -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Location</h2>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Headquarters</label>
                                    <input type="text" class="form-control profile-input" name="headquarters" value="San Francisco, CA">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Country</label>
                                    <select class="form-select profile-input" name="country">
                                        <option value="United States" selected>United States</option>
                                        <option value="Canada">Canada</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: Social Links -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Social Links</h2>
                            <div class="row g-3">
                                <!-- Twitter -->
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-twitter-x"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="twitter" value="https://twitter.com/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <!-- YouTube -->
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-youtube"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="youtube" value="https://youtube.com/@acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <!-- GitHub -->
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-github"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="github" value="https://github.com/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <!-- Discord -->
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-discord"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="discord" value="https://discord.gg/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <!-- LinkedIn -->
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-linkedin"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="linkedin" value="https://linkedin.com/company/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <!-- Blog / Website -->
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-globe"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="blog" value="https://acmeai.com/blog" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5: Category Tags -->
                        <div class="section-card">
                            <h2 class="section-title mb-1">Category Tags</h2>
                            <p class="text-muted small mb-3">Select categories that best describe your company.</p>
                            
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <div style="flex: 1; min-width: 180px;">
                                    <input type="text" class="form-control profile-input" placeholder="Select categories...">
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="category-tag-pill">Text Generation <i class="bi bi-x ms-1"></i></span>
                                    <span class="category-tag-pill">Image Generation <i class="bi bi-x ms-1"></i></span>
                                    <span class="category-tag-pill">Multimodal <i class="bi bi-x ms-1"></i></span>
                                    <span class="category-tag-pill">Developer Tools <i class="bi bi-x ms-1"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Preview, Additional Info, Status) -->
                    <div class="col-12 col-xl-5">
                        <!-- Card 1: Public Profile Preview -->
                        <div class="section-card">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h2 class="section-title">Public Profile Preview</h2>
                                <a href="#" class="text-primary text-decoration-none fw-semibold small d-flex align-items-center gap-1" style="color: #0066ff !important;">
                                    View on Durrun <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <p class="text-muted small mb-3">This is how your provider profile will appear on Durrun.</p>

                            <!-- Inner Preview Box -->
                            <div class="preview-box p-3 border rounded-3 bg-white">
                                <div class="d-flex gap-3 align-items-start mb-3">
                                    <div class="preview-avatar-box">
                                        ACME
                                    </div>
                                    <div>
                                        <div class="preview-title">Acme AI</div>
                                        <div class="text-muted small mb-2">Building safe and powerful AI for everyone.</div>
                                        <div class="d-flex flex-wrap gap-3 text-muted" style="font-size: 0.8rem;">
                                            <span class="d-flex align-items-center gap-1"><i class="bi bi-link-45deg"></i> acmeai.com</span>
                                            <span class="d-flex align-items-center gap-1"><i class="bi bi-geo-alt"></i> San Francisco, CA</span>
                                            <span class="d-flex align-items-center gap-1"><i class="bi bi-calendar-event"></i> Founded 2023</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-secondary small mb-3" style="line-height: 1.5; font-size: 0.88rem;">
                                    Acme AI builds advanced and safe AI models for developers and businesses. Our mission is to make AI more accessible, reliable and beneficial for everyone.
                                </p>

                                <div class="d-flex flex-wrap gap-2">
                                    <span class="preview-tag-pill">Text Generation</span>
                                    <span class="preview-tag-pill">Image Generation</span>
                                    <span class="preview-tag-pill">Multimodal</span>
                                    <span class="preview-tag-pill">Developer Tools</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Additional Information -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Additional Information</h2>
                            <div class="mb-3">
                                <label class="form-label-custom">API Documentation URL</label>
                                <input type="url" class="form-control profile-input" name="api_doc_url" value="https://docs.acmeai.com">
                                <span class="text-muted" style="font-size: 0.78rem;">Link to your official API documentation (optional).</span>
                            </div>

                            <div class="mb-2">
                                <label class="form-label-custom">Company Overview (Optional)</label>
                                <textarea class="form-control profile-input" name="company_overview" rows="4">Acme AI is a research-driven company focused on building state-of-the-art language models, multimodal AI, and developer tools. We work with organizations worldwide to bring safe and helpful AI to real-world applications.</textarea>
                            </div>
                        </div>

                        <!-- Card 3: Status -->
                        <div class="section-card">
                            <div class="d-flex align-items-center gap-1 mb-3">
                                <h2 class="section-title">Status</h2>
                                <i class="bi bi-info-circle text-primary" style="font-size: 0.9rem; cursor: pointer;" title="Profile publication status"></i>
                            </div>

                            <div class="mb-2">
                                <span class="badge-status-active">
                                    <span class="status-dot"></span> Active
                                </span>
                            </div>
                            <div class="text-muted" style="font-size: 0.85rem;">
                                Your provider profile is live on Durrun.
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Page Bottom Footer -->
            <footer class="dashboard-footer">
                <div>&copy; 2025 Durrun. All rights reserved.</div>
                <div>Build. Share. Power the AI Future.</div>
            </footer>
        </main>
    </div>
</div>

<script>
    // Responsive sidebar toggle for mobile
    const toggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.getElementById('dashboardSidebar');
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            sidebar.style.display = (sidebar.style.display === 'block') ? 'none' : 'block';
        });
    }
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
