<?php
$pageTitle = "API Pricing & Plans - Durrun Partner Portal";
$activePage = "api-pricing";
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
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">API Pricing</li>
                </ol>
            </nav>

            <!-- Page Header Greeting & Action Button -->
            <div class="welcome-header align-items-center mb-4">
                <div>
                    <h1 class="welcome-title">API Pricing & Plans</h1>
                    <p class="welcome-subtitle">Choose the right plan for your API usage. Upgrade or change your plan anytime.</p>
                </div>
                <div>
                    <a href="<?php echo $pathToRoot; ?>view/api/usage.php" class="btn btn-outline-primary bg-white d-inline-flex align-items-center gap-2 px-3 py-2 fw-semibold" style="border-radius: 8px; font-size: 0.92rem; border-color: #cbd5e1 !important; color: #0066ff !important;">
                        <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/View Usage.svg" alt="" style="width: 16px; height: 16px;">
                        <span>View Usage</span>
                    </a>
                </div>
            </div>

            <!-- Current Plan Banner Card -->
            <div class="card border-0 mb-4" style="background-color: #f0fdf4; border: 1px solid #bbf7d0 !important; border-radius: 14px;">
                <div class="card-body p-4">
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
                        <!-- Left: Plan Info -->
                        <div class="d-flex align-items-center gap-3">
                            <div style="width: 56px; height: 56px; min-width: 56px; border-radius: 50%; background-color: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.6rem;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Pro Plan.svg" alt="Current Plan" style="width: 32px; height: 32px;">
                            </div>
                            <div>
                                <div class="text-muted small fw-medium mb-1" style="font-size: 0.82rem;">Current Plan</div>
                                <div class="h4 fw-bold text-dark mb-1">Pro Plan</div>
                                <div class="text-muted small" style="font-size: 0.85rem;">Your plan is active and renews on <span class="fw-semibold text-dark">Sep 10, 2025</span>.</div>
                            </div>
                        </div>

                        <!-- Center: Key Stats -->
                        <div class="d-flex flex-wrap align-items-center gap-4 gap-xl-5 ps-lg-4 border-lg-start" style="border-color: #bbf7d0 !important;">
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 1.35rem; line-height: 1.2;">50,000</div>
                                <div class="text-muted small" style="font-size: 0.82rem;">API calls per month</div>
                            </div>
                            <div class="border-start ps-4" style="border-color: #bbf7d0 !important;">
                                <div class="fw-bold text-dark" style="font-size: 1.35rem; line-height: 1.2;">$49 / month</div>
                                <div class="text-muted small" style="font-size: 0.82rem;">Plan price</div>
                            </div>
                            <div class="border-start ps-4" style="border-color: #bbf7d0 !important;">
                                <div class="fw-bold text-dark" style="font-size: 1.35rem; line-height: 1.2;">Sep 10, 2025</div>
                                <div class="text-muted small" style="font-size: 0.82rem;">Next billing date</div>
                            </div>
                        </div>

                        <!-- Right: Action Button -->
                        <div class="ms-lg-auto">
                            <button type="button" class="btn btn-outline-secondary bg-white text-dark fw-semibold px-4 py-2" data-bs-toggle="modal" data-bs-target="#managePlanModal" style="border-radius: 8px; font-size: 0.9rem; border-color: #cbd5e1 !important;">
                                Manage Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Available Plans Section Header -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
                <div>
                    <h2 class="h5 fw-bold text-dark mb-1">Available Plans</h2>
                    <p class="text-muted mb-0" style="font-size: 0.88rem;">Choose a plan that fits your needs.</p>
                </div>

                <!-- Monthly / Yearly Billing Toggle -->
                <div class="btn-group p-1 bg-white border rounded-pill shadow-sm" role="group" aria-label="Billing cycle toggle" style="border-color: #e2e8f0 !important;">
                    <button type="button" class="btn btn-sm btn-primary rounded-pill px-4 py-1 fw-semibold" id="btnBillingMonthly" onclick="switchBilling('monthly')">
                        Monthly
                    </button>
                    <button type="button" class="btn btn-sm text-secondary rounded-pill px-4 py-1 fw-semibold" id="btnBillingYearly" onclick="switchBilling('yearly')">
                        Yearly
                    </button>
                </div>
            </div>

            <!-- 4 Pricing Plan Cards Grid -->
            <div class="row g-3 mb-4 align-items-stretch">
                <!-- Plan 1: Free Plan -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card h-100 border bg-white p-4 shadow-none" style="border-radius: 14px; border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background-color: #f1f5f9; color: #475569; display: flex; align-items: center; justify-content: center;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Free Plan.svg" alt="Free Plan" style="width: 24px; height: 24px;">
                            </div>
                            <div>
                                <h3 class="h6 fw-bold text-dark mb-0" style="font-size: 1.05rem;">Free Plan</h3>
                                <div class="text-muted" style="font-size: 0.82rem;">For getting started</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-baseline gap-1 my-3">
                            <span class="fw-bold text-dark plan-price" style="font-size: 2.2rem;" data-monthly="$0" data-yearly="$0">$0</span>
                            <span class="text-muted plan-cycle" style="font-size: 0.88rem;">/ month</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1" style="font-size: 0.88rem; color: #334155;">
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span><strong>1,000</strong> API calls per month</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Access to basic models</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Community support</span>
                            </li>
                        </ul>

                        <div class="mt-auto">
                            <button type="button" class="btn w-100 py-2 fw-medium" disabled style="background-color: #f1f5f9; color: #94a3b8; border-radius: 8px; border: none; font-size: 0.9rem;">
                                Current Plan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Plan 2: Starter Plan -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card h-100 border bg-white p-4 shadow-none" style="border-radius: 14px; border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background-color: #eff6ff; color: #2563eb; display: flex; align-items: center; justify-content: center;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Free Plan.svg" alt="Starter Plan" style="width: 24px; height: 24px;">
                            </div>
                            <div>
                                <h3 class="h6 fw-bold text-dark mb-0" style="font-size: 1.05rem;">Starter Plan</h3>
                                <div class="text-muted" style="font-size: 0.82rem;">For small projects</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-baseline gap-1 my-3">
                            <span class="fw-bold text-dark plan-price" style="font-size: 2.2rem;" data-monthly="$19" data-yearly="$15">$19</span>
                            <span class="text-muted plan-cycle" style="font-size: 0.88rem;">/ month</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1" style="font-size: 0.88rem; color: #334155;">
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span><strong>10,000</strong> API calls per month</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Access to all models</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Email support</span>
                            </li>
                        </ul>

                        <div class="mt-auto">
                            <button type="button" class="btn btn-outline-primary w-100 py-2 fw-semibold" onclick="openPlanModal('Starter Plan', '$19')" style="border-radius: 8px; font-size: 0.9rem;">
                                Upgrade Plan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Plan 3: Pro Plan (Featured / Most Popular) -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card h-100 bg-white shadow-none position-relative" style="border-radius: 14px; border: 2px solid #0066ff; overflow: hidden;">
                        <!-- Most Popular Top Ribbon -->
                        <div class="w-100 text-center text-white py-1 fw-semibold" style="background-color: #0066ff; font-size: 0.82rem; letter-spacing: 0.3px;">
                            Most Popular
                        </div>

                        <div class="p-4 d-flex flex-column h-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background-color: #f5f3ff; color: #7c3aed; display: flex; align-items: center; justify-content: center;">
                                    <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Pro Plan.svg" alt="Pro Plan" style="width: 24px; height: 24px;">
                                </div>
                                <div>
                                    <h3 class="h6 fw-bold text-dark mb-0" style="font-size: 1.05rem;">Pro Plan</h3>
                                    <div class="text-muted" style="font-size: 0.82rem;">For growing businesses</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-baseline gap-1 my-3">
                                <span class="fw-bold text-dark plan-price" style="font-size: 2.2rem;" data-monthly="$49" data-yearly="$39">$49</span>
                                <span class="text-muted plan-cycle" style="font-size: 0.88rem;">/ month</span>
                            </div>

                            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1" style="font-size: 0.88rem; color: #334155;">
                                <li class="d-flex align-items-center gap-2">
                                    <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                    <span><strong>50,000</strong> API calls per month</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                    <span>Access to all models</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                    <span>Priority support</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                    <span>Usage analytics</span>
                                </li>
                            </ul>

                            <div class="mt-auto">
                                <button type="button" class="btn btn-primary w-100 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.9rem; border: none;">
                                    Current Plan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plan 4: Business Plan -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card h-100 border bg-white p-4 shadow-none" style="border-radius: 14px; border-color: #e2e8f0 !important;">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background-color: #fffbeb; color: #d97706; display: flex; align-items: center; justify-content: center;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Free Plan.svg" alt="Business Plan" style="width: 24px; height: 24px;">
                            </div>
                            <div>
                                <h3 class="h6 fw-bold text-dark mb-0" style="font-size: 1.05rem;">Business Plan</h3>
                                <div class="text-muted" style="font-size: 0.82rem;">For high volume needs</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-baseline gap-1 my-3">
                            <span class="fw-bold text-dark plan-price" style="font-size: 2.2rem;" data-monthly="$199" data-yearly="$159">$199</span>
                            <span class="text-muted plan-cycle" style="font-size: 0.88rem;">/ month</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1" style="font-size: 0.88rem; color: #334155;">
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span><strong>250,000</strong> API calls per month</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Access to all models</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Dedicated support</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Advanced analytics</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Check.svg" alt="✓" style="width: 14px; height: 14px;">
                                <span>Custom limits</span>
                            </li>
                        </ul>

                        <div class="mt-auto">
                            <button type="button" class="btn btn-outline-primary w-100 py-2 fw-semibold" onclick="openPlanModal('Business Plan', '$199')" style="border-radius: 8px; font-size: 0.9rem;">
                                Upgrade Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add-On Options Section Card -->
            <div class="card border bg-white mb-4 shadow-none" style="border-radius: 14px; border-color: #e2e8f0 !important;">
                <div class="card-body p-4">
                    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 10px; background-color: #eff6ff; color: #0066ff; display: flex; align-items: center; justify-content: center;">
                                <img src="<?php echo $pathToRoot; ?>assets/icons/API Pricing & Plans/Vector.svg" alt="Add-ons" style="width: 24px; height: 24px;">
                            </div>
                            <div>
                                <h3 class="h6 fw-bold text-dark mb-1" style="font-size: 1.05rem;">Add-On Options</h3>
                                <p class="text-muted mb-3" style="font-size: 0.88rem;">Need more API calls? Purchase additional credits anytime.</p>
                                <div>
                                    <div class="fw-bold text-dark" style="font-size: 0.95rem;">Additional API Calls</div>
                                    <div class="text-muted" style="font-size: 0.85rem;">$5 per 10,000 calls</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="button" class="btn btn-outline-primary px-4 py-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#buyCreditsModal" style="border-radius: 8px; font-size: 0.9rem;">
                                Buy Credits
                            </button>
                        </div>
                    </div>
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

