<?php
$pageTitle = "API Access - Overview - Durrun Partner Portal";
$activePage = "api-overview";
require_once __DIR__ . '/../../includes/header.php';
?>

<div class="app-wrapper">
    <!-- Top Navigation Bar -->
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button" aria-label="Toggle navigation">
                <i class="bi bi-list fs-5"></i>
            </button>
            <a href="<?php echo $pathToRoot; ?>view/dashboard.php" class="d-flex align-items-center text-decoration-none">
                <img src="<?php echo $pathToRoot; ?>assets/img/logo_card.png" alt="Durrun Logo" class="nav-brand-logo">
            </a>
        </div>

        <div class="nav-right-actions">
            <div class="nav-search-box d-none d-md-block" style="width: 240px;">
                <input type="text" class="nav-search-input" placeholder="Search...">
                <i class="bi bi-search" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.85rem;"></i>
            </div>

            <a href="#" class="nav-action-link"><i class="bi bi-headset fs-5"></i></a>
            <a href="#" class="nav-action-link position-relative">
                <i class="bi bi-bell fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="width: 8px; height: 8px; margin-left: -5px; margin-top: 5px;"></span>
            </a>

            <div class="dropdown">
                <button class="user-dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-avatar-badge">A</div>
                    <span class="d-none d-md-inline small fw-semibold text-dark">Partner</span>
                    <i class="bi bi-chevron-down text-muted" style="font-size: 0.75rem;"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" style="border-radius: 12px; min-width: 180px;">
                    <li class="px-3 py-2 border-bottom">
                        <div class="fw-bold text-dark" style="font-size: 0.9rem;">Acme AI</div>
                        <div class="text-muted" style="font-size: 0.8rem;">partner@acme.ai</div>
                    </li>
                    <li><a class="dropdown-item py-2" href="<?php echo $pathToRoot; ?>view/provider-profile.php"><i class="bi bi-person me-2 text-muted"></i>Profile</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-gear me-2 text-muted"></i>Settings</a></li>
                    <li><hr class="dropdown-divider my-1"></li>
                    <li><a class="dropdown-item py-2 text-danger" href="<?php echo $pathToRoot; ?>view/logout.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Dashboard Layout -->
    <div class="dashboard-layout">
        <!-- Common Sidebar Component -->
        <?php require_once __DIR__ . '/../../includes/sidebar.php'; ?>

        <!-- Main Content Area (Independent Scroll) -->
        <main class="dashboard-main">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb" class="mb-2">
                <ol class="breadcrumb" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="<?php echo $pathToRoot; ?>view/dashboard.php" class="text-decoration-none" style="color: #0066ff;">Partner Portal</a></li>
                    <li class="breadcrumb-item text-muted">API Access</li>
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Overview</li>
                </ol>
            </nav>

            <!-- Page Header Greeting -->
            <div class="welcome-header align-items-center mb-4">
                <div>
                    <h1 class="welcome-title">API Access</h1>
                    <p class="welcome-subtitle">Manage your API keys, view usage, and get started with integrating your models.</p>
                </div>
            </div>

            <!-- Top 4 Metric Stat Cards -->
            <div class="row g-3 mb-4">
                <!-- Card 1: Active API Keys -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Total API.svg" alt="Active API Keys" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Active API Keys</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Total API Calls -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #dcfce7; color: #16a34a;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/API Requests.svg" alt="Total API Calls" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value">125,430</div>
                            <div class="stat-label">Total API Calls (This Month)</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Uptime -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #fef3c7; color: #d97706;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Uptime.svg" alt="Uptime" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value">99.9%</div>
                            <div class="stat-label">Uptime</div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Connected Projects -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-purple">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Conneted Projects.svg" alt="Connected Projects" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Connected Projects</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle Section: Get Started + Endpoint & Quick Links -->
            <div class="row g-4 mb-4">
                <!-- Left Column: Get Started Steps Card -->
                <div class="col-12 col-xl-6">
                    <div class="section-card h-100 d-flex flex-column justify-content-between p-4">
                        <div>
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="stat-icon-wrapper stat-icon-blue" style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px;">
                                    <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Get Started.svg" alt="Get Started" style="width: 22px; height: 22px;">
                                </div>
                                <div>
                                    <h2 class="section-title" style="font-size: 1.15rem;">Get Started</h2>
                                    <p class="text-muted small mb-0">Use the Durrun API to integrate your models into applications.</p>
                                </div>
                            </div>

                            <!-- Steps with Vertical Timeline Line -->
                            <div class="position-relative ps-2 mb-4">
                                <!-- Connecting line -->
                                <div style="position: absolute; left: 23px; top: 20px; bottom: 20px; width: 2px; background-color: #e2e8f0; z-index: 1;"></div>

                                <!-- Step 1 -->
                                <div class="d-flex align-items-start gap-3 mb-4 position-relative" style="z-index: 2;">
                                    <div class="d-flex align-items-center justify-content-center fw-bold bg-white text-primary border border-primary rounded-circle shadow-sm" style="width: 32px; height: 32px; min-width: 32px; font-size: 0.85rem;">
                                        1
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.95rem;">Create an API Key</div>
                                        <div class="text-muted small">Generate your API key to get started.</div>
                                    </div>
                                </div>

                                <!-- Step 2 -->
                                <div class="d-flex align-items-start gap-3 mb-4 position-relative" style="z-index: 2;">
                                    <div class="d-flex align-items-center justify-content-center fw-bold bg-white text-primary border border-primary rounded-circle shadow-sm" style="width: 32px; height: 32px; min-width: 32px; font-size: 0.85rem;">
                                        2
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.95rem;">Make API Requests</div>
                                        <div class="text-muted small">Use our REST API and follow the documentation.</div>
                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div class="d-flex align-items-start gap-3 position-relative" style="z-index: 2;">
                                    <div class="d-flex align-items-center justify-content-center fw-bold bg-white text-primary border border-primary rounded-circle shadow-sm" style="width: 32px; height: 32px; min-width: 32px; font-size: 0.85rem;">
                                        3
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.95rem;">Monitor Usage</div>
                                        <div class="text-muted small">Track your API calls and usage in real time.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="https://docs.durrun.com/api" target="_blank" class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.92rem;">
                                <span>View API Documentation</span>
                                <i class="bi bi-box-arrow-up-right" style="font-size: 0.8rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Endpoint Box + Quick Links -->
                <div class="col-12 col-xl-6 d-flex flex-column gap-4">
                    <!-- Your API Endpoint Card -->
                    <div class="section-card p-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="stat-icon-wrapper stat-icon-blue" style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Your API.svg" alt="Your API Endpoint" style="width: 22px; height: 22px;">
                            </div>
                            <div>
                                <h2 class="section-title" style="font-size: 1.15rem;">Your API Endpoint</h2>
                                <p class="text-muted small mb-0">Use the base URL below for all API requests.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between p-3 rounded-3" style="background-color: #f8fafc; border: 1px solid #e2e8f0;">
                            <code class="text-dark fw-semibold" id="apiEndpointText" style="font-size: 0.92rem; font-family: 'SFMono-Regular', Consolas, Menlo, monospace;">https://api.durrun.com/v1</code>
                            <button type="button" class="btn btn-sm btn-light border text-muted px-2 py-1" onclick="copyText('apiEndpointText', this)" title="Copy Endpoint">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Copy.svg" alt="Copy" style="width: 14px; height: 14px;">
                            </button>
                        </div>
                    </div>

                    <!-- Quick Links Card -->
                    <div class="section-card p-4 flex-grow-1">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="stat-icon-wrapper stat-icon-blue" style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Links.svg" alt="Quick Links" style="width: 22px; height: 22px;">
                            </div>
                            <div>
                                <h2 class="section-title" style="font-size: 1.15rem;">Quick Links</h2>
                                <p class="text-muted small mb-0">Everything you need to work with the Durrun API.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <!-- Link 1: Manage API Keys -->
                            <a href="keys.php" class="d-flex align-items-center justify-content-between p-3 rounded-3 text-decoration-none border transition-all" style="background: #ffffff; border-color: #f1f5f9 !important;" onmouseover="this.style.borderColor='#0066ff'; this.style.backgroundColor='#f8fafc';" onmouseout="this.style.borderColor='#f1f5f9'; this.style.backgroundColor='#ffffff';">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">
                                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Total API.svg" alt="" style="width: 20px; height: 20px;">
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.92rem;">Manage API Keys</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">Create, view or revoke your API keys.</div>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-muted" style="font-size: 0.85rem;"></i>
                            </a>

                            <!-- Link 2: View Usage & Analytics -->
                            <a href="usage.php" class="d-flex align-items-center justify-content-between p-3 rounded-3 text-decoration-none border transition-all" style="background: #ffffff; border-color: #f1f5f9 !important;" onmouseover="this.style.borderColor='#0066ff'; this.style.backgroundColor='#f8fafc';" onmouseout="this.style.borderColor='#f1f5f9'; this.style.backgroundColor='#ffffff';">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">
                                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/View Usage.svg" alt="" style="width: 20px; height: 20px;">
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.92rem;">View Usage & Analytics</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">Track your API usage and performance.</div>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-muted" style="font-size: 0.85rem;"></i>
                            </a>

                            <!-- Link 3: Read Documentation -->
                            <a href="https://docs.durrun.com" target="_blank" class="d-flex align-items-center justify-content-between p-3 rounded-3 text-decoration-none border transition-all" style="background: #ffffff; border-color: #f1f5f9 !important;" onmouseover="this.style.borderColor='#0066ff'; this.style.backgroundColor='#f8fafc';" onmouseout="this.style.borderColor='#f1f5f9'; this.style.backgroundColor='#ffffff';">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">
                                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Read Documentation.svg" alt="" style="width: 20px; height: 20px;">
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.92rem;">Read Documentation</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">Explore guides, code examples and more.</div>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-muted" style="font-size: 0.85rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Banner: Need Help? -->
            <div class="section-card p-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4" style="background: #ffffff;">
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px;">
                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Need  Help.svg" alt="Need Help" style="width: 36px; height: 36px;">
                    </div>
                    <div>
                        <h3 class="fw-bold text-dark mb-1" style="font-size: 1rem;">Need Help?</h3>
                        <p class="text-muted mb-0 small">If you have any questions about API access or integration, feel free to reach out to our support team.</p>
                    </div>
                </div>
                <div>
                    <a href="mailto:support@durrun.com" class="btn btn-outline-secondary px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2" style="border-radius: 8px; font-size: 0.9rem; background: #ffffff;">
                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Access/Support.svg" alt="" style="width: 16px; height: 16px;">
                        <span>Contact Support</span>
                    </a>
                </div>
            </div>

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

    // Helper to copy text to clipboard
    function copyText(elementId, btn) {
        const el = document.getElementById(elementId);
        if (el) {
            navigator.clipboard.writeText(el.innerText).then(() => {
                const orig = btn.innerHTML;
                btn.innerHTML = '<i class="bi bi-check2 text-success"></i>';
                setTimeout(() => { btn.innerHTML = orig; }, 2000);
            });
        }
    }
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
