<?php
$pageTitle = "Dashboard - Durrun Partner Portal";
$activePage = "dashboard";
require_once __DIR__ . '/../includes/header.php';
?>

<div class="app-wrapper">
    <!-- Top Navigation Bar -->
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <!-- Mobile Menu Toggle Button -->
            <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button" aria-label="Toggle navigation">
                <i class="bi bi-list fs-5"></i>
            </button>
            <a href="<?php echo $pathToRoot; ?>view/dashboard.php" class="d-flex align-items-center text-decoration-none">
                <img src="<?php echo $pathToRoot; ?>assets/img/logo_card.png" alt="Durrun Logo" class="nav-brand-logo">
            </a>
        </div>

        <div class="nav-right-actions">
            <!-- Search Bar -->
            <div class="nav-search-box d-none d-md-block">
                <i class="bi bi-search nav-search-icon"></i>
                <input type="text" class="nav-search-input" placeholder="Search...">
            </div>

            <!-- Help -->
            <a href="#" class="nav-action-link">
                <i class="bi bi-headset fs-5"></i>
                <span class="d-none d-sm-inline">Help</span>
            </a>

            <!-- Notification Bell -->
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
                    <li><a class="dropdown-item py-2" href="<?php echo $pathToRoot; ?>view/provider-profile.php"><i class="bi bi-person me-2 text-muted"></i>Profile</a></li>
                    <li><a class="dropdown-item py-2" href="#"><i class="bi bi-gear me-2 text-muted"></i>Settings</a></li>
                    <li><hr class="dropdown-divider my-1"></li>
                    <li><a class="dropdown-item py-2 text-danger" href="<?php echo $pathToRoot; ?>view/logout.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Dashboard Main Layout -->
    <div class="dashboard-layout">
        <!-- Common Sidebar Component -->
        <?php require_once __DIR__ . '/../includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Header Greeting -->
            <div class="welcome-header">
                <div>
                    <h1 class="welcome-title">Welcome back, Acme AI!</h1>
                    <p class="welcome-subtitle">Manage your provider, models, templates and API access.</p>
                </div>
                <div>
                    <div class="header-meta-date">Tue, Aug 26, 2025</div>
                    <div class="header-meta-tagline">Build. Share. Power the AI Future.</div>
                </div>
            </div>

            <!-- Top 4 Stat Cards Row -->
            <div class="row g-3 mb-4">
                <!-- Stat Card 1: Models -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Models.svg" alt="Models" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-label">Models</div>
                            <div class="stat-value-row">
                                <span class="stat-value">5</span>
                                <span class="stat-badge-pill">
                                    <i class="bi bi-arrow-up-short"></i> +25%
                                </span>
                            </div>
                            <div class="stat-subtext">3 Live &bull; 1 Under Review</div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 2: Templates -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-purple">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Templates.svg" alt="Templates" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-label">Templates</div>
                            <div class="stat-value-row">
                                <span class="stat-value">12</span>
                                <span class="stat-badge-pill">
                                    <i class="bi bi-arrow-up-short"></i> 12%
                                </span>
                            </div>
                            <div class="stat-subtext">8 Live &bull; 3 Under Review</div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 3: Pending Submissions -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-amber">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Pending Submissions.svg" alt="Pending Submissions" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-label">Pending Submissions</div>
                            <div class="stat-value-row">
                                <span class="stat-value">4</span>
                            </div>
                            <div class="stat-subtext">2 Models &bull; 2 Templates</div>
                        </div>
                    </div>
                </div>

                <!-- Stat Card 4: API Requests -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-green">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/API Requests.svg" alt="API Requests" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-label">API Requests</div>
                            <div class="stat-value-row">
                                <span class="stat-value">125,430</span>
                                <span class="stat-badge-pill">
                                    <i class="bi bi-arrow-up-short"></i> 18%
                                </span>
                            </div>
                            <div class="stat-subtext">This month</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- API Requests Line Chart Section -->
            <div class="section-card">
                <div class="section-card-header">
                    <div class="section-header-left">
                        <div class="section-header-icon" style="background-color: #e0edff; color: #0066ff;">
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>
                        <div>
                            <h2 class="section-title">API Requests</h2>
                            <p class="section-subtitle">Total API requests in the last 30 days</p>
                        </div>
                    </div>
                    <div>
                        <div class="dropdown">
                            <button class="filter-select-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Last 30 Days
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 10px;">
                                <li><a class="dropdown-item py-2 small active" href="#">Last 30 Days</a></li>
                                <li><a class="dropdown-item py-2 small" href="#">Last 14 Days</a></li>
                                <li><a class="dropdown-item py-2 small" href="#">Last 7 Days</a></li>
                                <li><a class="dropdown-item py-2 small" href="#">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Chart Canvas Container -->
                <div style="position: relative; height: 260px; width: 100%;">
                    <canvas id="apiRequestsChart"></canvas>
                </div>
            </div>

            <!-- Recent Submissions Table Section -->
            <div class="section-card">
                <div class="section-card-header">
                    <div class="section-header-left">
                        <div class="section-header-icon" style="background-color: #e0edff; color: #0066ff;">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h2 class="section-title">Recent Submissions</h2>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo $pathToRoot; ?>view/models/modelslisting.php" class="view-all-link">
                            <span>View All</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Submitted On</th>
                                <th>Status</th>
                                <th style="text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td><span class="item-name">Blog Post Generator</span></td>
                                <td>Template</td>
                                <td>Aug 25, 2025</td>
                                <td><span class="badge-status badge-under-review">Under Review</span></td>
                                <td style="text-align: right;">
                                    <div class="dropdown">
                                        <button class="btn-actions-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem; min-width: 140px;">
                                            <li><a class="dropdown-item py-1.5" href="<?php echo $pathToRoot; ?>view/models/modelslisting.php"><i class="bi bi-eye me-2 text-primary"></i>View</a></li>
                                            <li><hr class="dropdown-divider my-1"></li>
                                            <li><a class="dropdown-item py-1.5 text-danger" href="javascript:void(0)" onclick="handleDeleteSubmission('Blog Post Generator', this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td><a href="<?php echo $pathToRoot; ?>view/models/addmodels.php" class="item-link">Acme Vision 1.0</a></td>
                                <td>Model</td>
                                <td>Aug 22, 2025</td>
                                <td><span class="badge-status badge-approved">Approved</span></td>
                                <td style="text-align: right;">
                                    <div class="dropdown">
                                        <button class="btn-actions-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem; min-width: 140px;">
                                            <li><a class="dropdown-item py-1.5" href="<?php echo $pathToRoot; ?>view/models/modelslisting.php"><i class="bi bi-eye me-2 text-primary"></i>View</a></li>
                                            <li><hr class="dropdown-divider my-1"></li>
                                            <li><a class="dropdown-item py-1.5 text-danger" href="javascript:void(0)" onclick="handleDeleteSubmission('Acme Vision 1.0', this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td><a href="#" class="item-link">Email Assistant</a></td>
                                <td>Template</td>
                                <td>Aug 20, 2025</td>
                                <td><span class="badge-status badge-changes-requested">Changes Requested</span></td>
                                <td style="text-align: right;">
                                    <div class="dropdown">
                                        <button class="btn-actions-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem; min-width: 140px;">
                                            <li><a class="dropdown-item py-1.5" href="<?php echo $pathToRoot; ?>view/models/modelslisting.php"><i class="bi bi-eye me-2 text-primary"></i>View</a></li>
                                            <li><hr class="dropdown-divider my-1"></li>
                                            <li><a class="dropdown-item py-1.5 text-danger" href="javascript:void(0)" onclick="handleDeleteSubmission('Email Assistant', this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td><a href="#" class="item-link">Acme LLM 1.2</a></td>
                                <td>Model</td>
                                <td>Aug 18, 2025</td>
                                <td><span class="badge-status badge-live">Live</span></td>
                                <td style="text-align: right;">
                                    <div class="dropdown">
                                        <button class="btn-actions-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem; min-width: 140px;">
                                            <li><a class="dropdown-item py-1.5" href="<?php echo $pathToRoot; ?>view/models/modelslisting.php"><i class="bi bi-eye me-2 text-primary"></i>View</a></li>
                                            <li><hr class="dropdown-divider my-1"></li>
                                            <li><a class="dropdown-item py-1.5 text-danger" href="javascript:void(0)" onclick="handleDeleteSubmission('Acme LLM 1.2', this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <td><a href="#" class="item-link">Code Explainer</a></td>
                                <td>Template</td>
                                <td>Aug 15, 2025</td>
                                <td><span class="badge-status badge-draft">Draft</span></td>
                                <td style="text-align: right;">
                                    <div class="dropdown">
                                        <button class="btn-actions-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem; min-width: 140px;">
                                            <li><a class="dropdown-item py-1.5" href="<?php echo $pathToRoot; ?>view/models/modelslisting.php"><i class="bi bi-eye me-2 text-primary"></i>View</a></li>
                                            <li><hr class="dropdown-divider my-1"></li>
                                            <li><a class="dropdown-item py-1.5 text-danger" href="javascript:void(0)" onclick="handleDeleteSubmission('Code Explainer', this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

    // Chart.js initialization for API Requests curve
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('apiRequestsChart').getContext('2d');
        
        const gradient = ctx.createLinearGradient(0, 0, 0, 240);
        gradient.addColorStop(0, 'rgba(0, 102, 255, 0.16)');
        gradient.addColorStop(1, 'rgba(0, 102, 255, 0.0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jul 27', 'Jul 30', 'Aug 2', 'Aug 5', 'Aug 8', 'Aug 11', 'Aug 14', 'Aug 17', 'Aug 20', 'Aug 23', 'Aug 26'],
                datasets: [{
                    label: 'API Requests',
                    data: [2500, 5800, 9200, 6800, 9000, 13400, 11200, 12600, 15100, 15800, 19500],
                    borderColor: '#0066ff',
                    borderWidth: 2.8,
                    fill: true,
                    backgroundColor: gradient,
                    tension: 0.42,
                    pointRadius: 0,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#0066ff',
                    pointHoverBorderColor: '#ffffff',
                    pointHoverBorderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#0f172a',
                        titleFont: { family: "'Source Sans 3', 'Source Sans Pro', sans-serif", size: 13 },
                        bodyFont: { family: "'Source Sans 3', 'Source Sans Pro', sans-serif", size: 13 },
                        padding: 10,
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y.toLocaleString() + ' requests';
                            }
                        }
                    }
                },
                scales: {
                    x: { grid: { display: false }, ticks: { color: '#64748b', font: { family: "'Source Sans 3', 'Source Sans Pro', sans-serif", size: 12 } } },
                    y: {
                        min: 0,
                        max: 20000,
                        ticks: {
                            stepSize: 5000,
                            color: '#64748b',
                            font: { family: "'Source Sans 3', 'Source Sans Pro', sans-serif", size: 12 },
                            callback: function(value) {
                                if (value === 0) return '0';
                                return (value / 1000) + 'K';
                            }
                        },
                        grid: { color: '#f1f5f9' },
                        border: { display: false }
                    }
                }
            }
        });
    });

    /**
     * Delete Submission Handler with Global Confirmation Prompt
     */
    function handleDeleteSubmission(name, btnEl) {
        const row = btnEl ? btnEl.closest('tr') : null;
        showConfirmPrompt({
            title: 'Delete Submission',
            itemName: name,
            message: `Are you sure you want to delete the submission for <strong class="text-dark">"${name}"</strong>? This action cannot be undone.`,
            confirmText: 'Yes, Delete',
            confirmBtnClass: 'btn-danger',
            iconClass: 'bi-trash3-fill',
            onConfirm: function() {
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    setTimeout(() => row.remove(), 300);
                }
                showGlobalToast(`Submission "${name}" has been deleted.`);
            }
        });
    }
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
