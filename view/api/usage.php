<?php
$pageTitle = "Usage & Analytics - Durrun Partner Portal";
$activePage = "api-usage";
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
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Usage & Analytics</li>
                </ol>
            </nav>

            <!-- Page Header Greeting & Date Range Filter -->
            <div class="welcome-header align-items-center mb-4">
                <div>
                    <h1 class="welcome-title">Usage & Analytics</h1>
                    <p class="welcome-subtitle">Track your API usage, view analytics, and monitor your integration performance.</p>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary bg-white d-inline-flex align-items-center gap-2 px-3 py-2 fw-semibold text-dark shadow-sm border" type="button" id="dateRangeDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 8px; font-size: 0.9rem; border-color: #cbd5e1 !important;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Usage & Analytics/Calender.svg" alt="Calendar" style="width: 16px; height: 16px;">
                            <span id="selectedDateLabel">Aug 01, 2025 - Aug 31, 2025</span>
                            <i class="bi bi-chevron-down text-muted ms-1" style="font-size: 0.75rem;"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-1" style="border-radius: 10px; font-size: 0.88rem; min-width: 220px;">
                            <li><h6 class="dropdown-header text-uppercase text-muted" style="font-size: 0.72rem; letter-spacing: 0.5px;">Select Timeframe</h6></li>
                            <li><a class="dropdown-item py-2" href="javascript:void(0)" onclick="setDateRange('Today', 'Today (Aug 31, 2025)')">Today</a></li>
                            <li><a class="dropdown-item py-2" href="javascript:void(0)" onclick="setDateRange('Last 7 Days', 'Aug 24, 2025 - Aug 31, 2025')">Last 7 Days</a></li>
                            <li><a class="dropdown-item py-2 active bg-primary text-white" href="javascript:void(0)" onclick="setDateRange('Aug 01, 2025 - Aug 31, 2025', 'Aug 01, 2025 - Aug 31, 2025')">Aug 01, 2025 - Aug 31, 2025</a></li>
                            <li><a class="dropdown-item py-2" href="javascript:void(0)" onclick="setDateRange('Last 90 Days', 'Jun 01, 2025 - Aug 31, 2025')">Last 90 Days</a></li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li><a class="dropdown-item py-2 text-muted" href="javascript:void(0)" onclick="alert('Custom date range picker')"><i class="bi bi-sliders me-2"></i>Custom Range...</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Top 4 Metric Cards -->
            <div class="row g-3 mb-4">
                <!-- Metric 1: Total API Calls -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #eff6ff; color: #2563eb;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Usage & Analytics/Total API.svg" alt="Total API Calls" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" style="font-size: 1.65rem; font-weight: 700; color: #0f172a; line-height: 1.2;">125,430</div>
                            <div class="stat-label" style="font-size: 0.85rem; color: #64748b; margin-top: 3px;">Total API Calls</div>
                        </div>
                    </div>
                </div>

                <!-- Metric 2: Unique Users -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #f5f3ff; color: #7c3aed;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Usage & Analytics/Unique Users.svg" alt="Unique Users" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" style="font-size: 1.65rem; font-weight: 700; color: #0f172a; line-height: 1.2;">8,240</div>
                            <div class="stat-label" style="font-size: 0.85rem; color: #64748b; margin-top: 3px;">Unique Users</div>
                        </div>
                    </div>
                </div>

                <!-- Metric 3: Avg. Response Time -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #fffbeb; color: #d97706;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Usage & Analytics/Avg. Response.svg" alt="Avg. Response Time" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" style="font-size: 1.65rem; font-weight: 700; color: #0f172a; line-height: 1.2;">320 ms</div>
                            <div class="stat-label" style="font-size: 0.85rem; color: #64748b; margin-top: 3px;">Avg. Response Time</div>
                        </div>
                    </div>
                </div>

                <!-- Metric 4: Success Rate -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #f0fdf4; color: #16a34a;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Usage & Analytics/Success Rate.svg" alt="Success Rate" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" style="font-size: 1.65rem; font-weight: 700; color: #0f172a; line-height: 1.2;">99.9%</div>
                            <div class="stat-label" style="font-size: 0.85rem; color: #64748b; margin-top: 3px;">Success Rate</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle Section: Chart & Requests by Model -->
            <div class="row g-3 mb-4">
                <!-- Left: API Calls Over Time Chart -->
                <div class="col-12 col-xl-8">
                    <div class="section-card h-100 p-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                            <div>
                                <h3 class="section-card-title mb-1" style="font-size: 1.1rem; font-weight: 700; color: #0f172a;">API Calls</h3>
                                <p class="text-muted mb-0" style="font-size: 0.85rem;">Total API calls over time</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary bg-white text-dark dropdown-toggle px-3 py-1 fw-medium border" type="button" id="chartIntervalBtn" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 8px; font-size: 0.85rem; border-color: #cbd5e1 !important;">
                                    Daily
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem;">
                                    <li><a class="dropdown-item active" href="javascript:void(0)" onclick="setChartInterval('Daily', this)">Daily</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="setChartInterval('Hourly', this)">Hourly</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="setChartInterval('Weekly', this)">Weekly</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Chart Container -->
                        <div style="position: relative; width: 100%; height: 280px;">
                            <canvas id="apiCallsChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Right: Requests by Model Breakdown -->
                <div class="col-12 col-xl-4">
                    <div class="section-card h-100 p-4 d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="section-card-title mb-1" style="font-size: 1.1rem; font-weight: 700; color: #0f172a;">Requests by Model</h3>
                            <p class="text-muted mb-4" style="font-size: 0.85rem;">Top models by API calls</p>

                            <!-- Model 1: Acme Chat Pro -->
                            <div class="mb-3 pb-1">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span style="font-size: 0.9rem; font-weight: 500; color: #1e293b; min-width: 120px;">Acme Chat Pro</span>
                                    <div class="flex-grow-1 mx-3">
                                        <div class="progress" style="height: 7px; background-color: #f1f5f9; border-radius: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 36%; background-color: #0066ff; border-radius: 10px;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="text-end" style="min-width: 55px;">
                                        <div class="fw-bold text-dark" style="font-size: 0.88rem;">45,230</div>
                                        <div class="text-muted" style="font-size: 0.76rem;">36%</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Model 2: Acme Vision 1.0 -->
                            <div class="mb-3 pb-1">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span style="font-size: 0.9rem; font-weight: 500; color: #1e293b; min-width: 120px;">Acme Vision 1.0</span>
                                    <div class="flex-grow-1 mx-3">
                                        <div class="progress" style="height: 7px; background-color: #f1f5f9; border-radius: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 23%; background-color: #0066ff; border-radius: 10px;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="text-end" style="min-width: 55px;">
                                        <div class="fw-bold text-dark" style="font-size: 0.88rem;">28,450</div>
                                        <div class="text-muted" style="font-size: 0.76rem;">23%</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Model 3: Acme Embeddings -->
                            <div class="mb-3 pb-1">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span style="font-size: 0.9rem; font-weight: 500; color: #1e293b; min-width: 120px;">Acme Embeddings</span>
                                    <div class="flex-grow-1 mx-3">
                                        <div class="progress" style="height: 7px; background-color: #f1f5f9; border-radius: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 14%; background-color: #0066ff; border-radius: 10px;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="text-end" style="min-width: 55px;">
                                        <div class="fw-bold text-dark" style="font-size: 0.88rem;">18,120</div>
                                        <div class="text-muted" style="font-size: 0.76rem;">14%</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Model 4: Acme Audio -->
                            <div class="mb-3 pb-1">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span style="font-size: 0.9rem; font-weight: 500; color: #1e293b; min-width: 120px;">Acme Audio</span>
                                    <div class="flex-grow-1 mx-3">
                                        <div class="progress" style="height: 7px; background-color: #f1f5f9; border-radius: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #0066ff; border-radius: 10px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="text-end" style="min-width: 55px;">
                                        <div class="fw-bold text-dark" style="font-size: 0.88rem;">12,340</div>
                                        <div class="text-muted" style="font-size: 0.76rem;">10%</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Model 5: Others -->
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span style="font-size: 0.9rem; font-weight: 500; color: #1e293b; min-width: 120px;">Others</span>
                                    <div class="flex-grow-1 mx-3">
                                        <div class="progress" style="height: 7px; background-color: #f1f5f9; border-radius: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #0066ff; border-radius: 10px;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="text-end" style="min-width: 55px;">
                                        <div class="fw-bold text-dark" style="font-size: 0.88rem;">21,290</div>
                                        <div class="text-muted" style="font-size: 0.76rem;">17%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section: Recent API Calls Table -->
            <div class="section-card mb-4 p-0 overflow-hidden">
                <div class="p-3 px-4 border-bottom d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="section-card-title mb-0" style="font-size: 1.05rem; font-weight: 700; color: #0f172a;">Recent API Calls</h3>
                        <p class="text-muted mb-0" style="font-size: 0.82rem;">Your latest API requests</p>
                    </div>
                    <div>
                        <a href="<?php echo $pathToRoot; ?>view/api/keys.php" class="text-decoration-none fw-semibold d-inline-flex align-items-center gap-1" style="color: #0066ff; font-size: 0.88rem;">
                            <span>View All</span>
                            <i class="bi bi-chevron-right" style="font-size: 0.8rem;"></i>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead style="background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <tr style="font-size: 0.82rem; color: #64748b; text-transform: capitalize;">
                                <th class="ps-4 py-3">Date & Time</th>
                                <th class="py-3">Model</th>
                                <th class="py-3">Endpoint</th>
                                <th class="py-3">Status</th>
                                <th class="py-3">Response Time</th>
                                <th class="pe-4 py-3">Tokens / Units</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 0.88rem;">
                            <!-- Row 1 -->
                            <tr>
                                <td class="ps-4 text-dark fw-medium">Aug 26, 2025 10:14 AM</td>
                                <td class="text-dark fw-medium">Acme Chat Pro</td>
                                <td><code class="text-muted" style="background-color: #f1f5f9; padding: 2px 8px; border-radius: 6px; font-size: 0.82rem;">/v1/chat/completions</code></td>
                                <td>
                                    <span class="badge" style="background-color: #dcfce7; color: #16a34a; font-weight: 600; font-size: 0.78rem; padding: 4px 10px; border-radius: 50rem;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Success
                                    </span>
                                </td>
                                <td class="text-muted">320 ms</td>
                                <td class="pe-4 text-dark fw-medium">1,245</td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td class="ps-4 text-dark fw-medium">Aug 26, 2025 09:50 AM</td>
                                <td class="text-dark fw-medium">Acme Vision 1.0</td>
                                <td><code class="text-muted" style="background-color: #f1f5f9; padding: 2px 8px; border-radius: 6px; font-size: 0.82rem;">/v1/images/generate</code></td>
                                <td>
                                    <span class="badge" style="background-color: #dcfce7; color: #16a34a; font-weight: 600; font-size: 0.78rem; padding: 4px 10px; border-radius: 50rem;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Success
                                    </span>
                                </td>
                                <td class="text-muted">1.2 s</td>
                                <td class="pe-4 text-muted">-</td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td class="ps-4 text-dark fw-medium">Aug 26, 2025 09:22 AM</td>
                                <td class="text-dark fw-medium">Acme Embeddings</td>
                                <td><code class="text-muted" style="background-color: #f1f5f9; padding: 2px 8px; border-radius: 6px; font-size: 0.82rem;">/v1/embeddings</code></td>
                                <td>
                                    <span class="badge" style="background-color: #dcfce7; color: #16a34a; font-weight: 600; font-size: 0.78rem; padding: 4px 10px; border-radius: 50rem;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Success
                                    </span>
                                </td>
                                <td class="text-muted">280 ms</td>
                                <td class="pe-4 text-dark fw-medium">512</td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td class="ps-4 text-dark fw-medium">Aug 25, 2025 06:18 PM</td>
                                <td class="text-dark fw-medium">Acme Audio</td>
                                <td><code class="text-muted" style="background-color: #f1f5f9; padding: 2px 8px; border-radius: 6px; font-size: 0.82rem;">/v1/audio/transcribe</code></td>
                                <td>
                                    <span class="badge" style="background-color: #fee2e2; color: #dc2626; font-weight: 600; font-size: 0.78rem; padding: 4px 10px; border-radius: 50rem;">
                                        <i class="bi bi-x-circle-fill me-1"></i> Error
                                    </span>
                                </td>
                                <td class="text-muted">1.5 s</td>
                                <td class="pe-4 text-muted">-</td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <td class="ps-4 text-dark fw-medium">Aug 25, 2025 04:33 PM</td>
                                <td class="text-dark fw-medium">Acme Chat Pro</td>
                                <td><code class="text-muted" style="background-color: #f1f5f9; padding: 2px 8px; border-radius: 6px; font-size: 0.82rem;">/v1/chat/completions</code></td>
                                <td>
                                    <span class="badge" style="background-color: #dcfce7; color: #16a34a; font-weight: 600; font-size: 0.78rem; padding: 4px 10px; border-radius: 50rem;">
                                        <i class="bi bi-check-circle-fill me-1"></i> Success
                                    </span>
                                </td>
                                <td class="text-muted">310 ms</td>
                                <td class="pe-4 text-dark fw-medium">980</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Portal Common Footer -->
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

    // Change date range label
    function setDateRange(rangeText, fullLabel) {
        const label = document.getElementById('selectedDateLabel');
        if (label) {
            label.textContent = fullLabel;
        }
    }

    // Change chart interval (Daily, Hourly, Weekly)
    function setChartInterval(interval, el) {
        const btn = document.getElementById('chartIntervalBtn');
        if (btn) {
            btn.textContent = interval;
        }
        document.querySelectorAll('#chartIntervalBtn + .dropdown-menu .dropdown-item').forEach(item => item.classList.remove('active'));
        if (el) el.classList.add('active');
    }

    // Initialize Chart.js Area Chart for API Calls
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('apiCallsChart');
        if (!ctx) return;

        const context = ctx.getContext('2d');
        
        // Gradient fill for line chart
        const gradient = context.createLinearGradient(0, 0, 0, 260);
        gradient.addColorStop(0, 'rgba(0, 102, 255, 0.16)');
        gradient.addColorStop(1, 'rgba(0, 102, 255, 0.01)');

        // Dates matching doc_image_10: Aug 01 to Aug 31
        const days = [
            'Aug 01', 'Aug 02', 'Aug 03', 'Aug 04', 'Aug 05',
            'Aug 06', 'Aug 07', 'Aug 08', 'Aug 09', 'Aug 10',
            'Aug 11', 'Aug 12', 'Aug 13', 'Aug 14', 'Aug 15',
            'Aug 16', 'Aug 17', 'Aug 18', 'Aug 19', 'Aug 20',
            'Aug 21', 'Aug 22', 'Aug 23', 'Aug 24', 'Aug 25',
            'Aug 26', 'Aug 27', 'Aug 28', 'Aug 29', 'Aug 30', 'Aug 31'
        ];

        // Specific data points matching exact peaks and dips in reference doc_image_10
        const dataPoints = [
            2000, 2600, 3300, 3400, 3500,
            4200, 5200, 3700, 4200, 4900,
            5000, 5100, 5000, 4900, 6200,
            5300, 4100, 4800, 5800, 5000,
            9100, 6800, 7400, 7000, 5200,
            5900, 6000, 5900, 6800, 6400, 5300
        ];

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: days,
                datasets: [{
                    label: 'API Calls',
                    data: dataPoints,
                    borderColor: '#0066ff',
                    borderWidth: 2.2,
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.35,
                    pointBackgroundColor: '#0066ff',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: function(context) {
                        // Highlight key ticks or hover
                        const idx = context.dataIndex;
                        const keyIndices = [0, 4, 9, 14, 19, 20, 24, 30];
                        return keyIndices.includes(idx) ? 4.5 : 3;
                    },
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#0066ff',
                    pointHoverBorderColor: '#ffffff',
                    pointHoverBorderWidth: 2.5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#0f172a',
                        titleColor: '#f8fafc',
                        bodyColor: '#94a3b8',
                        padding: 10,
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            label: function (context) {
                                return context.parsed.y.toLocaleString() + ' calls';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            font: {
                                family: "'Source Sans 3', sans-serif",
                                size: 11
                            },
                            color: '#94a3b8',
                            callback: function (val, index) {
                                // Only show ticks for Aug 01, Aug 05, Aug 10, Aug 15, Aug 20, Aug 25, Aug 31
                                const label = days[index];
                                if (['Aug 01', 'Aug 05', 'Aug 10', 'Aug 15', 'Aug 20', 'Aug 25', 'Aug 31'].includes(label)) {
                                    return label;
                                }
                                return '';
                            },
                            autoSkip: false
                        }
                    },
                    y: {
                        min: 0,
                        max: 10000,
                        ticks: {
                            stepSize: 2000,
                            font: {
                                family: "'Source Sans 3', sans-serif",
                                size: 11
                            },
                            color: '#94a3b8',
                            callback: function (value) {
                                if (value === 0) return '0';
                                return (value / 1000) + 'K';
                            }
                        },
                        grid: {
                            color: '#e2e8f0',
                            borderDash: [4, 4],
                            drawBorder: false
                        }
                    }
                }
            }
        });
    });
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