<!-- Modal: Buy Credits -->
<div class="modal fade" id="buyCreditsModal" tabindex="-1" aria-labelledby="buyCreditsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow" style="border-radius: 14px;">
            <div class="modal-header border-bottom px-4 py-3">
                <div>
                    <h5 class="modal-title fw-bold text-dark" id="buyCreditsModalLabel" style="font-size: 1.1rem;">Buy Additional API Credits</h5>
                    <p class="text-muted small mb-0">Credits will be immediately added to your balance.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-4">
                <form id="buyCreditsForm" onsubmit="handleBuyCredits(event)">
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark small">Select Credit Pack</label>
                        <div class="d-flex flex-column gap-2">
                            <label class="d-flex align-items-center justify-content-between p-3 border rounded-3 cursor-pointer" style="border-color: #cbd5e1 !important;">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="radio" name="creditPack" value="10000" checked class="form-check-input mt-0">
                                    <span class="fw-semibold text-dark">10,000 API Calls</span>
                                </div>
                                <span class="fw-bold text-primary">$5.00</span>
                            </label>
                            <label class="d-flex align-items-center justify-content-between p-3 border rounded-3 cursor-pointer" style="border-color: #cbd5e1 !important;">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="radio" name="creditPack" value="50000" class="form-check-input mt-0">
                                    <span class="fw-semibold text-dark">50,000 API Calls <span class="badge bg-success-subtle text-success ms-1 small">Popular</span></span>
                                </div>
                                <span class="fw-bold text-primary">$20.00</span>
                            </label>
                            <label class="d-flex align-items-center justify-content-between p-3 border rounded-3 cursor-pointer" style="border-color: #cbd5e1 !important;">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="radio" name="creditPack" value="100000" class="form-check-input mt-0">
                                    <span class="fw-semibold text-dark">100,000 API Calls</span>
                                </div>
                                <span class="fw-bold text-primary">$35.00</span>
                            </label>
                        </div>
                    </div>

                    <div class="p-3 bg-light rounded-3 mb-3">
                        <div class="d-flex justify-content-between small text-muted mb-1">
                            <span>Payment method</span>
                            <span class="text-dark fw-medium"><i class="bi bi-credit-card me-1"></i>Mastercard ending in 4022</span>
                        </div>
                        <div class="d-flex justify-content-between small text-muted">
                            <span>Billing email</span>
                            <span class="text-dark fw-medium">partner@acme.ai</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 pt-2">
                        <button type="button" class="btn btn-light px-3 fw-medium" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary px-4 fw-semibold" style="background-color: #0066ff;">Confirm Purchase</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Upgrade Plan Confirmation -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-labelledby="upgradePlanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow" style="border-radius: 14px;">
            <div class="modal-header border-bottom px-4 py-3">
                <div>
                    <h5 class="modal-title fw-bold text-dark" id="upgradePlanModalLabel" style="font-size: 1.1rem;">Change Subscription Plan</h5>
                    <p class="text-muted small mb-0">Confirm your plan transition.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-4 text-center">
                <div class="mb-3">
                    <div class="mx-auto" style="width: 56px; height: 56px; border-radius: 50%; background-color: #eff6ff; color: #0066ff; display: flex; align-items: center; justify-content: center; font-size: 1.6rem;">
                        <i class="bi bi-arrow-up-circle"></i>
                    </div>
                </div>
                <h5 class="fw-bold text-dark" id="modalPlanName">Starter Plan</h5>
                <p class="text-muted" style="font-size: 0.9rem;">
                    You are upgrading your subscription to <strong id="modalPlanPrice" class="text-dark">$19/month</strong>. The change will take effect immediately and will be prorated.
                </p>
                <div class="d-flex justify-content-center gap-2 pt-2">
                    <button type="button" class="btn btn-light px-4 fw-medium" data-bs-dismiss="modal">Keep Current Plan</button>
                    <button type="button" class="btn btn-primary px-4 fw-semibold" style="background-color: #0066ff;" onclick="confirmUpgrade()">Confirm Upgrade</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Manage Plan -->
