<?php
$pageTitle = "API Keys - Durrun Partner Portal";
$activePage = "api-keys";
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
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">API Keys</li>
                </ol>
            </nav>

            <!-- Page Header Greeting & Action Button -->
            <div class="welcome-header align-items-center mb-4">
                <div>
                    <h1 class="welcome-title">API Keys</h1>
                    <p class="welcome-subtitle">Create, view, and manage your API keys to access Durrun APIs.</p>
                </div>
                <div>
                    <a href="create-key.php" class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.92rem;">
                        <i class="bi bi-plus-lg"></i>
                        <span>Create New API Key</span>
                    </a>
                </div>
            </div>

            <!-- Top 3 Stat Cards -->
            <div class="row g-3 mb-4">
                <!-- Card 1: Total API Keys -->
                <div class="col-12 col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Keys/API Requests.svg" alt="Total API Keys" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" id="statTotalKeys">3</div>
                            <div class="stat-label">Total API Keys</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Active Keys -->
                <div class="col-12 col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #dcfce7; color: #16a34a;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Keys/Active Keys.svg" alt="Active Keys" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" id="statActiveKeys">2</div>
                            <div class="stat-label">Active Keys</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Revoked Keys -->
                <div class="col-12 col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: #fee2e2; color: #dc2626;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/API Keys/Revoked Keys.svg" alt="Revoked Keys" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value" id="statRevokedKeys">1</div>
                            <div class="stat-label">Revoked Keys</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Section Card -->
            <div class="section-card mb-4 p-0 overflow-hidden">
                <!-- Filter and Search Header -->
                <div class="p-3 border-bottom d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center gap-3">
                    <div class="position-relative flex-grow-1" style="max-width: 400px;">
                        <input type="text" id="keySearchInput" class="form-control profile-input ps-5" placeholder="Search by key name or last used...">
                        <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted" style="left: 16px;"></i>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <select id="keyStatusFilter" class="form-select profile-input" style="width: auto; min-width: 140px;">
                            <option value="all" selected>All Status</option>
                            <option value="active">Active</option>
                            <option value="revoked">Revoked</option>
                        </select>
                    </div>
                </div>

                <!-- API Keys Table -->
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" id="apiKeysTable">
                        <thead style="background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                            <tr style="font-size: 0.82rem; color: #64748b; text-transform: capitalize;">
                                <th class="ps-4 py-3">Key Name</th>
                                <th class="py-3">API Key</th>
                                <th class="py-3">Created On</th>
                                <th class="py-3">Last Used</th>
                                <th class="py-3">Status</th>
                                <th class="text-end pe-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 0.88rem;">
                            <!-- Row 1: Production Key -->
                            <tr data-status="active">
                                <td class="ps-4 py-3 fw-bold text-dark">Production Key</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 font-monospace text-muted" style="font-size: 0.85rem;">
                                        <span>durrun_live_7f9a2d3e4b5c6d7e...</span>
                                        <button type="button" class="btn btn-sm btn-link text-primary p-0" onclick="copySnippet('durrun_live_7f9a2d3e4b5c6d7e8f0a1b2c3d4e5f6a', this)" title="Copy API Key">
                                            <i class="bi bi-copy"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-muted">Aug 10, 2025 11:20 AM</td>
                                <td class="text-muted">Aug 26, 2025 10:14 AM</td>
                                <td>
                                    <span class="badge-status-active">
                                        <span class="status-dot"></span> Active
                                    </span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border-0 text-muted" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px;">
                                            <li><a class="dropdown-item py-1 small" href="javascript:void(0)" onclick="copySnippet('durrun_live_7f9a2d3e4b5c6d7e8f0a1b2c3d4e5f6a', this)"><i class="bi bi-clipboard me-2"></i>Copy Key</a></li>
                                            <li><a class="dropdown-item py-1 small text-danger" href="javascript:void(0)" onclick="revokeKey(this)"><i class="bi bi-slash-circle me-2"></i>Revoke Key</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2: Testing Key -->
                            <tr data-status="active">
                                <td class="ps-4 py-3 fw-bold text-dark">Testing Key</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 font-monospace text-muted" style="font-size: 0.85rem;">
                                        <span>durrun_test_3c2d1e9f8a7b6c5d...</span>
                                        <button type="button" class="btn btn-sm btn-link text-primary p-0" onclick="copySnippet('durrun_test_3c2d1e9f8a7b6c5d4e3f2a1b0c9d8e7f', this)" title="Copy API Key">
                                            <i class="bi bi-copy"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-muted">Aug 05, 2025 02:30 PM</td>
                                <td class="text-muted">Aug 25, 2025 04:50 PM</td>
                                <td>
                                    <span class="badge-status-active">
                                        <span class="status-dot"></span> Active
                                    </span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border-0 text-muted" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px;">
                                            <li><a class="dropdown-item py-1 small" href="javascript:void(0)" onclick="copySnippet('durrun_test_3c2d1e9f8a7b6c5d4e3f2a1b0c9d8e7f', this)"><i class="bi bi-clipboard me-2"></i>Copy Key</a></li>
                                            <li><a class="dropdown-item py-1 small text-danger" href="javascript:void(0)" onclick="revokeKey(this)"><i class="bi bi-slash-circle me-2"></i>Revoke Key</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3: Old Key -->
                            <tr data-status="revoked">
                                <td class="ps-4 py-3 fw-bold text-dark">Old Key</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 font-monospace text-muted" style="font-size: 0.85rem;">
                                        <span>durrun_test_9a8b7c6d5e4f3a2b...</span>
                                        <button type="button" class="btn btn-sm btn-link text-secondary p-0" onclick="copySnippet('durrun_test_9a8b7c6d5e4f3a2b1c0d9e8f7a6b5c4d', this)" title="Copy API Key">
                                            <i class="bi bi-copy"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="text-muted">Jul 20, 2025 09:15 AM</td>
                                <td class="text-muted">Aug 01, 2025 11:05 AM</td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1 rounded-pill" style="font-size: 0.75rem; font-weight: 600;">
                                        <i class="bi bi-slash-circle me-1"></i> Revoked
                                    </span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border-0 text-muted" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px;">
                                            <li><a class="dropdown-item py-1 small text-danger" href="javascript:void(0)" onclick="deleteKeyRow(this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Table Footer -->
                <div class="p-3 border-top d-flex justify-content-between align-items-center text-muted small">
                    <div>Showing 1 to 3 of 3 API keys</div>
                </div>
            </div>

            <!-- Bottom Banner: Keep Your API Keys Secure -->
            <div class="section-card p-4 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4" style="background: #ffffff;">
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px;">
                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Keys/Keep your API Keys secure.svg" alt="" style="width: 36px; height: 36px;">
                    </div>
                    <div>
                        <h3 class="fw-bold text-dark mb-1" style="font-size: 1rem;">Keep Your API Keys Secure</h3>
                        <p class="text-muted mb-0 small">Do not share your API keys publicly. Revoke any keys that are no longer in use.</p>
                    </div>
                </div>
                <div>
                    <a href="https://docs.durrun.com/security" target="_blank" class="btn btn-outline-secondary px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2" style="border-radius: 8px; font-size: 0.9rem; background: #ffffff;">
                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Keys/Learn More.svg" alt="" style="width: 16px; height: 16px;">
                        <span>Learn More</span>
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

    // Helper to copy snippet with feedback
    function copySnippet(text, btn) {
        navigator.clipboard.writeText(text).then(() => {
            const orig = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check2 text-success"></i>';
            setTimeout(() => { btn.innerHTML = orig; }, 1800);
            showGlobalToast('API Key copied to clipboard!');
        });
    }

    // Filter table by status
    document.getElementById('keyStatusFilter').addEventListener('change', function() {
        const filter = this.value;
        const rows = document.querySelectorAll('#apiKeysTable tbody tr');
        rows.forEach(row => {
            const status = row.getAttribute('data-status');
            if (filter === 'all' || status === filter) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Search filter
    document.getElementById('keySearchInput').addEventListener('input', function() {
        const q = this.value.toLowerCase();
        const rows = document.querySelectorAll('#apiKeysTable tbody tr');
        rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(q) ? '' : 'none';
        });
    });

    // Check if a newly generated key was submitted from create-key.php
    document.addEventListener('DOMContentLoaded', function() {
        try {
            const newKeyData = sessionStorage.getItem('newDurrunKey');
            if (newKeyData) {
                const item = JSON.parse(newKeyData);
                sessionStorage.removeItem('newDurrunKey');

                const tbody = document.querySelector('#apiKeysTable tbody');
                if (tbody && item.key) {
                    const newRow = document.createElement('tr');
                    newRow.setAttribute('data-status', 'active');
                    newRow.className = 'table-success-subtle';
                    newRow.style.backgroundColor = '#f0fdf4';
                    newRow.innerHTML = `
                        <td class="ps-4 py-3 fw-bold text-dark">
                            ${item.name || 'New API Key'}
                            <span class="badge bg-success-subtle text-success border border-success-subtle ms-2 px-2 py-0.5" style="font-size: 0.72rem;">New</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2 font-monospace text-muted" style="font-size: 0.85rem;">
                                <span>${item.key.substring(0, 24)}...</span>
                                <button type="button" class="btn btn-sm btn-link text-primary p-0" onclick="copySnippet('${item.key}', this)" title="Copy API Key">
                                    <i class="bi bi-copy"></i>
                                </button>
                            </div>
                        </td>
                        <td class="text-muted">${item.createdOn || 'Just now'}</td>
                        <td class="text-muted">Never</td>
                        <td>
                            <span class="badge-status-active">
                                <span class="status-dot"></span> Active
                            </span>
                        </td>
                        <td class="text-end pe-4">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light border-0 text-muted" type="button" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px;">
                                    <li><a class="dropdown-item py-1 small" href="javascript:void(0)" onclick="copySnippet('${item.key}', this)"><i class="bi bi-clipboard me-2"></i>Copy Key</a></li>
                                    <li><a class="dropdown-item py-1 small text-danger" href="javascript:void(0)" onclick="revokeKey(this)"><i class="bi bi-slash-circle me-2"></i>Revoke Key</a></li>
                                    <li><a class="dropdown-item py-1 small text-danger" href="javascript:void(0)" onclick="deleteKeyRow(this)"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    `;
                    tbody.prepend(newRow);

                    // Update counts
                    const statTotal = document.getElementById('statTotalKeys');
                    const statActive = document.getElementById('statActiveKeys');
                    if (statTotal) statTotal.textContent = parseInt(statTotal.textContent) + 1;
                    if (statActive) statActive.textContent = parseInt(statActive.textContent) + 1;

                    showGlobalToast(`API Key "${item.name}" successfully created!`);
                }
            }
        } catch (e) {
            console.error('Error loading new key', e);
        }
    });

    function copyNewKey(btn) {
        const input = document.getElementById('newGeneratedKeyInput');
        navigator.clipboard.writeText(input.value).then(() => {
            btn.textContent = 'Copied!';
            setTimeout(() => { btn.textContent = 'Copy'; }, 2000);
        });
    }

    function revokeKey(el) {
        const row = el.closest('tr');
        if (!row) return;
        const keyName = row.querySelector('td:first-child')?.textContent?.trim() || 'API Key';

        showConfirmPrompt({
            title: 'Revoke API Key',
            itemName: keyName,
            iconClass: 'bi-slash-circle-fill',
            iconColor: '#f59e0b',
            iconBg: '#fef3c7',
            confirmBtnClass: 'btn-warning text-white',
            confirmText: 'Yes, Revoke Key',
            message: `Are you sure you want to revoke <strong class="text-dark">"${keyName}"</strong>? Any applications or services currently using this API key will immediately lose access and fail authentication.`,
            onConfirm: function() {
                row.setAttribute('data-status', 'revoked');
                const badgeTd = row.querySelectorAll('td')[4];
                if (badgeTd) {
                    badgeTd.innerHTML = `
                        <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1 rounded-pill" style="font-size: 0.75rem; font-weight: 600;">
                            <i class="bi bi-slash-circle me-1"></i> Revoked
                        </span>
                    `;
                }
                const statActive = document.getElementById('statActiveKeys');
                const statRevoked = document.getElementById('statRevokedKeys');
                if (statActive && statRevoked) {
                    statActive.textContent = Math.max(0, parseInt(statActive.textContent) - 1);
                    statRevoked.textContent = parseInt(statRevoked.textContent) + 1;
                }
                showGlobalToast(`API Key "${keyName}" was revoked successfully.`, 'warning');
            }
        });
    }

    function deleteKeyRow(el) {
        const row = el.closest('tr');
        if (!row) return;
        const keyName = row.querySelector('td:first-child')?.textContent?.trim() || 'API Key';

        showConfirmPrompt({
            title: 'Delete API Key',
            itemName: keyName,
            message: `Are you sure you want to delete the record for <strong class="text-dark">"${keyName}"</strong>? This will permanently remove it from your API key list.`,
            confirmText: 'Yes, Delete Key',
            confirmBtnClass: 'btn-danger',
            iconClass: 'bi-trash3-fill',
            onConfirm: function() {
                row.style.transition = 'all 0.3s ease';
                row.style.opacity = '0';
                setTimeout(() => row.remove(), 300);
                showGlobalToast(`API Key "${keyName}" record deleted.`);
            }
        });
    }
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
