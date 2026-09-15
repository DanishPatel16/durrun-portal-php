<?php
$pageTitle = "Create New API Key - Durrun Partner Portal";
$activePage = "create-key";
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
            </a>

            <!-- User Avatar & Dropdown -->
            <div class="dropdown">
                <button class="user-dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-avatar-badge">A</div>
                    <i class="bi bi-chevron-down text-muted" style="font-size: 0.75rem;"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" style="border-radius: 12px; min-width: 200px;">
                    <li class="px-3 py-2 border-bottom">
                        <div class="fw-bold text-dark" style="font-size: 0.9rem;">Acme AI</div>
                        <div class="text-muted" style="font-size: 0.8rem;">partner@acme.ai</div>
                    </li>
                    <li><a class="dropdown-item py-2" href="<?php echo $pathToRoot; ?>view/provider-profile.php"><i class="bi bi-person me-2 text-muted"></i>Profile</a></li>
                    <li><a class="dropdown-item py-2" href="<?php echo $pathToRoot; ?>view/api/overview.php"><i class="bi bi-key me-2 text-muted"></i>API Access</a></li>
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
                    <li class="breadcrumb-item"><a href="<?php echo $pathToRoot; ?>view/api/keys.php" class="text-decoration-none" style="color: #0066ff;">API Keys</a></li>
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Create New Key</li>
                </ol>
            </nav>

            <!-- Page Header Greeting & Actions -->
            <div class="welcome-header align-items-center mb-4">
                <div>
                    <a href="<?php echo $pathToRoot; ?>view/api/keys.php" class="text-decoration-none d-inline-flex align-items-center gap-1.5 text-muted small fw-semibold mb-2 hover-primary">
                        <i class="bi bi-arrow-left"></i>
                        <span>Back to API Keys</span>
                    </a>
                    <h1 class="welcome-title">Create New API Key</h1>
                    <p class="welcome-subtitle">Configure environment, scopes, and expiration rules to generate a secure secret key.</p>
                </div>
                <div class="d-flex align-items-center gap-2" id="headerActionButtons">
                    <a href="<?php echo $pathToRoot; ?>view/api/keys.php" class="btn btn-light border px-3 py-2 fw-semibold text-secondary" style="border-radius: 8px; font-size: 0.92rem;">
                        Cancel
                    </a>
                    <button type="submit" form="createKeyForm" class="btn btn-primary d-inline-flex align-items-center gap-2 px-4 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.92rem;">
                        <i class="bi bi-key-fill"></i>
                        <span>Generate Key</span>
                    </button>
                </div>
            </div>

            <!-- Main Form Container -->
            <div id="formSectionContainer">
                <form id="createKeyForm" onsubmit="handleGenerateKey(event)">
                    <div class="row g-4">
                        <!-- Left Column: Primary Key Settings (8 cols) -->
                        <div class="col-12 col-lg-8">
                            
                            <!-- Card 1: Key Identity & Environment -->
                            <div class="section-card mb-4">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom">
                                    <div class="d-flex align-items-center justify-content-center rounded-2 bg-primary-subtle text-primary" style="width: 32px; height: 32px;">
                                        <i class="bi bi-card-text"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-0" style="font-size: 1.05rem;">Key Details</h5>
                                        <span class="text-muted small">Specify how and where this API key will be used.</span>
                                    </div>
                                </div>

                                <!-- Key Name Input -->
                                <div class="mb-4">
                                    <label class="form-label-custom fw-semibold text-dark" for="keyNameInput">
                                        Key Name <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" 
                                           id="keyNameInput" 
                                           class="form-control profile-input" 
                                           placeholder="e.g. Production Backend, Mobile Client, Staging Webhook" 
                                           required 
                                           oninput="updatePreviewName(this.value)">
                                    <div class="form-text text-muted" style="font-size: 0.8rem;">
                                        Choose a descriptive name so team members can identify which application or server uses this key.
                                    </div>
                                </div>

                                <!-- Environment Selector (Live vs Sandbox) -->
                                <div class="mb-4">
                                    <label class="form-label-custom fw-semibold text-dark d-block mb-2">
                                        Environment Type <span class="text-danger">*</span>
                                    </label>
                                    <div class="row g-3">
                                        <!-- Live Environment Card -->
                                        <div class="col-12 col-sm-6">
                                            <label class="w-100 h-100 p-3 rounded-3 border env-selector-card selected cursor-pointer d-block position-relative" id="envLiveCard" onclick="selectEnv('live')">
                                                <input type="radio" name="envType" value="live" id="envLiveRadio" class="d-none" checked>
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2.5 py-1 rounded-pill" style="font-size: 0.75rem; font-weight: 600;">
                                                        Live / Production
                                                    </span>
                                                    <i class="bi bi-check-circle-fill text-primary fs-5 check-icon"></i>
                                                </div>
                                                <div class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Production Key</div>
                                                <div class="text-muted small mb-2" style="font-size: 0.8rem; line-height: 1.45;">
                                                    Access real models with standard rate limits. Metered usage applies to your active plan.
                                                </div>
                                                <div class="font-monospace text-muted small bg-light p-1.5 rounded border" style="font-size: 0.78rem;">
                                                    Format: <strong class="text-dark">durrun_live_...</strong>
                                                </div>
                                            </label>
                                        </div>

                                        <!-- Sandbox Environment Card -->
                                        <div class="col-12 col-sm-6">
                                            <label class="w-100 h-100 p-3 rounded-3 border env-selector-card cursor-pointer d-block position-relative" id="envTestCard" onclick="selectEnv('test')">
                                                <input type="radio" name="envType" value="test" id="envTestRadio" class="d-none">
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle px-2.5 py-1 rounded-pill" style="font-size: 0.75rem; font-weight: 600;">
                                                        Sandbox / Testing
                                                    </span>
                                                    <i class="bi bi-circle text-muted fs-5 check-icon"></i>
                                                </div>
                                                <div class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Test Key</div>
                                                <div class="text-muted small mb-2" style="font-size: 0.8rem; line-height: 1.45;">
                                                    Isolated test environment with synthetic responses. Safe for CI/CD pipelines and development.
                                                </div>
                                                <div class="font-monospace text-muted small bg-light p-1.5 rounded border" style="font-size: 0.78rem;">
                                                    Format: <strong class="text-dark">durrun_test_...</strong>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Description / Notes -->
                                <div>
                                    <label class="form-label-custom fw-semibold text-dark" for="keyDescriptionInput">
                                        Description & Notes <span class="text-muted fw-normal small">(Optional)</span>
                                    </label>
                                    <textarea id="keyDescriptionInput" 
                                              class="form-control profile-input" 
                                              rows="2" 
                                              placeholder="Optional internal note (e.g. Issued to frontend microservice cluster on AWS us-east-1)."></textarea>
                                </div>
                            </div>

                            <!-- Card 2: Permissions & Scopes -->
                            <div class="section-card mb-4">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom">
                                    <div class="d-flex align-items-center justify-content-center rounded-2 bg-success-subtle text-success" style="width: 32px; height: 32px;">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-0" style="font-size: 1.05rem;">Access Scopes & Permissions</h5>
                                        <span class="text-muted small">Control what actions this API key is permitted to execute.</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check form-check-inline me-4">
                                        <input class="form-check-input" type="radio" name="scopeType" id="scopeFull" value="full" checked onchange="toggleScopeDetails(false)">
                                        <label class="form-check-label fw-semibold text-dark" for="scopeFull">
                                            Full Access (Recommended)
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="scopeType" id="scopeRestricted" value="custom" onchange="toggleScopeDetails(true)">
                                        <label class="form-check-label fw-semibold text-dark" for="scopeRestricted">
                                            Restricted / Custom Scopes
                                        </label>
                                    </div>
                                </div>

                                <!-- Custom Scopes List (Shown only when Restricted is selected) -->
                                <div id="customScopesContainer" class="p-3 bg-light rounded-3 border d-none">
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="scopeInference" checked>
                                                <label class="form-check-label small" for="scopeInference">
                                                    <strong class="d-block text-dark">models:inference</strong>
                                                    <span class="text-muted" style="font-size: 0.78rem;">Submit prompts and execute model predictions</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="scopeModelsRead" checked>
                                                <label class="form-check-label small" for="scopeModelsRead">
                                                    <strong class="d-block text-dark">models:read</strong>
                                                    <span class="text-muted" style="font-size: 0.78rem;">Retrieve model catalogs, architecture details & specs</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="scopeAnalytics" checked>
                                                <label class="form-check-label small" for="scopeAnalytics">
                                                    <strong class="d-block text-dark">analytics:read</strong>
                                                    <span class="text-muted" style="font-size: 0.78rem;">Query token usage, telemetry, and error rates</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="scopeBilling">
                                                <label class="form-check-label small" for="scopeBilling">
                                                    <strong class="d-block text-dark">billing:read</strong>
                                                    <span class="text-muted" style="font-size: 0.78rem;">Access credit consumption and plan invoice records</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Expiration & Security Rules -->
                            <div class="section-card mb-4">
                                <div class="d-flex align-items-center gap-2 mb-3 pb-2 border-bottom">
                                    <div class="d-flex align-items-center justify-content-center rounded-2 bg-warning-subtle text-warning-emphasis" style="width: 32px; height: 32px;">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-dark mb-0" style="font-size: 1.05rem;">Expiration & IP Whitelist</h5>
                                        <span class="text-muted small">Optional zero-trust access controls for enhanced enterprise security.</span>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <!-- Expiration Select -->
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label-custom fw-semibold text-dark" for="keyExpirySelect">Key Expiration</label>
                                        <select id="keyExpirySelect" class="form-select profile-input" onchange="handleExpiryChange(this.value)">
                                            <option value="never" selected>Never expire (Default)</option>
                                            <option value="30">30 days (Recommended for staging)</option>
                                            <option value="60">60 days</option>
                                            <option value="90">90 days (Quarterly rotation)</option>
                                            <option value="custom">Custom expiration date...</option>
                                        </select>
                                    </div>

                                    <!-- Custom Expiry Date (Hidden by default) -->
                                    <div class="col-12 col-sm-6 d-none" id="customExpiryContainer">
                                        <label class="form-label-custom fw-semibold text-dark" for="customExpiryDate">Select Expiration Date</label>
                                        <input type="date" id="customExpiryDate" class="form-control profile-input">
                                    </div>

                                    <!-- IP Whitelist Restriction -->
                                    <div class="col-12">
                                        <label class="form-label-custom fw-semibold text-dark" for="ipWhitelistInput">
                                            IP Address Allowlist <span class="text-muted fw-normal small">(Optional)</span>
                                        </label>
                                        <input type="text" 
                                               id="ipWhitelistInput" 
                                               class="form-control profile-input font-monospace" 
                                               placeholder="e.g. 192.168.1.100, 10.0.0.0/24">
                                        <div class="form-text text-muted" style="font-size: 0.78rem;">
                                            Comma-separated list of IPv4/IPv6 addresses or CIDR blocks. Leave empty to allow requests from any IP.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Right Column: Live Summary & Security Best Practices (4 cols) -->
                        <div class="col-12 col-lg-4">
                            
                            <!-- Key Summary Card -->
                            <div class="section-card mb-4" style="background: #fafbfc;">
                                <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom" style="font-size: 0.95rem;">
                                    <i class="bi bi-file-earmark-check text-primary me-1.5"></i> Configuration Summary
                                </h6>
                                
                                <div class="d-flex justify-content-between py-2 border-bottom small">
                                    <span class="text-muted">Key Name:</span>
                                    <span id="previewKeyName" class="fw-semibold text-dark text-truncate" style="max-width: 150px;">Untitled Key</span>
                                </div>
                                <div class="d-flex justify-content-between py-2 border-bottom small">
                                    <span class="text-muted">Environment:</span>
                                    <span id="previewKeyEnv" class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-0.5 font-monospace">Production</span>
                                </div>
                                <div class="d-flex justify-content-between py-2 border-bottom small">
                                    <span class="text-muted">Access Level:</span>
                                    <span id="previewKeyScope" class="fw-semibold text-dark">Full Access</span>
                                </div>
                                <div class="d-flex justify-content-between py-2 small">
                                    <span class="text-muted">Expiration:</span>
                                    <span id="previewKeyExpiry" class="fw-semibold text-dark">Never</span>
                                </div>
                            </div>

                            <!-- Security Best Practices Card -->
                            <div class="section-card mb-4" style="border-left: 4px solid #0066ff;">
                                <h6 class="fw-bold text-dark mb-2.5" style="font-size: 0.92rem;">
                                    <i class="bi bi-shield-lock-fill text-primary me-1.5"></i> Security Best Practices
                                </h6>
                                <ul class="list-unstyled mb-0 small text-muted d-flex flex-column gap-2" style="font-size: 0.82rem; line-height: 1.45;">
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check2 text-success mt-0.5"></i>
                                        <span>Store secret keys securely in environment variables (e.g. <code>.env</code>) or secrets managers.</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check2 text-success mt-0.5"></i>
                                        <span>Never expose keys in client-side code, frontend bundles, or public Git repositories.</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check2 text-success mt-0.5"></i>
                                        <span>Use Sandbox keys for automated testing and CI/CD pipelines.</span>
                                    </li>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check2 text-success mt-0.5"></i>
                                        <span>If a key is ever compromised, revoke it immediately from the API Keys table.</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Documentation Link Card -->
                            <div class="p-3 rounded-3 border bg-white text-center">
                                <i class="bi bi-book text-primary fs-4 mb-1 d-inline-block"></i>
                                <h6 class="fw-bold text-dark mb-1" style="font-size: 0.9rem;">Need Help Integrating?</h6>
                                <p class="text-muted small mb-2.5" style="font-size: 0.8rem;">
                                    Learn how to authenticate requests with headers and SDKs.
                                </p>
                                <a href="<?php echo $pathToRoot; ?>view/api/overview.php" class="btn btn-sm btn-outline-primary fw-semibold px-3" style="border-radius: 6px; font-size: 0.82rem;">
                                    Read API Docs
                                </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <!-- ========================================================
                 SUCCESS STATE: KEY GENERATED (Revealed after submission)
                 ======================================================== -->
            <div id="keySuccessContainer" class="d-none">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        
                        <!-- Success Card -->
                        <div class="section-card p-4 p-md-5 text-center mb-4 shadow-sm border-0" style="border-radius: 16px;">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 72px; height: 72px; background-color: #dcfce7; color: #16a34a;">
                                <i class="bi bi-check-lg" style="font-size: 2.4rem;"></i>
                            </div>

                            <h3 class="fw-bold text-dark mb-2">API Key Successfully Created!</h3>
                            <p class="text-muted mx-auto mb-4" style="max-width: 520px; font-size: 0.95rem;">
                                Your new secret API key is ready. Make sure to copy it now. For security purposes, <strong class="text-dark">you will never be able to view this key again</strong> after leaving this page.
                            </p>

                            <!-- Secret Key Box -->
                            <div class="p-3 rounded-3 border bg-light text-start mb-3 mx-auto" style="max-width: 580px;">
                                <div class="d-flex justify-content-between align-items-center mb-1.5">
                                    <span class="text-muted small fw-semibold" id="successKeyLabel">Production Key</span>
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-0.5 rounded-pill" style="font-size: 0.72rem;">Active</span>
                                </div>
                                <div class="input-group">
                                    <input type="password" 
                                           id="generatedSecretKey" 
                                           class="form-control font-monospace border-0 bg-white" 
                                           readonly 
                                           style="font-size: 0.95rem; letter-spacing: 1px;">
                                    <button class="btn btn-outline-secondary bg-white border-0" type="button" onclick="toggleKeyVisibility(this)" title="Show / Hide Key">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-primary px-3 fw-semibold d-flex align-items-center gap-1.5" type="button" onclick="copyGeneratedKey(this)" style="background-color: #0066ff;">
                                        <i class="bi bi-clipboard"></i>
                                        <span>Copy Key</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Security Warning Banner -->
                            <div class="alert alert-warning d-flex align-items-center gap-2.5 mx-auto text-start py-2.5 px-3 mb-4" style="max-width: 580px; border-radius: 8px; font-size: 0.85rem;">
                                <i class="bi bi-exclamation-triangle-fill text-warning flex-shrink-0 fs-5"></i>
                                <div>
                                    Treat this secret key as a password. If compromised, revoke it immediately from the keys dashboard.
                                </div>
                            </div>

                            <!-- Quick Usage Code Snippet -->
                            <div class="text-start mx-auto mb-4" style="max-width: 580px;">
                                <label class="form-label-custom small fw-semibold text-dark mb-1.5">
                                    <i class="bi bi-code-slash text-primary me-1"></i> Quick Usage (cURL Header):
                                </label>
                                <div class="p-3 rounded-3 font-monospace small position-relative" style="background: #0f172a; color: #f8fafc; font-size: 0.82rem; overflow-x: auto;">
                                    <span style="color: #94a3b8;">curl -X POST "https://api.durrun.com/v1/models" \</span><br>
                                    <span style="color: #38bdf8;">&nbsp;&nbsp;-H "Authorization: Bearer </span><span id="curlSnippetKey" style="color: #4ade80;">...</span><span style="color: #38bdf8;">" \</span><br>
                                    <span style="color: #38bdf8;">&nbsp;&nbsp;-H "Content-Type: application/json"</span>
                                </div>
                            </div>

                            <!-- Actions Navigation -->
                            <div class="d-flex align-items-center justify-content-center gap-2.5 flex-wrap">
                                <button type="button" class="btn btn-primary px-4 py-2 fw-semibold" onclick="finishAndReturn()" style="background-color: #0066ff; border-radius: 8px;">
                                    <i class="bi bi-check-circle me-1.5"></i> Done & Return to API Keys
                                </button>
                                <button type="button" class="btn btn-light border px-4 py-2 fw-semibold text-secondary" onclick="resetFormForNewKey()" style="border-radius: 8px;">
                                    <i class="bi bi-plus-lg me-1.5"></i> Create Another Key
                                </button>
                            </div>

                        </div>

                    </div>
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

    // Active configuration state
    let selectedEnvironment = 'live';
    let currentGeneratedKey = '';
    let currentKeyName = '';

    // Live preview update
    function updatePreviewName(val) {
        document.getElementById('previewKeyName').textContent = val.trim() || 'Untitled Key';
    }

    // Environment card selection
    function selectEnv(type) {
        selectedEnvironment = type;
        const liveCard = document.getElementById('envLiveCard');
        const testCard = document.getElementById('envTestCard');
        const liveRadio = document.getElementById('envLiveRadio');
        const testRadio = document.getElementById('envTestRadio');
        const previewEnv = document.getElementById('previewKeyEnv');

        if (type === 'live') {
            liveCard.classList.add('selected');
            liveCard.style.borderColor = '#0066ff';
            liveCard.style.backgroundColor = '#eff6ff';
            liveCard.querySelector('.check-icon').className = 'bi bi-check-circle-fill text-primary fs-5 check-icon';

            testCard.classList.remove('selected');
            testCard.style.borderColor = '#e2e8f0';
            testCard.style.backgroundColor = '#ffffff';
            testCard.querySelector('.check-icon').className = 'bi bi-circle text-muted fs-5 check-icon';

            liveRadio.checked = true;
            previewEnv.textContent = 'Production';
            previewEnv.className = 'badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-0.5 font-monospace';
        } else {
            testCard.classList.add('selected');
            testCard.style.borderColor = '#f59e0b';
            testCard.style.backgroundColor = '#fffbeb';
            testCard.querySelector('.check-icon').className = 'bi bi-check-circle-fill text-warning fs-5 check-icon';

            liveCard.classList.remove('selected');
            liveCard.style.borderColor = '#e2e8f0';
            liveCard.style.backgroundColor = '#ffffff';
            liveCard.querySelector('.check-icon').className = 'bi bi-circle text-muted fs-5 check-icon';

            testRadio.checked = true;
            previewEnv.textContent = 'Sandbox';
            previewEnv.className = 'badge bg-warning-subtle text-warning-emphasis border border-warning-subtle px-2 py-0.5 font-monospace';
        }
    }

    // Scope toggle
    function toggleScopeDetails(show) {
        const container = document.getElementById('customScopesContainer');
        const previewScope = document.getElementById('previewKeyScope');
        if (show) {
            container.classList.remove('d-none');
            previewScope.textContent = 'Custom Scopes';
        } else {
            container.classList.add('d-none');
            previewScope.textContent = 'Full Access';
        }
    }

    // Expiry dropdown change
    function handleExpiryChange(val) {
        const customContainer = document.getElementById('customExpiryContainer');
        const previewExpiry = document.getElementById('previewKeyExpiry');
        if (val === 'custom') {
            customContainer.classList.remove('d-none');
            previewExpiry.textContent = 'Custom';
        } else {
            customContainer.classList.add('d-none');
            if (val === 'never') previewExpiry.textContent = 'Never';
            else previewExpiry.textContent = val + ' days';
        }
    }

    // Form submission & Key generation
    function handleGenerateKey(e) {
        e.preventDefault();
        const nameInput = document.getElementById('keyNameInput');
        currentKeyName = nameInput.value.trim();
        if (!currentKeyName) {
            nameInput.focus();
            return;
        }

        // Generate 32 hex characters using browser crypto
        const randomHex = Array.from(crypto.getRandomValues(new Uint8Array(16)))
            .map(b => b.toString(16).padStart(2, '0'))
            .join('');
        
        currentGeneratedKey = `durrun_${selectedEnvironment}_${randomHex}`;

        // Populate Success Card
        document.getElementById('generatedSecretKey').value = currentGeneratedKey;
        document.getElementById('curlSnippetKey').textContent = currentGeneratedKey;
        document.getElementById('successKeyLabel').textContent = `${currentKeyName} (${selectedEnvironment === 'live' ? 'Production' : 'Sandbox'})`;

        // Hide form and show success state
        document.getElementById('formSectionContainer').classList.add('d-none');
        document.getElementById('headerActionButtons').classList.add('d-none');
        document.getElementById('keySuccessContainer').classList.remove('d-none');

        // Store in sessionStorage so returning to keys.php displays the new key row
        const now = new Date();
        const formattedDate = now.toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' }) + ' ' + now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
        
        sessionStorage.setItem('newDurrunKey', JSON.stringify({
            name: currentKeyName,
            key: currentGeneratedKey,
            type: selectedEnvironment,
            createdOn: formattedDate
        }));

        showGlobalToast('API Key generated successfully! Be sure to copy it.');
    }

    // Copy secret key
    function copyGeneratedKey(btn) {
        navigator.clipboard.writeText(currentGeneratedKey).then(() => {
            const orig = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-check-lg"></i> <span>Copied!</span>';
            btn.classList.replace('btn-primary', 'btn-success');
            setTimeout(() => {
                btn.innerHTML = orig;
                btn.classList.replace('btn-success', 'btn-primary');
            }, 2000);
            showGlobalToast('API key copied to clipboard!');
        });
    }

    // Toggle key reveal/hide
    function toggleKeyVisibility(btn) {
        const input = document.getElementById('generatedSecretKey');
        const icon = btn.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.className = 'bi bi-eye-slash';
        } else {
            input.type = 'password';
            icon.className = 'bi bi-eye';
        }
    }

    // Finish and return to keys listing
    function finishAndReturn() {
        window.location.href = 'keys.php';
    }

    // Reset form to generate another key
    function resetFormForNewKey() {
        document.getElementById('createKeyForm').reset();
        selectEnv('live');
        toggleScopeDetails(false);
        handleExpiryChange('never');
        updatePreviewName('');

        document.getElementById('keySuccessContainer').classList.add('d-none');
        document.getElementById('formSectionContainer').classList.remove('d-none');
        document.getElementById('headerActionButtons').classList.remove('d-none');
    }
</script>

<style>
    .cursor-pointer { cursor: pointer; }
    .env-selector-card {
        transition: all 0.2s ease;
    }
    .env-selector-card:hover {
        border-color: #0066ff !important;
    }
    .hover-primary:hover {
        color: #0066ff !important;
    }
</style>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

