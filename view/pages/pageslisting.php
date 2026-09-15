<?php
$pageTitle = "Models & Pages - Durrun Partner Portal";
$activePage = "pageslisting";
require_once __DIR__ . '/../../includes/header.php';

// Check if empty state is requested for demo purposes (?empty=1)
$showEmpty = isset($_GET['empty']) && $_GET['empty'] == '1';

// Comprehensive dataset for AI Models
$modelsList = [
    [
        'id' => 'acme-vision-1',
        'name' => 'Acme Vision 1.0',
        'category' => 'Image',
        'created_on' => 'Aug 26, 2025',
        'last_updated' => 'Aug 26, 2025',
        'status' => 'Pending Review',
        'status_type' => 'pending',
        'status_class' => 'badge-under-review',
        'badge_icon' => 'bi-clock-history',
        'short_desc' => 'Next-generation vision-language model for visual analysis, OCR, and multimodal reasoning.',
        'full_desc' => 'Acme Vision 1.0 delivers enterprise-grade visual intelligence. Built on a hybrid ViT architecture, it supports image grounding, optical character recognition (OCR), visual question answering, and structured scene analysis with ultra-low latency.',
        'capabilities' => ['Image Understanding', 'Visual QA', 'Multimodal', 'Object Detection', 'OCR'],
        'architecture' => 'Diffusion & Vision Transformer (ViT-H)',
        'context_window' => '128,000 tokens',
        'max_output' => '4,096 tokens',
        'pricing_input' => '$0.003 / 1k tokens',
        'pricing_output' => '$0.015 / image',
        'endpoint' => 'https://api.durrun.com/v1/models/acme-vision-1',
        'method' => 'POST',
        'provider' => 'Acme AI',
        'provider_icon' => $pathToRoot . 'assets/icons/Provider Profile/Acmeai.svg',
        'rejection_note' => null
    ],
    [
        'id' => 'acme-chat-pro',
        'name' => 'Acme Chat Pro',
        'category' => 'Text',
        'created_on' => 'Aug 22, 2025',
        'last_updated' => 'Aug 24, 2025',
        'status' => 'Live',
        'status_type' => 'live',
        'status_class' => 'badge-live',
        'badge_icon' => 'bi-check-circle-fill',
        'short_desc' => 'Conversational LLM optimized for complex dialog, creative writing, and programming.',
        'full_desc' => 'Trained on high-quality synthetic datasets and verified human feedback, Acme Chat Pro excels at natural conversational flows, multi-turn reasoning, and programming assistant capabilities across 40+ programming languages.',
        'capabilities' => ['Conversational AI', 'Code Generation', 'Summarization', 'Roleplay', 'Reasoning'],
        'architecture' => 'Decoder-only Transformer (70B parameters)',
        'context_window' => '64,000 tokens',
        'max_output' => '8,192 tokens',
        'pricing_input' => '$0.0015 / 1k tokens',
        'pricing_output' => '$0.002 / 1k tokens',
        'endpoint' => 'https://api.durrun.com/v1/chat/completions',
        'method' => 'POST',
        'provider' => 'Acme AI',
        'provider_icon' => $pathToRoot . 'assets/icons/Provider Profile/Acmeai.svg',
        'rejection_note' => null
    ],
    [
        'id' => 'acme-embed-1',
        'name' => 'Acme Embeddings',
        'category' => 'Embedding',
        'created_on' => 'Aug 18, 2025',
        'last_updated' => 'Aug 20, 2025',
        'status' => 'Live',
        'status_type' => 'live',
        'status_class' => 'badge-live',
        'badge_icon' => 'bi-check-circle-fill',
        'short_desc' => 'Ultra-dense text vector embeddings for semantic search, clustering, and RAG pipelines.',
        'full_desc' => 'High-density representation vectors mapped to a 1536-dimensional hyper-space. Optimized for ultra-low cosine search latency in modern vector databases including Pinecone, Milvus, Qdrant, and pgvector.',
        'capabilities' => ['Semantic Search', 'RAG Retrieval', 'Vector Clustering', 'Classification'],
        'architecture' => 'Bi-Encoder Transformer (1536 dims)',
        'context_window' => '8,192 tokens',
        'max_output' => '1,536 dimensions',
        'pricing_input' => '$0.0001 / 1k tokens',
        'pricing_output' => 'Free (Included)',
        'endpoint' => 'https://api.durrun.com/v1/embeddings',
        'method' => 'POST',
        'provider' => 'Acme AI',
        'provider_icon' => $pathToRoot . 'assets/icons/Provider Profile/Acmeai.svg',
        'rejection_note' => null
    ],
    [
        'id' => 'acme-image-xl',
        'name' => 'Acme Image XL',
        'category' => 'Image',
        'created_on' => 'Aug 15, 2025',
        'last_updated' => 'Aug 19, 2025',
        'status' => 'Live',
        'status_type' => 'live',
        'status_class' => 'badge-live',
        'badge_icon' => 'bi-check-circle-fill',
        'short_desc' => 'Photorealistic text-to-image synthesis supporting resolutions up to 2048x2048.',
        'full_desc' => 'Next-gen generative image synthesis pipeline utilizing cascaded latent diffusion models. Delivers sharp micro-details, realistic lighting, fine typographic adherence, and architectural symmetry.',
        'capabilities' => ['Text-to-Image', 'Inpainting', 'Style Transfer', 'High-Res Upscaling'],
        'architecture' => 'Cascaded Latent Diffusion (SDXL-based)',
        'context_window' => '1,024 prompt tokens',
        'max_output' => '2048 x 2048 px image',
        'pricing_input' => '$0.025 / image generation',
        'pricing_output' => 'N/A',
        'endpoint' => 'https://api.durrun.com/v1/images/generations',
        'method' => 'POST',
        'provider' => 'Acme AI',
        'provider_icon' => $pathToRoot . 'assets/icons/Provider Profile/Acmeai.svg',
        'rejection_note' => null
    ],
    [
        'id' => 'acme-audio-1',
        'name' => 'Acme Audio',
        'category' => 'Audio',
        'created_on' => 'Aug 10, 2025',
        'last_updated' => 'Aug 12, 2025',
        'status' => 'Rejected',
        'status_type' => 'rejected',
        'status_class' => 'badge-changes-requested',
        'badge_icon' => 'bi-x-circle-fill',
        'short_desc' => 'Neural audio processing and mastering engine for voice synthesis and audio restoration.',
        'full_desc' => 'High-fidelity audio generation and mastering API that converts raw audio inputs into broadcast-standard 48kHz masters with dynamic range expansion and vocal enhancement.',
        'capabilities' => ['Audio Mastering', 'Stem Separation', 'Noise Reduction', 'Voice Synthesis'],
        'architecture' => 'WaveNet / Diffusion Audio Engine',
        'context_window' => '5-minute audio sample',
        'max_output' => 'Stereo WAV 48kHz',
        'pricing_input' => '$0.05 / minute processed',
        'pricing_output' => 'N/A',
        'endpoint' => 'https://api.musicgpt.com/api/public/v1/byid',
        'method' => 'GET',
        'provider' => 'Acme AI',
        'provider_icon' => $pathToRoot . 'assets/icons/Provider Profile/Acmeai.svg',
        'rejection_note' => 'Incomplete documentation on audio sample rate normalization. Please update the query parameters schema and resubmit.'
    ]
];

