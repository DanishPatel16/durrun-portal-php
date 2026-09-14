<?php
$pageTitle = "Models - Durrun Partner Portal";
$activePage = "models";
require_once __DIR__ . '/includes/header.php';

// Check if empty state is requested for demo purposes (?empty=1)
$showEmpty = isset($_GET['empty']) && $_GET['empty'] == '1';
?>

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
        <!-- Common Sidebar Component -->
        <?php require_once __DIR__ . '/includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Header Greeting & Add New Model Button -->
            <div class="welcome-header align-items-center">
                <div>
                    <h1 class="welcome-title">Models</h1>
                    <p class="welcome-subtitle">Manage your AI models. Add new models, update details, and track their status.</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <?php if ($showEmpty): ?>
                        <a href="models.php" class="btn btn-outline-secondary btn-sm" title="View populated state">Show Populated</a>
                    <?php else: ?>
                        <a href="models.php?empty=1" class="btn btn-outline-secondary btn-sm" title="View empty state">Show Empty</a>
                    <?php endif; ?>
                    <a href="models-add.php" class="btn btn-primary d-flex align-items-center gap-2 px-3 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.95rem;">
                        <i class="bi bi-plus-lg"></i> Add New Model
                    </a>
                </div>
            </div>

            <!-- Top 4 Stat Cards Row -->
            <div class="row g-3 mb-4">
                <!-- Card 1: Total Models -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue">
                            <i class="bi bi-box"></i>
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '5'; ?></div>
                            <div class="stat-label">Total Models</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Live -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-green">
                            <i class="bi bi-play-fill" style="font-size: 1.6rem;"></i>
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '3'; ?></div>
                            <div class="stat-label">Live</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Pending Review / Under Review -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-amber">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $showEmpty ? '0' : '1'; ?></div>
                            <div class="stat-label"><?php echo $showEmpty ? 'Under Review' : 'Pending Review'; ?></div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Draft / Rejected -->
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

            <!-- Filter Controls & Search Box -->
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
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2.5">
                        <select class="form-select profile-input" style="height: 42px;">
                            <option selected>All Categories</option>
                            <option value="text">Text</option>
                            <option value="image">Image</option>
                            <option value="embedding">Embedding</option>
                            <option value="audio">Audio</option>
                            <option value="multimodal">Multimodal</option>
                        </select>
                    </div>
                </div>
            </div>

            <?php if ($showEmpty): ?>
                <!-- Empty State (Matches doc_image_2.png) -->
                <div class="section-card py-5 text-center my-4">
                    <div class="d-flex justify-content-center mb-3">
                        <div style="width: 110px; height: 110px; border-radius: 50%; background: #eff6ff; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="bi bi-box" style="font-size: 3rem; color: #0066ff;"></i>
                            <!-- Little sparks decoration -->
                            <span style="position: absolute; left: 15px; top: 35px; width: 10px; height: 3px; background: #0066ff; border-radius: 2px;"></span>
                            <span style="position: absolute; left: 18px; top: 50px; width: 12px; height: 3px; background: #0066ff; border-radius: 2px;"></span>
                        </div>
                    </div>
                    <h3 class="fw-bold text-dark mb-2" style="font-size: 1.5rem;">No models yet</h3>
                    <p class="text-muted mx-auto mb-4" style="max-width: 420px; font-size: 0.95rem;">
                        Start by adding your first AI model. Once submitted, we'll review it and make it available on Durrun.
                    </p>
                    <a href="models-add.php" class="btn btn-primary px-4 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px;">
                        <i class="bi bi-plus-lg me-1"></i> Add New Model
                    </a>
                </div>
            <?php else: ?>
                <!-- Models Table Card (Matches doc_image_4.png) -->
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
                                <!-- Row 1 -->
                                <tr>
                                    <td style="padding-left: 1.5rem;">
                                        <a href="models-add.php" class="item-link">Acme Vision 1.0</a>
                                    </td>
                                    <td>
                                        <span class="text-muted" style="font-family: monospace; font-size: 0.9rem;">acme-vision-1</span>
                                    </td>
                                    <td>Image</td>
                                    <td>Aug 26, 2025</td>
                                    <td>
                                        <span class="badge-status badge-under-review">Pending Review</span>
                                    </td>
                                    <td style="text-align: right; padding-right: 1.5rem;">
                                        <button class="btn-actions-menu" type="button" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <td style="padding-left: 1.5rem;">
                                        <a href="#" class="item-link">Acme Chat Pro</a>
                                    </td>
                                    <td>
                                        <span class="text-muted" style="font-family: monospace; font-size: 0.9rem;">acme-chat-pro</span>
                                    </td>
                                    <td>Text</td>
                                    <td>Aug 22, 2025</td>
                                    <td>
                                        <span class="badge-status badge-live">Live</span>
                                    </td>
                                    <td style="text-align: right; padding-right: 1.5rem;">
                                        <button class="btn-actions-menu" type="button" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr>
                                    <td style="padding-left: 1.5rem;">
                                        <a href="#" class="item-link">Acme Embeddings</a>
                                    </td>
                                    <td>
                                        <span class="text-muted" style="font-family: monospace; font-size: 0.9rem;">acme-embed-1</span>
                                    </td>
                                    <td>Embedding</td>
                                    <td>Aug 18, 2025</td>
                                    <td>
                                        <span class="badge-status badge-live">Live</span>
                                    </td>
                                    <td style="text-align: right; padding-right: 1.5rem;">
                                        <button class="btn-actions-menu" type="button" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Row 4 -->
                                <tr>
                                    <td style="padding-left: 1.5rem;">
                                        <a href="#" class="item-link">Acme Image XL</a>
                                    </td>
                                    <td>
                                        <span class="text-muted" style="font-family: monospace; font-size: 0.9rem;">acme-image-xl</span>
                                    </td>
                                    <td>Image</td>
                                    <td>Aug 15, 2025</td>
                                    <td>
                                        <span class="badge-status badge-live">Live</span>
                                    </td>
                                    <td style="text-align: right; padding-right: 1.5rem;">
                                        <button class="btn-actions-menu" type="button" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr>
                                    <td style="padding-left: 1.5rem;">
                                        <a href="#" class="item-link">Acme Audio</a>
                                    </td>
                                    <td>
                                        <span class="text-muted" style="font-family: monospace; font-size: 0.9rem;">acme-audio-1</span>
                                    </td>
                                    <td>Audio</td>
                                    <td>Aug 10, 2025</td>
                                    <td>
                                        <span class="badge-status badge-changes-requested" style="background-color: #fee2e2; color: #b91c1c;">Rejected</span>
                                    </td>
                                    <td style="text-align: right; padding-right: 1.5rem;">
                                        <button class="btn-actions-menu" type="button" title="More options">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Footer -->
                    <div class="d-flex justify-content-between align-items-center px-4 py-3 border-top" style="background: #ffffff;">
                        <span class="text-muted small">Showing 1 to 5 of 5 models</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-light border px-2 text-muted" disabled style="border-radius: 6px;">
                                <i class="bi bi-chevron-left" style="font-size: 0.75rem;"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary border px-3 fw-bold" style="background: #ffffff; color: #0066ff; border-color: #0066ff !important; border-radius: 6px;">
                                1
                            </button>
                            <button class="btn btn-sm btn-light border px-2 text-muted" disabled style="border-radius: 6px;">
                                <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

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
