<?php
/**
 * Durrun Partner Portal - Dashboard Page (Standalone Version)
 * All CSS, HTML, and scripts are self-contained in this single file.
 * Only external dependencies are CDN links (Bootstrap 5, Chart.js, Icons, Google Fonts) and local logo images.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Durrun Partner Portal</title>
    
    <!-- 1. Google Font: Source Sans Pro / Source Sans 3 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- 2. Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- 3. Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- 4. Chart.js CDN (for API Requests spline chart) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

    <style>
        :root {
            --primary-color: #0066ff;
            --primary-hover: #0052cc;
            --text-dark: #0f172a;
            --text-body: #334155;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --bg-page: #f8fafc;
            --sidebar-width: 250px;
            --font-family-base: 'Source Sans 3', 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            font-family: var(--font-family-base);
            color: var(--text-body);
            background-color: var(--bg-page);
            margin: 0;
            padding: 0;
        }

        h1, h2, h3, h4, h5, h6, .fw-bold, .fw-semibold {
            font-family: var(--font-family-base);
            color: var(--text-dark);
        }

        .app-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Top Navbar */
        .top-navbar {
            height: 68px;
            background: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            padding: 0 2rem 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-brand-logo {
            height: 32px;
        }

        .nav-search-box {
            position: relative;
            width: 220px;
        }

        .nav-search-input {
            height: 36px;
            border-radius: 20px;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            font-size: 0.88rem;
            padding-left: 2.2rem;
            padding-right: 0.75rem;
            width: 100%;
            outline: none;
            transition: all 0.2s ease;
        }

        .nav-search-input:focus {
            background-color: #ffffff;
            border-color: #0066ff;
            box-shadow: 0 0 0 2px rgba(0, 102, 255, 0.1);
        }

        .nav-search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 0.85rem;
        }

        .nav-right-actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .nav-action-link {
            color: #475569;
            font-size: 0.92rem;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.45rem;
            cursor: pointer;
            transition: color 0.15s;
        }

        .nav-action-link:hover {
            color: var(--primary-color);
        }

        .nav-avatar-badge {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #dbeafe;
            color: #1e40af;
            font-weight: 700;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-dropdown-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        /* Dashboard Layout */
        .dashboard-layout {
            display: flex;
            flex: 1;
        }

        /* Sidebar */
        .dashboard-sidebar {
            width: var(--sidebar-width);
            background: #ffffff;
            border-right: 1px solid #f1f5f9;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
        }

        .sidebar-heading {
            font-size: 0.92rem;
            font-weight: 700;
            color: #0f172a;
            padding: 0.25rem 0.75rem 0.85rem;
            margin-bottom: 0.25rem;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding: 0.65rem 0.85rem;
            color: #475569;
            font-size: 0.92rem;
            font-weight: 500;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.15s ease;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }

        .sidebar-link:hover {
            background-color: #f8fafc;
            color: var(--text-dark);
        }

        .sidebar-link.active {
            background-color: #eef4ff;
            color: var(--primary-color);
            font-weight: 600;
        }

        .sidebar-submenu {
            list-style: none;
            padding-left: 1.85rem;
            margin: 0.25rem 0;
            position: relative;
        }

        .sidebar-submenu::before {
            content: '';
            position: absolute;
            left: 1.5rem;
            top: 0.35rem;
            bottom: 0.35rem;
            width: 1.5px;
            background-color: #e2e8f0;
        }

        .sidebar-sublink {
            display: block;
            padding: 0.45rem 0.75rem;
            color: #64748b;
            font-size: 0.88rem;
            font-weight: 500;
            text-decoration: none;
            border-radius: 6px;
            transition: color 0.15s;
        }

        .sidebar-sublink:hover {
            color: var(--primary-color);
        }

        /* Main Content */
        .dashboard-main {
            flex: 1;
            background-color: #f8fafc;
            padding: 2.25rem 2.5rem;
            overflow-y: auto;
        }

        .welcome-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2rem;
        }

        .welcome-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 0.25rem;
        }

        .welcome-subtitle {
            font-size: 0.95rem;
            color: var(--text-muted);
            margin: 0;
        }

        .header-meta-date {
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 500;
            text-align: right;
            margin-bottom: 0.15rem;
        }

        .header-meta-tagline {
            font-size: 0.85rem;
            color: #64748b;
            text-align: right;
            margin: 0;
        }

        /* Stat Cards */
        .stat-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            border-radius: 14px;
            padding: 1.35rem 1.25rem;
            display: flex;
            align-items: flex-start;
            gap: 1.1rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
            height: 100%;
        }

        .stat-icon-wrapper {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
        }

        .stat-icon-blue { background-color: #e0edff; color: #0066ff; }
        .stat-icon-purple { background-color: #f3e8ff; color: #9333ea; }
        .stat-icon-amber { background-color: #fef3c7; color: #d97706; }
        .stat-icon-green { background-color: #dcfce7; color: #16a34a; }

        .stat-body { flex: 1; }

        .stat-label {
            font-size: 0.88rem;
            color: #64748b;
            font-weight: 500;
            margin-bottom: 0.35rem;
        }

        .stat-value-row {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            margin-bottom: 0.35rem;
        }

        .stat-value {
            font-size: 1.85rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1;
        }

        .stat-badge-pill {
            font-size: 0.75rem;
            font-weight: 600;
            background-color: #dcfce7;
            color: #16a34a;
            padding: 0.2rem 0.5rem;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 0.2rem;
        }

        .stat-subtext {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0;
        }

        /* Section Cards */
        .section-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            border-radius: 14px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
            margin-bottom: 1.75rem;
            padding: 1.5rem;
        }

        .section-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.25rem;
        }

        .section-header-left {
            display: flex;
            align-items: center;
            gap: 0.85rem;
        }

        .section-header-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
        }

        .section-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .section-subtitle {
            font-size: 0.85rem;
            color: #64748b;
            margin: 0.15rem 0 0;
        }

        .filter-select-btn {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 0.45rem 0.85rem;
            font-size: 0.85rem;
            font-weight: 500;
            color: #334155;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-select-btn:hover { background-color: #f8fafc; }

        .view-all-link {
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .view-all-link:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }

        /* Custom Table */
        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .custom-table th {
            font-size: 0.85rem;
            font-weight: 500;
            color: #64748b;
            padding: 0.85rem 1rem;
            border-bottom: 1px solid #f1f5f9;
            text-align: left;
        }

        .custom-table td {
            padding: 1rem 1rem;
            font-size: 0.92rem;
            color: #334155;
            border-bottom: 1px solid #f8fafc;
            vertical-align: middle;
        }

        .custom-table tr:last-child td { border-bottom: none; }
        .custom-table .item-name { font-weight: 600; color: #0f172a; }
        .custom-table .item-link { color: var(--primary-color); text-decoration: none; font-weight: 600; }
        .custom-table .item-link:hover { text-decoration: underline; }

        /* Badges */
        .badge-status {
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
            display: inline-block;
        }

        .badge-under-review { background-color: #fef9c3; color: #a16207; }
        .badge-approved { background-color: #dcfce7; color: #15803d; }
        .badge-changes-requested { background-color: #fee2e2; color: #b91c1c; }
        .badge-live { background-color: #dcfce7; color: #15803d; }
        .badge-draft { background-color: #f1f5f9; color: #475569; }

        .btn-actions-menu {
            background: transparent;
            border: none;
            color: #94a3b8;
            font-size: 1.1rem;
            cursor: pointer;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
        }

        .btn-actions-menu:hover {
            background-color: #f1f5f9;
            color: #334155;
        }

        .dashboard-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #64748b;
            margin-top: 2rem;
            padding-top: 1rem;
        }

        @media (max-width: 991px) {
            .dashboard-layout { flex-direction: column; }
            .dashboard-sidebar { width: 100%; border-right: none; border-bottom: 1px solid #f1f5f9; }
            .dashboard-main { padding: 1.5rem 1rem; }
            .welcome-header { flex-direction: column; gap: 1rem; }
            .header-meta-date, .header-meta-tagline { text-align: left; }
        }
    </style>
</head>
<body>

<div class="app-wrapper">
    <!-- Top Navbar -->
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button">
                <i class="bi bi-list fs-5"></i>
            </button>
            <a href="dashboard.php" class="d-flex align-items-center text-decoration-none">
                <img src="assets/img/logo_card.png" alt="Durrun Logo" class="nav-brand-logo">
            </a>
        </div>

        <div class="nav-right-actions">
            <div class="nav-search-box d-none d-md-block">
                <i class="bi bi-search nav-search-icon"></i>
                <input type="text" class="nav-search-input" placeholder="Search...">
            </div>

            <a href="#" class="nav-action-link">
                <i class="bi bi-headset fs-5"></i>
                <span class="d-none d-sm-inline">Help</span>
            </a>

            <a href="#" class="nav-action-link position-relative">
                <i class="bi bi-bell fs-5"></i>
            </a>

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

    <!-- Dashboard Layout -->
    <div class="dashboard-layout">
        <!-- Sidebar -->
        <aside class="dashboard-sidebar" id="dashboardSidebar">
            <div class="sidebar-heading">Partner Portal</div>
            <ul class="sidebar-nav">
                <li>
                    <a href="dashboard.php" class="sidebar-link active">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="provider-profile.php" class="sidebar-link">
                        <i class="bi bi-person"></i>
                        <span>Provider Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-box"></i>
                        <span>Models</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Templates</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-card-checklist"></i>
                        <span>Submissions</span>
                    </a>
                </li>
                <li>
                    <a href="#apiAccessSubmenu" class="sidebar-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" role="button" aria-expanded="true">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-key"></i>
                            <span>API Access</span>
                        </div>
                        <i class="bi bi-chevron-down" style="font-size: 0.75rem;"></i>
                    </a>
                    <div class="collapse show" id="apiAccessSubmenu">
                        <ul class="sidebar-submenu">
                            <li><a href="#" class="sidebar-sublink">Overview</a></li>
                            <li><a href="#" class="sidebar-sublink">API Keys</a></li>
                            <li><a href="#" class="sidebar-sublink">Usage & Analytics</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="dashboard-main">
            <!-- Header -->
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

            <!-- Top 4 Metric Cards -->
            <div class="row g-3 mb-4">
                <!-- Models -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-box"></i></div>
                        <div class="stat-body">
                            <div class="stat-label">Models</div>
                            <div class="stat-value-row">
                                <span class="stat-value">5</span>
                                <span class="stat-badge-pill"><i class="bi bi-arrow-up-short"></i> +25%</span>
                            </div>
                            <div class="stat-subtext">3 Live &bull; 1 Under Review</div>
                        </div>
                    </div>
                </div>

                <!-- Templates -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-purple"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="stat-body">
                            <div class="stat-label">Templates</div>
                            <div class="stat-value-row">
                                <span class="stat-value">12</span>
                                <span class="stat-badge-pill"><i class="bi bi-arrow-up-short"></i> 12%</span>
                            </div>
                            <div class="stat-subtext">8 Live &bull; 3 Under Review</div>
                        </div>
                    </div>
                </div>

                <!-- Pending Submissions -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-amber"><i class="bi bi-clock"></i></div>
                        <div class="stat-body">
                            <div class="stat-label">Pending Submissions</div>
                            <div class="stat-value-row">
                                <span class="stat-value">4</span>
                            </div>
                            <div class="stat-subtext">2 Models &bull; 2 Templates</div>
                        </div>
                    </div>
                </div>

                <!-- API Requests -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-green"><i class="bi bi-key"></i></div>
                        <div class="stat-body">
                            <div class="stat-label">API Requests</div>
                            <div class="stat-value-row">
                                <span class="stat-value">125,430</span>
                                <span class="stat-badge-pill"><i class="bi bi-arrow-up-short"></i> 18%</span>
                            </div>
                            <div class="stat-subtext">This month</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- API Requests Chart Card -->
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

                <div style="position: relative; height: 260px; width: 100%;">
                    <canvas id="apiRequestsChart"></canvas>
                </div>
            </div>

            <!-- Recent Submissions Table -->
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
                        <a href="#" class="view-all-link">
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
                            <tr>
                                <td><span class="item-name">Blog Post Generator</span></td>
                                <td>Template</td>
                                <td>Aug 25, 2025</td>
                                <td><span class="badge-status badge-under-review">Under Review</span></td>
                                <td style="text-align: right;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="item-link">Acme Vision 1.0</a></td>
                                <td>Model</td>
                                <td>Aug 22, 2025</td>
                                <td><span class="badge-status badge-approved">Approved</span></td>
                                <td style="text-align: right;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="item-link">Email Assistant</a></td>
                                <td>Template</td>
                                <td>Aug 20, 2025</td>
                                <td><span class="badge-status badge-changes-requested">Changes Requested</span></td>
                                <td style="text-align: right;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="item-link">Acme LLM 1.2</a></td>
                                <td>Model</td>
                                <td>Aug 18, 2025</td>
                                <td><span class="badge-status badge-live">Live</span></td>
                                <td style="text-align: right;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="item-link">Code Explainer</a></td>
                                <td>Template</td>
                                <td>Aug 15, 2025</td>
                                <td><span class="badge-status badge-draft">Draft</span></td>
                                <td style="text-align: right;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

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
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
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
                    x: {
                        grid: { display: false },
                        ticks: {
                            color: '#64748b',
                            font: { family: "'Source Sans 3', 'Source Sans Pro', sans-serif", size: 12 }
                        }
                    },
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
</script>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