// Calculate live stat totals
$totalModelsCount = $showEmpty ? 0 : count($modelsList);
$liveModelsCount = $showEmpty ? 0 : count(array_filter($modelsList, fn($m) => $m['status'] === 'Live'));
$reviewModelsCount = $showEmpty ? 0 : count(array_filter($modelsList, fn($m) => $m['status'] === 'Pending Review'));
$rejectedModelsCount = $showEmpty ? 0 : count(array_filter($modelsList, fn($m) => $m['status'] === 'Rejected'));
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
            <div class="nav-search-box d-none d-md-block" style="width: 240px;">
                <input type="text" class="nav-search-input" placeholder="Search...">
                <i class="bi bi-search" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.85rem;"></i>
            </div>

            <a href="#" class="nav-action-link"><i class="bi bi-headset fs-5"></i></a>
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

    <!-- Main Dashboard Layout -->
    <div class="dashboard-layout">
        <!-- Common Sidebar Component -->
        <?php require_once __DIR__ . '/../../includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Header Greeting & Add Button -->
            <div class="welcome-header align-items-center">
                <div>
                    <h1 class="welcome-title">Models</h1>
                    <p class="welcome-subtitle">Manage your AI models. Add new models, view specifications, and track review status.</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <?php if ($showEmpty): ?>
                        <a href="pageslisting.php" class="btn btn-outline-secondary btn-sm">Show Populated</a>
                    <?php else: ?>
                        <a href="pageslisting.php?empty=1" class="btn btn-outline-secondary btn-sm">Show Empty</a>
                    <?php endif; ?>
                    <a href="addpages.php" class="btn btn-primary d-flex align-items-center gap-2 px-3 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.95rem;">
                        <i class="bi bi-plus-lg"></i> Add New Model
                    </a>
                </div>
            </div>

            <!-- Top 4 Stat Cards Row -->
            <div class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-blue">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Models/Total Models.svg" alt="Total Models" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $totalModelsCount; ?></div>
                            <div class="stat-label">Total Models</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-green">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Models/Live.svg" alt="Live" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $liveModelsCount; ?></div>
                            <div class="stat-label">Live</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper stat-icon-amber">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Models/Under Review.svg" alt="Under Review" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $reviewModelsCount; ?></div>
                            <div class="stat-label"><?php echo $showEmpty ? 'Under Review' : 'Pending Review'; ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon-wrapper" style="background-color: <?php echo $showEmpty ? '#f3e8ff' : '#fee2e2'; ?>; color: <?php echo $showEmpty ? '#9333ea' : '#dc2626'; ?>;">
                            <img src="<?php echo $pathToRoot; ?>assets/icons/Models/Draft.svg" alt="Draft" class="stat-icon-svg">
                        </div>
                        <div class="stat-body">
                            <div class="stat-value"><?php echo $rejectedModelsCount; ?></div>
                            <div class="stat-label"><?php echo $showEmpty ? 'Draft' : 'Rejected'; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Controls & Search Box -->
            <div class="section-card p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="input-icon-group">
                            <i class="bi bi-search input-icon-left"></i>
                            <input type="text" id="modelSearchInput" class="form-control" placeholder="Search models by name or ID..." style="border-radius: 8px; height: 42px;">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <select id="modelStatusFilter" class="form-select profile-input" style="height: 42px;">
                            <option value="all" selected>All Status</option>
                            <option value="live">Live</option>
                            <option value="pending">Pending Review</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <!-- Categories Filter (Commented out) -->
                    <!--
                    <div class="col-6 col-md-3 col-lg-2.5">
                        <select id="modelCategoryFilter" class="form-select profile-input" style="height: 42px;">
                            <option value="all" selected>All Categories</option>
                            <option value="text">Text</option>
                            <option value="image">Image</option>
                            <option value="embedding">Embedding</option>
                            <option value="audio">Audio</option>
                        </select>
                    </div>
                    -->
                </div>
            </div>

            <?php if ($showEmpty): ?>
                <!-- Empty State -->
                <div class="section-card py-5 text-center my-4">
                    <div class="d-flex justify-content-center mb-3">
                        <div style="width: 110px; height: 110px; border-radius: 50%; background: #eff6ff; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="bi bi-box" style="font-size: 3rem; color: #0066ff;"></i>
                        </div>
                    </div>
                    <h3 class="fw-bold text-dark mb-2" style="font-size: 1.5rem;">No models yet</h3>
                    <p class="text-muted mx-auto mb-4" style="max-width: 420px; font-size: 0.95rem;">
                        Start by adding your first AI model. Once submitted, we'll review it and make it available on Durrun.
                    </p>
                    <a href="addpages.php" class="btn btn-primary px-4 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px;">
                        <i class="bi bi-plus-lg me-1"></i> Add New Model
                    </a>
                </div>
            <?php else: ?>
                <!-- Models Table Card -->
                <div class="section-card p-0 overflow-hidden mb-4">
                    <div class="table-responsive">
                        <table class="custom-table mb-0" id="modelsTable">
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
                                <?php foreach ($modelsList as $m): ?>
                                    <tr class="model-row" 
                                        data-name="<?php echo htmlspecialchars(strtolower($m['name'])); ?>" 
                                        data-id="<?php echo htmlspecialchars(strtolower($m['id'])); ?>" 
                                        data-category="<?php echo htmlspecialchars(strtolower($m['category'])); ?>" 
                                        data-status="<?php echo htmlspecialchars(strtolower($m['status_type'])); ?>">
                                        
                                        <!-- Model Name & Subtext -->
                                        <td style="padding-left: 1.5rem;">
                                            <div class="d-flex align-items-center gap-2.5">
                                                <div class="d-flex align-items-center justify-content-center rounded-2 bg-light border flex-shrink-0" style="width: 36px; height: 36px;">
                                                    <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Models.svg" alt="Model" style="width: 20px; height: 20px;">
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" 
                                                       class="item-link fw-bold text-dark text-decoration-none" 
                                                       onclick='openViewModelModal(<?php echo htmlspecialchars(json_encode($m), ENT_QUOTES, "UTF-8"); ?>)'>
                                                        <?php echo htmlspecialchars($m['name']); ?>
                                                    </a>
                                                    <div class="text-muted text-truncate" style="font-size: 0.78rem; max-width: 230px;" title="<?php echo htmlspecialchars($m['short_desc']); ?>">
                                                        <?php echo htmlspecialchars($m['short_desc']); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Model ID -->
                                        <td>
                                            <span class="font-monospace text-muted small bg-light px-2 py-1 rounded border">
                                                <?php echo htmlspecialchars($m['id']); ?>
                                            </span>
                                        </td>

                                        <!-- Category -->
                                        <td>
                                            <span class="badge bg-light text-secondary border px-2.5 py-1" style="font-weight: 600; font-size: 0.78rem;">
                                                <?php echo htmlspecialchars($m['category']); ?>
                                            </span>
                                        </td>

                                        <!-- Created On -->
                                        <td>
                                            <span class="text-muted small"><?php echo htmlspecialchars($m['created_on']); ?></span>
                                        </td>

                                        <!-- Status Badge -->
                                        <td>
                                            <?php if ($m['status'] === 'Rejected'): ?>
                                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1 rounded-pill" style="font-size: 0.75rem; font-weight: 600;">
                                                    <i class="bi bi-x-circle-fill me-1"></i> Rejected
                                                </span>
                                            <?php elseif ($m['status'] === 'Pending Review'): ?>
                                                <span class="badge-status badge-under-review">
                                                    <i class="bi bi-clock-history me-1"></i> Pending Review
                                                </span>
                                            <?php else: ?>
                                                <span class="badge-status badge-live">
                                                    <i class="bi bi-check-circle-fill me-1"></i> Live
                                                </span>
                                            <?php endif; ?>
                                        </td>

                                        <!-- Actions Column: Direct View Button + Three Dots Dropdown -->
                                        <td style="text-align: right; padding-right: 1.5rem;">
                                            <div class="d-inline-flex align-items-center gap-1.5">
                                                <!-- Primary View Button -->
                                                <button type="button" 
                                                        class="btn btn-sm btn-outline-primary d-inline-flex align-items-center gap-1 px-2.5 py-1 fw-semibold btn-view-model"
                                                        style="font-size: 0.8rem; border-radius: 6px;"
                                                        title="View Model Details"
                                                        onclick='openViewModelModal(<?php echo htmlspecialchars(json_encode($m), ENT_QUOTES, "UTF-8"); ?>)'>
                                                    <i class="bi bi-eye"></i>
                                                    <span>View</span>
                                                </button>

                                                <!-- Dropdown Menu -->
                                                <div class="dropdown">
                                                    <button class="btn-actions-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="More options">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" style="border-radius: 8px; font-size: 0.85rem; min-width: 150px;">
                                                        <li>
                                                            <a class="dropdown-item py-1.5" href="javascript:void(0)" onclick='openViewModelModal(<?php echo htmlspecialchars(json_encode($m), ENT_QUOTES, "UTF-8"); ?>)'>
                                                                <i class="bi bi-eye me-2 text-primary"></i>View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item py-1.5" href="addpages.php?model=<?php echo urlencode($m['id']); ?>">
                                                                <i class="bi bi-pencil me-2 text-muted"></i>Edit Model
                                                            </a>
                                                        </li>
                                                        <li><hr class="dropdown-divider my-1"></li>
                                                        <li>
                                                            <a class="dropdown-item py-1.5 text-danger" href="javascript:void(0)" onclick="handleDeleteModel('<?php echo htmlspecialchars($m['name']); ?>', this)">
                                                                <i class="bi bi-trash me-2"></i>Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                
                                <!-- No Search Results Row (Hidden by default) -->
                                <tr id="noResultsRow" style="display: none;">
                                    <td colspan="6" class="text-center py-5">
                                        <div class="text-muted mb-2"><i class="bi bi-search" style="font-size: 2rem;"></i></div>
                                        <h6 class="fw-bold text-dark">No models found</h6>
                                        <p class="text-muted small mb-0">Try changing your search keyword or filter settings.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination / Counter -->
                    <div class="d-flex justify-content-between align-items-center px-4 py-3 border-top bg-white">
                        <span class="text-muted small" id="modelsCountLabel">Showing 1 to <?php echo count($modelsList); ?> of <?php echo count($modelsList); ?> models</span>
                        <div class="d-flex gap-1">
                            <button class="btn btn-sm btn-light border px-2 text-muted" disabled><i class="bi bi-chevron-left"></i></button>
                            <button class="btn btn-sm btn-outline-primary border px-3 fw-bold" style="color: #0066ff; border-color: #0066ff !important;">1</button>
                            <button class="btn btn-sm btn-light border px-2 text-muted" disabled><i class="bi bi-chevron-right"></i></button>
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