<div class="modal fade" id="managePlanModal" tabindex="-1" aria-labelledby="managePlanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow" style="border-radius: 14px;">
            <div class="modal-header border-bottom px-4 py-3">
                <h5 class="modal-title fw-bold text-dark" id="managePlanModalLabel" style="font-size: 1.1rem;">Manage Subscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-4">
                <div class="mb-4">
                    <div class="fw-bold text-dark mb-1">Pro Plan ($49 / month)</div>
                    <div class="text-muted small">Renews automatically on Sep 10, 2025 using Mastercard •••• 4022.</div>
                </div>
                <div class="d-flex flex-column gap-2 mb-4">
                    <button type="button" class="btn btn-outline-secondary text-start py-2 px-3 fw-medium d-flex justify-content-between align-items-center" style="border-radius: 8px;">
                        <span><i class="bi bi-credit-card me-2 text-primary"></i>Update Payment Method</span>
                        <i class="bi bi-chevron-right text-muted small"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary text-start py-2 px-3 fw-medium d-flex justify-content-between align-items-center" style="border-radius: 8px;">
                        <span><i class="bi bi-receipt me-2 text-primary"></i>View Invoices & Billing History</span>
                        <i class="bi bi-chevron-right text-muted small"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger text-start py-2 px-3 fw-medium d-flex justify-content-between align-items-center" style="border-radius: 8px;" onclick="confirmCancelSubscription()">
                        <span><i class="bi bi-x-circle me-2"></i>Cancel Subscription</span>
                        <i class="bi bi-chevron-right small"></i>
                    </button>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-light px-4 fw-medium" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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

    // Toggle billing cycle
    function switchBilling(cycle) {
        const btnMonthly = document.getElementById('btnBillingMonthly');
        const btnYearly = document.getElementById('btnBillingYearly');
        const priceElements = document.querySelectorAll('.plan-price');
        const cycleElements = document.querySelectorAll('.plan-cycle');

        if (cycle === 'yearly') {
            btnMonthly.classList.remove('btn-primary');
            btnMonthly.classList.add('text-secondary');
            btnYearly.classList.remove('text-secondary');
            btnYearly.classList.add('btn-primary');

            priceElements.forEach(el => {
                el.textContent = el.getAttribute('data-yearly');
            });
            cycleElements.forEach(el => {
                el.textContent = '/ month, billed yearly';
            });
        } else {
            btnYearly.classList.remove('btn-primary');
            btnYearly.classList.add('text-secondary');
            btnMonthly.classList.remove('text-secondary');
            btnMonthly.classList.add('btn-primary');

            priceElements.forEach(el => {
                el.textContent = el.getAttribute('data-monthly');
            });
            cycleElements.forEach(el => {
                el.textContent = '/ month';
            });
        }
    }

    // Upgrade Plan Modal trigger
    function openPlanModal(planName, price) {
        document.getElementById('modalPlanName').textContent = planName;
        document.getElementById('modalPlanPrice').textContent = price + '/month';
        const modal = new bootstrap.Modal(document.getElementById('upgradePlanModal'));
        modal.show();
    }

    function confirmUpgrade() {
        const modalEl = document.getElementById('upgradePlanModal');
        const modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) modal.hide();
        showGlobalToast('Plan updated successfully! Your account features have been unlocked.');
    }

    function handleBuyCredits(e) {
        e.preventDefault();
        const selected = document.querySelector('input[name="creditPack"]:checked');
        const credits = selected ? parseInt(selected.value).toLocaleString() : '10,000';
        const modalEl = document.getElementById('buyCreditsModal');
        const modal = bootstrap.Modal.getInstance(modalEl);
        if (modal) modal.hide();
        showGlobalToast('Successfully purchased ' + credits + ' additional API credits!');
    }

    function confirmCancelSubscription() {
        showConfirmPrompt({
            title: 'Cancel Subscription',
            itemName: 'Pro Plan',
            message: 'Are you sure you want to cancel your <strong>Pro Plan</strong> subscription? At the end of your billing cycle, your limits will revert to the Free tier.',
            confirmText: 'Yes, Cancel Subscription',
            confirmBtnClass: 'btn-danger',
            iconClass: 'bi-x-circle-fill',
            onConfirm: function() {
                showGlobalToast('Subscription cancellation request logged successfully.', 'warning');
            }
        });
    }
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
