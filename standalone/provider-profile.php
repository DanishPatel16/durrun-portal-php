<?php
/**
 * Durrun Partner Portal - Provider Profile Page (Standalone Version)
 * All CSS, HTML, and scripts are self-contained in this single file.
 * Only external dependencies are CDN links (Bootstrap 5, Icons, Google Fonts) and local logo images.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Profile - Durrun Partner Portal</title>
    
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

        .nav-top-link {
            color: #475569;
            font-size: 0.88rem;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.4rem 0.6rem;
            border-radius: 6px;
            transition: all 0.15s;
        }

        .nav-top-link:hover {
            color: var(--primary-color);
            background-color: #f8fafc;
        }

        .nav-top-link.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        .nav-search-box {
            position: relative;
        }

        .nav-search-input {
            height: 36px;
            border-radius: 20px;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            font-size: 0.88rem;
            padding-left: 1rem;
            padding-right: 2.2rem;
            width: 100%;
            outline: none;
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
            align-items: center;
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

        /* Form Cards */
        .section-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            border-radius: 14px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
            margin-bottom: 1.5rem;
            padding: 1.5rem;
        }

        .section-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .form-label-custom {
            font-size: 0.88rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.45rem;
            display: block;
        }

        .profile-input {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.92rem;
            color: #1e293b;
            font-family: var(--font-family-base);
            padding: 0.6rem 0.85rem;
        }

        .profile-input:focus {
            border-color: #0066ff;
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.12);
            outline: none;
        }

        .profile-avatar-box {
            width: 110px;
            height: 110px;
            background-color: #1e293b;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            letter-spacing: 0.05em;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .category-tag-pill {
            background-color: #eff6ff;
            color: #0066ff;
            border-radius: 20px;
            padding: 0.35rem 0.8rem;
            font-size: 0.82rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            border: 1px solid #dbeafe;
        }

        .category-tag-pill i {
            cursor: pointer;
            font-size: 0.95rem;
            margin-left: 0.25rem;
        }

        /* Public Profile Preview Box */
        .preview-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
        }

        .preview-avatar-box {
            width: 60px;
            height: 60px;
            min-width: 60px;
            background-color: #1e293b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: 800;
            font-size: 0.95rem;
            letter-spacing: 0.05em;
        }

        .preview-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.2;
        }

        .preview-tag-pill {
            background-color: #eff6ff;
            color: #0066ff;
            border-radius: 20px;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
            border: 1px solid #dbeafe;
        }

        .badge-status-active {
            background-color: #dcfce7;
            color: #15803d;
            padding: 0.35rem 0.85rem;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background-color: #16a34a;
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
            .welcome-header { flex-direction: column; gap: 1rem; align-items: flex-start !important; }
        }
    </style>
</head>
<body>

<div class="app-wrapper">
    <!-- Top Navigation Bar -->
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
                <input type="text" class="nav-search-input" placeholder="Search...">
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
        <!-- Sidebar Navigation -->
        <aside class="dashboard-sidebar" id="dashboardSidebar">
            <div class="sidebar-heading">Partner Portal</div>
            <ul class="sidebar-nav">
                <li>
                    <a href="dashboard.php" class="sidebar-link">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="provider-profile.php" class="sidebar-link active">
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

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Header & Save Changes Button -->
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
                    <!-- Left Column -->
                    <div class="col-12 col-xl-7">
                        <!-- Basic Information -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Basic Information</h2>
                            <div class="row g-4">
                                <div class="col-12 col-sm-4 d-flex flex-column align-items-center">
                                    <div class="profile-avatar-box position-relative">
                                        <div>ACME</div>
                                        <button type="button" class="btn btn-light position-absolute bottom-0 end-0 rounded-circle shadow-sm border p-0 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; margin-bottom: -5px; margin-right: -5px;" title="Change logo">
                                            <i class="bi bi-pencil-fill" style="font-size: 0.75rem; color: #0066ff;"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm mt-3 w-100 fw-semibold" style="border-radius: 8px; border-color: #dbeafe; background: #eff6ff; color: #0066ff;">
                                        Change Logo
                                    </button>
                                    <span class="text-muted mt-1" style="font-size: 0.75rem;">PNG, JPG or SVG (Max 2MB)</span>
                                </div>

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

                        <!-- Contact Information -->
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

                        <!-- Location -->
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

                        <!-- Social Links -->
                        <div class="section-card">
                            <h2 class="section-title mb-4">Social Links</h2>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-twitter-x"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="twitter" value="https://twitter.com/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-youtube"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="youtube" value="https://youtube.com/@acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-github"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="github" value="https://github.com/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-discord"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="discord" value="https://discord.gg/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-color: #e2e8f0; border-radius: 8px 0 0 8px;">
                                            <i class="bi bi-linkedin"></i>
                                        </span>
                                        <input type="url" class="form-control profile-input border-start-0 ps-0" name="linkedin" value="https://linkedin.com/company/acmeai" style="border-radius: 0 8px 8px 0;">
                                    </div>
                                </div>

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

                        <!-- Category Tags -->
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

                    <!-- Right Column -->
                    <div class="col-12 col-xl-5">
                        <!-- Public Profile Preview -->
                        <div class="section-card">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <h2 class="section-title">Public Profile Preview</h2>
                                <a href="#" class="text-primary text-decoration-none fw-semibold small d-flex align-items-center gap-1" style="color: #0066ff !important;">
                                    View on Durrun <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                            <p class="text-muted small mb-3">This is how your provider profile will appear on Durrun.</p>

                            <div class="preview-box p-3 border rounded-3 bg-white">
                                <div class="d-flex gap-3 align-items-start mb-3">
                                    <div class="preview-avatar-box">ACME</div>
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

                        <!-- Additional Information -->
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

                        <!-- Status -->
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

            <!-- Footer -->
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

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
