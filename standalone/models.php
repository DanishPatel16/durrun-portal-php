<?php
/**
 * Durrun Partner Portal - Models List Page (Standalone Version)
 * All CSS, HTML, and scripts are self-contained in this single file.
 */
$showEmpty = isset($_GET['empty']) && $_GET['empty'] == '1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models - Durrun Partner Portal</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .nav-brand-logo { height: 32px; }

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

        .nav-top-link:hover { color: var(--primary-color); background-color: #f8fafc; }
        .nav-top-link.active { color: var(--primary-color); font-weight: 600; }

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

        .nav-right-actions { display: flex; align-items: center; gap: 1.5rem; }
        .nav-action-link { color: #475569; font-size: 0.92rem; text-decoration: none; cursor: pointer; }
        .nav-action-link:hover { color: var(--primary-color); }

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

        .dashboard-layout { display: flex; flex: 1; }

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

        .sidebar-nav { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.25rem; }

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

        .sidebar-link:hover { background-color: #f8fafc; color: var(--text-dark); }
        .sidebar-link.active { background-color: #eef4ff; color: var(--primary-color); font-weight: 600; }

        .sidebar-submenu { list-style: none; padding-left: 1.85rem; margin: 0.25rem 0; position: relative; }
        .sidebar-submenu::before { content: ''; position: absolute; left: 1.5rem; top: 0.35rem; bottom: 0.35rem; width: 1.5px; background-color: #e2e8f0; }
        .sidebar-sublink { display: block; padding: 0.45rem 0.75rem; color: #64748b; font-size: 0.88rem; text-decoration: none; border-radius: 6px; }
        .sidebar-sublink:hover { color: var(--primary-color); }

        .dashboard-main { flex: 1; background-color: #f8fafc; padding: 2.25rem 2.5rem; overflow-y: auto; }
        .welcome-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
        .welcome-title { font-size: 1.75rem; font-weight: 800; color: #0f172a; margin-bottom: 0.25rem; }
        .welcome-subtitle { font-size: 0.95rem; color: var(--text-muted); margin: 0; }

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
        .stat-icon-green { background-color: #dcfce7; color: #16a34a; }
        .stat-icon-amber { background-color: #fef3c7; color: #d97706; }

        .stat-body { flex: 1; }
        .stat-label { font-size: 0.88rem; color: #64748b; font-weight: 500; }
        .stat-value { font-size: 1.85rem; font-weight: 800; color: #0f172a; line-height: 1.1; margin-bottom: 0.2rem; }

        .section-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            border-radius: 14px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        }

        .profile-input {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.92rem;
            color: #1e293b;
            padding: 0.6rem 0.85rem;
        }

        .input-icon-group { position: relative; display: flex; align-items: center; }
        .input-icon-group .input-icon-left { position: absolute; left: 14px; color: #94a3b8; font-size: 1.05rem; }
        .input-icon-group .form-control { padding-left: 2.75rem; border: 1px solid #e2e8f0; }

        .custom-table { width: 100%; border-collapse: separate; border-spacing: 0; }
        .custom-table th { font-size: 0.85rem; font-weight: 500; color: #64748b; padding: 0.85rem 1rem; border-bottom: 1px solid #f1f5f9; text-align: left; }
        .custom-table td { padding: 1rem 1rem; font-size: 0.92rem; color: #334155; border-bottom: 1px solid #f8fafc; vertical-align: middle; }
        .custom-table tr:last-child td { border-bottom: none; }
        .custom-table .item-link { color: var(--primary-color); text-decoration: none; font-weight: 600; }
        .custom-table .item-link:hover { text-decoration: underline; }

        .badge-status { padding: 0.35rem 0.75rem; border-radius: 20px; font-size: 0.78rem; font-weight: 600; display: inline-block; }
        .badge-under-review { background-color: #fef9c3; color: #a16207; }
        .badge-live { background-color: #dcfce7; color: #15803d; }
        .badge-changes-requested { background-color: #fee2e2; color: #b91c1c; }

        .btn-actions-menu { background: transparent; border: none; color: #94a3b8; font-size: 1.1rem; cursor: pointer; }

        .dashboard-footer { display: flex; justify-content: space-between; align-items: center; font-size: 0.85rem; color: #64748b; margin-top: 2rem; padding-top: 1rem; }

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
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button"><i class="bi bi-list fs-5"></i></button>
            <a href="dashboard.php" class="d-flex align-items-center text-decoration-none">
                <img src="assets/img/logo_card.png" alt="Durrun Logo" class="nav-brand-logo">
            </a>
            <nav class="d-none d-xl-flex align-items-center gap-3 ms-3">
                <a href="dashboard.php" class="nav-top-link"><i class="bi bi-house-door"></i> Home</a>
                <a href="#" class="nav-top-link"><i class="bi bi-journal-text"></i> Templates</a>
                <a href="provider-profile.php" class="nav-top-link"><i class="bi bi-box-seam"></i> Providers</a>
                <a href="#" class="nav-top-link"><i class="bi bi-code-slash"></i> Playground</a>
                <a href="#" class="nav-top-link"><i class="bi bi-folder"></i> Projects</a>
                <a href="#" class="nav-top-link"><i class="bi bi-people"></i> Community</a>
                <a href="#" class="nav-top-link"><i class="bi bi-window-sidebar"></i> Workspaces</a>
                <a href="#" class="nav-top-link"><i class="bi bi-tag"></i> Pricing</a>
            </nav>
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
                <button class="user-dropdown-btn border-0 bg-transparent" type="button" data-bs-toggle="dropdown">
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

    <div class="dashboard-layout">
        <aside class="dashboard-sidebar" id="dashboardSidebar">
            <div class="sidebar-heading">Partner Portal</div>
            <ul class="sidebar-nav">
                <li><a href="dashboard.php" class="sidebar-link"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a></li>
                <li><a href="provider-profile.php" class="sidebar-link"><i class="bi bi-person"></i><span>Provider Profile</span></a></li>
                <li><a href="models.php" class="sidebar-link active"><i class="bi bi-box"></i><span>Models</span></a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-file-earmark-text"></i><span>Templates</span></a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-card-checklist"></i><span>Submissions</span></a></li>
                <li>
                    <a href="#apiSubmenu" class="sidebar-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse">
                        <div class="d-flex align-items-center gap-2"><i class="bi bi-key"></i><span>API Access</span></div>
                        <i class="bi bi-chevron-down" style="font-size: 0.75rem;"></i>
                    </a>
                    <div class="collapse show" id="apiSubmenu">
                        <ul class="sidebar-submenu">
                            <li><a href="#" class="sidebar-sublink">Overview</a></li>
                            <li><a href="#" class="sidebar-sublink">API Keys</a></li>
                            <li><a href="#" class="sidebar-sublink">Usage & Analytics</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-gear"></i><span>Settings</span></a></li>
            </ul>
        </aside>

        <main class="dashboard-main">
            <div class="welcome-header align-items-center">
                <div>
                    <h1 class="welcome-title">Models</h1>
                    <p class="welcome-subtitle">Manage your AI models. Add new models, update details, and track their status.</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <?php if ($showEmpty): ?>
                        <a href="models.php" class="btn btn-outline-secondary btn-sm">Show Populated</a>
                    <?php else: ?>
                        <a href="models.php?empty=1" class="btn btn-outline-secondary btn-sm">Show Empty</a>
                    <?php endif; ?>
                    <a href="models-add.php" class="btn btn-primary d-flex align-items-center gap-2 px-3 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px;">
                        <i class="bi bi-plus-lg"></i> Add New Model
                    </a>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-box"></i></div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '5'; ?></div>
                            <div class="stat-label">Total Models</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-green"><i class="bi bi-play-fill" style="font-size: 1.6rem;"></i></div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '3'; ?></div>
                            <div class="stat-label">Live</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-amber"><i class="bi bi-clock"></i></div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '1'; ?></div>
                            <div class="stat-label"><?php echo $showEmpty ? 'Under Review' : 'Pending Review'; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: <?php echo $showEmpty ? '#f3e8ff' : '#fee2e2'; ?>; color: <?php echo $showEmpty ? '#9333ea' : '#dc2626'; ?>;">
                            <i class="<?php echo $showEmpty ? 'bi bi-file-earmark-text' : 'bi bi-x-circle'; ?>"></i>
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '1'; ?></div>
                            <div class="stat-label"><?php echo $showEmpty ? 'Draft' : 'Rejected'; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-card p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-12 col-md-6 col-lg-7">
                        <div class="input-icon-group">
                            <i class="bi bi-search input-icon-left"></i>
                            <input type="text" class="form-control" placeholder="Search models by name, ID or description..." style="border-radius: 8px; height: 42px;">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2.5">
                        <select class="form-select profile-input" style="height: 42px;">
                            <option selected>All Status</option>
                            <option value="live">Live</option>
                            <option value="pending">Pending Review</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2.5">
                        <select class="form-select profile-input" style="height: 42px;">
                            <option selected>All Categories</option>
                            <option value="text">Text</option>
                            <option value="image">Image</option>
                            <option value="embedding">Embedding</option>
                            <option value="audio">Audio</option>
                        </select>
                    </div>
                </div>
            </div>

            <?php if ($showEmpty): ?>
                <div class="section-card py-5 text-center my-4">
                    <div class="d-flex justify-content-center mb-3">
                        <div style="width: 110px; height: 110px; border-radius: 50%; background: #eff6ff; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="bi bi-box" style="font-size: 3rem; color: #0066ff;"></i>
                        </div>
                    </div>
                    <h3 class="fw-bold text-dark mb-2" style="font-size: 1.5rem;">No models yet</h3>
                    <p class="text-muted mx-auto mb-4" style="max-width: 420px;">
                        Start by adding your first AI model. Once submitted, we'll review it and make it available on Durrun.
                    </p>
                    <a href="models-add.php" class="btn btn-primary px-4 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px;">
                        <i class="bi bi-plus-lg me-1"></i> Add New Model
                    </a>
                </div>
            <?php else: ?>
                <div class="section-card p-0 overflow-hidden mb-4">
                    <div class="table-responsive">
                        <table class="custom-table mb-0">
                            <thead>
                                <tr style="background: #fafbfc;">
                                    <th style="padding-left: 1.5rem;">Model Name</th>
                                    <th>Model ID</th>
                                    <th>Category</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th style="text-align: right; padding-right: 1.5rem;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding-left: 1.5rem;"><a href="models-add.php" class="item-link">Acme Vision 1.0</a></td>
                                    <td><span class="text-muted" style="font-family: monospace;">acme-vision-1</span></td>
                                    <td>Image</td>
                                    <td>Aug 26, 2025</td>
                                    <td><span class="badge-status badge-under-review">Pending Review</span></td>
                                    <td style="text-align: right; padding-right: 1.5rem;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 1.5rem;"><a href="#" class="item-link">Acme Chat Pro</a></td>
                                    <td><span class="text-muted" style="font-family: monospace;">acme-chat-pro</span></td>
                                    <td>Text</td>
                                    <td>Aug 22, 2025</td>
                                    <td><span class="badge-status badge-live">Live</span></td>
                                    <td style="text-align: right; padding-right: 1.5rem;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 1.5rem;"><a href="#" class="item-link">Acme Embeddings</a></td>
                                    <td><span class="text-muted" style="font-family: monospace;">acme-embed-1</span></td>
                                    <td>Embedding</td>
                                    <td>Aug 18, 2025</td>
                                    <td><span class="badge-status badge-live">Live</span></td>
                                    <td style="text-align: right; padding-right: 1.5rem;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 1.5rem;"><a href="#" class="item-link">Acme Image XL</a></td>
                                    <td><span class="text-muted" style="font-family: monospace;">acme-image-xl</span></td>
                                    <td>Image</td>
                                    <td>Aug 15, 2025</td>
                                    <td><span class="badge-status badge-live">Live</span></td>
                                    <td style="text-align: right; padding-right: 1.5rem;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 1.5rem;"><a href="#" class="item-link">Acme Audio</a></td>
                                    <td><span class="text-muted" style="font-family: monospace;">acme-audio-1</span></td>
                                    <td>Audio</td>
                                    <td>Aug 10, 2025</td>
                                    <td><span class="badge-status badge-changes-requested" style="background-color: #fee2e2; color: #b91c1c;">Rejected</span></td>
                                    <td style="text-align: right; padding-right: 1.5rem;"><button class="btn-actions-menu"><i class="bi bi-three-dots"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center px-4 py-3 border-top bg-white">
                        <span class="text-muted small">Showing 1 to 5 of 5 models</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-light border px-2 text-muted" disabled><i class="bi bi-chevron-left"></i></button>
                            <button class="btn btn-sm btn-outline-primary border px-3 fw-bold" style="color: #0066ff; border-color: #0066ff !important;">1</button>
                            <button class="btn btn-sm btn-light border px-2 text-muted" disabled><i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <footer class="dashboard-footer">
                <div>&copy; 2025 Durrun. All rights reserved.</div>
                <div>Build. Share. Power the AI Future.</div>
            </footer>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