<!-- ========================================================
     POPUP MODAL: VIEW MODEL DETAILS
     ======================================================== -->
<div class="modal fade" id="viewModelModal" tabindex="-1" aria-labelledby="viewModelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
            
            <!-- Modal Header -->
            <div class="modal-header px-4 py-3 bg-light border-bottom align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center justify-content-center rounded-3 bg-white border shadow-sm flex-shrink-0" style="width: 46px; height: 46px;">
                        <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Models.svg" alt="Model Icon" style="width: 26px; height: 26px;">
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <h5 class="modal-title fw-bold text-dark mb-0" id="viewModelModalLabel">Model Name</h5>
                            <span id="modalStatusBadge" class="badge-status">Status</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 mt-1">
                            <span class="text-muted small">Model ID:</span>
                            <span id="modalModelId" class="font-monospace text-dark small bg-white px-2 py-0.5 rounded border">model-id</span>
                            <button type="button" class="btn btn-sm btn-link p-0 text-muted" onclick="copyModelId()" title="Copy Model ID">
                                <i class="bi bi-copy" style="font-size: 0.82rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4">
                
                <!-- Rejection Alert Box (Shown only if rejected) -->
                <div id="modalRejectionAlert" class="alert alert-danger d-none d-flex align-items-start gap-2.5 mb-4 border-danger-subtle" style="border-radius: 10px; font-size: 0.9rem;">
                    <i class="bi bi-exclamation-octagon-fill fs-5 text-danger flex-shrink-0 mt-0.5"></i>
                    <div>
                        <strong class="d-block text-danger mb-1">Review Feedback / Reason for Rejection:</strong>
                        <span id="modalRejectionNote" class="text-dark">Please review the submission requirements and resubmit.</span>
                    </div>
                </div>

                <!-- Section: Overview & Description -->
                <div class="mb-4">
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 0.95rem;">
                        <i class="bi bi-info-circle text-primary me-1.5"></i> Model Overview
                    </h6>
                    <p id="modalShortDesc" class="text-dark fw-semibold small mb-1.5"></p>
                    <p id="modalFullDesc" class="text-muted small mb-3" style="line-height: 1.55;"></p>
                    
                    <!-- Capabilities Badges -->
                    <div class="d-flex align-items-center gap-2 flex-wrap pt-1">
                        <span class="text-muted small fw-semibold">Capabilities:</span>
                        <div id="modalCapabilities" class="d-flex flex-wrap gap-1.5">
                            <!-- Injected dynamically via JS -->
                        </div>
                    </div>
                </div>

                <!-- Section: Technical Specifications (4 Cards) -->
                <div class="mb-4">
                    <h6 class="fw-bold text-dark mb-2.5" style="font-size: 0.95rem;">
                        <i class="bi bi-gear-wide-connected text-primary me-1.5"></i> Technical Specifications
                    </h6>
                    <div class="row g-3">
                        <!-- Category -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="text-muted small mb-1"><i class="bi bi-tags me-1"></i> Category</div>
                                <div id="modalCategory" class="fw-bold text-dark">Text</div>
                            </div>
                        </div>
                        <!-- Architecture -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="text-muted small mb-1"><i class="bi bi-cpu me-1"></i> Architecture</div>
                                <div id="modalArchitecture" class="fw-bold text-dark text-truncate" title="">Transformer</div>
                            </div>
                        </div>
                        <!-- Context Window -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="text-muted small mb-1"><i class="bi bi-arrows-expand me-1"></i> Context Window</div>
                                <div id="modalContextWindow" class="fw-bold text-dark">128k tokens</div>
                            </div>
                        </div>
                        <!-- Max Output Tokens -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="text-muted small mb-1"><i class="bi bi-box-arrow-up-right me-1"></i> Max Output</div>
                                <div id="modalMaxOutput" class="fw-bold text-dark">4,096 tokens</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section: API Endpoint Box -->
                <div class="section-card p-3 mb-4 border bg-white rounded-3 shadow-none">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="fw-bold text-dark small">
                            <i class="bi bi-code-slash text-primary me-1"></i> API Base Endpoint
                        </span>
                        <span id="modalHttpMethod" class="badge bg-primary-subtle text-primary border border-primary-subtle font-monospace px-2 py-0.5">POST</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between p-2 rounded bg-light border">
                        <span id="modalEndpointUrl" class="font-monospace text-muted small text-break">https://api.durrun.com/v1/models</span>
                        <button type="button" class="btn btn-sm btn-link text-primary p-0 ms-2 flex-shrink-0" onclick="copyEndpointUrl()" title="Copy Endpoint">
                            <i class="bi bi-copy"></i>
                        </button>
                    </div>
                </div>

                <!-- Section: Pricing & Timeline (2 Cards) -->
                <div class="row g-3">
                    <!-- Pricing Card -->
                    <div class="col-12 col-md-6">
                        <div class="p-3 rounded-3 border bg-white h-100">
                            <h6 class="fw-bold text-dark mb-2.5" style="font-size: 0.88rem;">
                                <i class="bi bi-currency-dollar text-success me-1"></i> Pricing Structure
                            </h6>
                            <div class="d-flex justify-content-between py-1.5 border-bottom small">
                                <span class="text-muted">Input / Prompt:</span>
                                <span id="modalPricingInput" class="fw-semibold text-dark">$0.0015 / 1k</span>
                            </div>
                            <div class="d-flex justify-content-between py-1.5 small">
                                <span class="text-muted">Output / Generation:</span>
                                <span id="modalPricingOutput" class="fw-semibold text-dark">$0.002 / 1k</span>
                            </div>
                        </div>
                    </div>

                    <!-- Submission Timeline Card -->
                    <div class="col-12 col-md-6">
                        <div class="p-3 rounded-3 border bg-white h-100">
                            <h6 class="fw-bold text-dark mb-2.5" style="font-size: 0.88rem;">
                                <i class="bi bi-calendar-check text-info me-1"></i> Submission Timeline
                            </h6>
                            <div class="d-flex justify-content-between py-1.5 border-bottom small">
                                <span class="text-muted">Submitted On:</span>
                                <span id="modalCreatedOn" class="fw-semibold text-dark">Aug 26, 2025</span>
                            </div>
                            <div class="d-flex justify-content-between py-1.5 small">
                                <span class="text-muted">Last Updated:</span>
                                <span id="modalLastUpdated" class="fw-semibold text-dark">Aug 26, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal Footer -->
            <div class="modal-footer px-4 py-3 bg-light border-top justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <img src="<?php echo $pathToRoot; ?>assets/icons/Provider Profile/Acmeai.svg" alt="Acme AI" style="width: 22px; height: 22px;">
                    <span class="text-muted small">Provider: <strong class="text-dark">Acme AI</strong></span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-light border px-3 py-1.5 fw-semibold small text-secondary" data-bs-dismiss="modal" style="border-radius: 8px;">Close</button>
                    <a href="addpages.php" id="modalEditBtn" class="btn btn-primary px-3 py-1.5 fw-semibold small d-inline-flex align-items-center gap-1.5" style="background-color: #0066ff; border-radius: 8px;">
                        <i class="bi bi-pencil-square"></i>
                        <span>Edit Model</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    // Sidebar responsive toggle
    const toggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.getElementById('dashboardSidebar');
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            sidebar.style.display = (sidebar.style.display === 'block') ? 'none' : 'block';
        });
    }

    // Active Model Data reference for modal copy buttons
    let currentViewModel = null;

    /**
     * Open the View Model Details Modal and populate all required fields
     */
    function openViewModelModal(model) {
        currentViewModel = model;

        // Set Title & ID
        document.getElementById('viewModelModalLabel').textContent = model.name || 'Model Details';
        document.getElementById('modalModelId').textContent = model.id || '-';

        // Set Status Badge
        const statusBadge = document.getElementById('modalStatusBadge');
        if (model.status === 'Rejected') {
            statusBadge.className = 'badge bg-danger-subtle text-danger border border-danger-subtle px-2.5 py-1 rounded-pill small';
            statusBadge.innerHTML = '<i class="bi bi-x-circle-fill me-1"></i> Rejected';
        } else if (model.status === 'Pending Review') {
            statusBadge.className = 'badge-status badge-under-review';
            statusBadge.innerHTML = '<i class="bi bi-clock-history me-1"></i> Pending Review';
        } else {
            statusBadge.className = 'badge-status badge-live';
            statusBadge.innerHTML = '<i class="bi bi-check-circle-fill me-1"></i> Live';
        }

        // Handle Rejection Notice
        const rejectionBox = document.getElementById('modalRejectionAlert');
        const rejectionNote = document.getElementById('modalRejectionNote');
        if (model.rejection_note) {
            rejectionNote.textContent = model.rejection_note;
            rejectionBox.classList.remove('d-none');
        } else {
            rejectionBox.classList.add('d-none');
        }

        // Set Descriptions
        document.getElementById('modalShortDesc').textContent = model.short_desc || '';
        document.getElementById('modalFullDesc').textContent = model.full_desc || '';

        // Populate Capabilities Badges
        const capContainer = document.getElementById('modalCapabilities');
        capContainer.innerHTML = '';
        if (model.capabilities && Array.isArray(model.capabilities) && model.capabilities.length > 0) {
            model.capabilities.forEach(cap => {
                const badge = document.createElement('span');
                badge.className = 'badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 rounded-pill small';
                badge.style.fontSize = '0.78rem';
                badge.textContent = cap;
                capContainer.appendChild(badge);
            });
        } else {
            capContainer.innerHTML = '<span class="text-muted small">Standard AI Inference</span>';
        }

        // Set Technical Specifications
        document.getElementById('modalCategory').textContent = model.category || 'N/A';
        const archEl = document.getElementById('modalArchitecture');
        archEl.textContent = model.architecture || 'N/A';
        archEl.title = model.architecture || '';
        document.getElementById('modalContextWindow').textContent = model.context_window || 'N/A';
        document.getElementById('modalMaxOutput').textContent = model.max_output || 'N/A';

        // Set API Endpoint & HTTP Method
        const methodBadge = document.getElementById('modalHttpMethod');
        methodBadge.textContent = model.method || 'POST';
        if (model.method === 'GET') {
            methodBadge.className = 'badge bg-success-subtle text-success border border-success-subtle font-monospace px-2 py-0.5';
        } else {
            methodBadge.className = 'badge bg-primary-subtle text-primary border border-primary-subtle font-monospace px-2 py-0.5';
        }
        document.getElementById('modalEndpointUrl').textContent = model.endpoint || 'https://api.durrun.com/v1/models/' + (model.id || '');

        // Set Pricing Structure
        document.getElementById('modalPricingInput').textContent = model.pricing_input || 'Free';
        document.getElementById('modalPricingOutput').textContent = model.pricing_output || 'Free';

        // Set Timeline Dates
        document.getElementById('modalCreatedOn').textContent = model.created_on || 'N/A';
        document.getElementById('modalLastUpdated').textContent = model.last_updated || model.created_on || 'N/A';

        // Set Edit Model link
        const editBtn = document.getElementById('modalEditBtn');
        if (editBtn) {
            editBtn.href = 'addpages.php?model=' + encodeURIComponent(model.id || '');
        }

        // Show Bootstrap 5 Modal
        const modalEl = document.getElementById('viewModelModal');
        const modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
        modalInstance.show();
    }

    /**
     * Copy Model ID to clipboard with toast notification
     */
    function copyModelId() {
        if (!currentViewModel || !currentViewModel.id) return;
        navigator.clipboard.writeText(currentViewModel.id).then(() => {
            showGlobalToast('Model ID copied to clipboard: ' + currentViewModel.id);
        });
    }

    /**
     * Copy Endpoint URL to clipboard with toast notification
     */
    function copyEndpointUrl() {
        if (!currentViewModel || !currentViewModel.endpoint) return;
        navigator.clipboard.writeText(currentViewModel.endpoint).then(() => {
            showGlobalToast('Endpoint URL copied to clipboard!');
        });
    }

    /**
     * Client-side Real-time Search & Filter Functionality
     */
    const searchInput = document.getElementById('modelSearchInput');
    const statusFilter = document.getElementById('modelStatusFilter');
    const categoryFilter = document.getElementById('modelCategoryFilter');
    const tableRows = document.querySelectorAll('.model-row');
    const countLabel = document.getElementById('modelsCountLabel');
    const noResultsRow = document.getElementById('noResultsRow');

    function applyModelFilters() {
        const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
        const selectedStatus = (statusFilter ? statusFilter.value : 'all').toLowerCase();
        const selectedCategory = (categoryFilter ? categoryFilter.value : 'all').toLowerCase();

        let visibleCount = 0;
        const currentRows = document.querySelectorAll('.model-row');

        currentRows.forEach(row => {
            const name = row.getAttribute('data-name') || '';
            const id = row.getAttribute('data-id') || '';
            const category = row.getAttribute('data-category') || '';
            const status = row.getAttribute('data-status') || '';

            const matchesQuery = !query || name.includes(query) || id.includes(query) || category.includes(query);
            const matchesStatus = (selectedStatus === 'all') || (status === selectedStatus);
            const matchesCategory = (selectedCategory === 'all') || (category === selectedCategory);

            if (matchesQuery && matchesStatus && matchesCategory) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Toggle No Results Row
        if (noResultsRow) {
            noResultsRow.style.display = (visibleCount === 0) ? '' : 'none';
        }

        // Update Count Label
        if (countLabel) {
            countLabel.textContent = `Showing 1 to ${visibleCount} of ${currentRows.length} models`;
        }
    }

    if (searchInput) searchInput.addEventListener('input', applyModelFilters);
    if (statusFilter) statusFilter.addEventListener('change', applyModelFilters);
    if (categoryFilter) categoryFilter.addEventListener('change', applyModelFilters);

    /**
     * Delete Model Handler with Global Confirmation Prompt
     */
    function handleDeleteModel(name, btnEl) {
        const row = btnEl ? btnEl.closest('.model-row') : null;
        showConfirmPrompt({
            title: 'Delete Model',
            itemName: name,
            message: `Are you sure you want to delete <strong class="text-dark">"${name}"</strong>? This action cannot be undone and will permanently remove this model from Durrun.`,
            confirmText: 'Yes, Delete',
            confirmBtnClass: 'btn-danger',
            iconClass: 'bi-trash3-fill',
            onConfirm: function() {
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    row.style.transform = 'translateX(20px)';
                    setTimeout(() => {
                        row.remove();
                        applyModelFilters();
                    }, 300);
                }
                showGlobalToast(`Model "${name}" has been deleted successfully.`);
            }
        });
    }
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
