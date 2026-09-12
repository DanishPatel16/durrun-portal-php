<?php
$pageTitle = "Add New Model - Durrun Partner Portal";
$activePage = "models";
require_once __DIR__ . '/includes/header.php';
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

            <!-- Platform Top Nav Links -->
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

            <a href="#" class="nav-action-link">
                <i class="bi bi-headset fs-5"></i>
            </a>

            <a href="#" class="nav-action-link position-relative">
                <i class="bi bi-bell fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="width: 8px; height: 8px; margin-left: -5px; margin-top: 5px;"></span>
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

    <!-- Main Dashboard Layout -->
    <div class="dashboard-layout">
        <!-- Common Sidebar Component -->
        <?php require_once __DIR__ . '/includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="dashboard-main">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb" class="mb-2">
                <ol class="breadcrumb" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="models.php" class="text-decoration-none" style="color: #0066ff;">Models</a></li>
                    <li class="breadcrumb-item active text-muted" aria-current="page">Add New Model</li>
                </ol>
            </nav>

            <!-- Header & Action Buttons -->
            <div class="welcome-header align-items-center mb-4">
                <div>
                    <h1 class="welcome-title">Add New Model</h1>
                    <p class="welcome-subtitle">Provide details about your model. Once submitted, our team will review it before it goes live on Durrun.</p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-outline-secondary px-3 py-2 fw-semibold" style="border-radius: 8px; font-size: 0.95rem; background: #ffffff;">
                        Save Draft
                    </button>
                    <button type="submit" form="addModelForm" class="btn btn-primary px-3 py-2 fw-semibold" style="background-color: #0066ff; border-radius: 8px; font-size: 0.95rem;">
                        Submit for Review
                    </button>
                </div>
            </div>

            <!-- Form & Side Guides -->
            <form id="addModelForm" action="models.php" method="POST">
                <div class="row g-4">
                    <!-- Left Column: Multi-step Form Sections -->
                    <div class="col-12 col-xl-8">
                        <!-- Section 1: Basic Information -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue" style="width: 40px; height: 40px; min-width: 40px; border-radius: 10px; font-size: 1.15rem;">
                                    <i class="bi bi-box"></i>
                                </div>
                                <div>
                                    <h2 class="section-title" style="font-size: 1.1rem;">1. Basic Information</h2>
                                    <p class="text-muted small mb-0">Tell us about your model.</p>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Model Name <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control profile-input" name="model_name" value="Acme Vision 1.0" required>
                                    <span class="text-muted" style="font-size: 0.78rem;">A clear, descriptive name for your model.</span>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Model ID <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control profile-input" name="model_id" value="acme-vision-1" required>
                                    <span class="text-muted" style="font-size: 0.78rem;">Unique identifier (e.g. acme-vision-1)</span>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Category <span class="text-primary">*</span></label>
                                    <select class="form-select profile-input" name="category" required>
                                        <option value="Image" selected>Image</option>
                                        <option value="Text">Text</option>
                                        <option value="Embedding">Embedding</option>
                                        <option value="Audio">Audio</option>
                                        <option value="Multimodal">Multimodal</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Capabilities <span class="text-primary">*</span></label>
                                    <div class="border rounded p-1 d-flex flex-wrap align-items-center gap-1 bg-white" style="min-height: 42px; border-color: #e2e8f0 !important;">
                                        <span class="category-tag-pill py-1 px-2" style="font-size: 0.75rem;">Image Understanding <i class="bi bi-x"></i></span>
                                        <span class="category-tag-pill py-1 px-2" style="font-size: 0.75rem;">Object Detection <i class="bi bi-x"></i></span>
                                        <span class="category-tag-pill py-1 px-2" style="font-size: 0.75rem;">Image Analysis <i class="bi bi-x"></i></span>
                                        <i class="bi bi-chevron-down ms-auto me-2 text-muted" style="font-size: 0.75rem;"></i>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label-custom">Short Description <span class="text-primary">*</span></label>
                                    <textarea class="form-control profile-input" name="short_description" rows="3" required>A state-of-the-art vision model for image understanding, object detection and analysis.</textarea>
                                    <span class="text-muted" style="font-size: 0.78rem;">Briefly describe what your model does.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2: API Information -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue" style="width: 40px; height: 40px; min-width: 40px; border-radius: 10px; font-size: 1.15rem;">
                                    <i class="bi bi-link-45deg"></i>
                                </div>
                                <div>
                                    <h2 class="section-title" style="font-size: 1.1rem;">2. API Information</h2>
                                    <p class="text-muted small mb-0">Provide the API details for this model.</p>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">API Endpoint <span class="text-primary">*</span></label>
                                    <input type="url" class="form-control profile-input" name="api_endpoint" value="https://api.acmeai.com/v1/chat" required>
                                    <span class="text-muted" style="font-size: 0.78rem;">Base endpoint for the API.</span>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">API Documentation URL <span class="text-primary">*</span></label>
                                    <input type="url" class="form-control profile-input" name="api_doc_url" value="https://docs.acmeai.com/vision" required>
                                    <span class="text-muted" style="font-size: 0.78rem;">Link to your official API documentation.</span>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Authentication Type <span class="text-primary">*</span></label>
                                    <select class="form-select profile-input" name="auth_type">
                                        <option selected>Bearer Token (API Key)</option>
                                        <option>Basic Auth</option>
                                        <option>Custom Header</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Request Method <span class="text-primary">*</span></label>
                                    <select class="form-select profile-input" name="request_method">
                                        <option selected>POST</option>
                                        <option>GET</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Section 3: Supported Languages -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue" style="width: 40px; height: 40px; min-width: 40px; border-radius: 10px; font-size: 1.15rem;">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <div>
                                    <h2 class="section-title" style="font-size: 1.1rem;">3. Supported Languages</h2>
                                    <p class="text-muted small mb-0">Select the programming languages for which you can provide code examples.</p>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-4 pt-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="langNode">
                                    <label class="form-check-label small fw-semibold" for="langNode">Node.js</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="langPython">
                                    <label class="form-check-label small fw-semibold" for="langPython">Python</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="langPhp">
                                    <label class="form-check-label small fw-semibold" for="langPhp">PHP</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="langJava">
                                    <label class="form-check-label small fw-semibold" for="langJava">Java</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="langCsharp">
                                    <label class="form-check-label small fw-semibold" for="langCsharp">C#</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="langGo">
                                    <label class="form-check-label small fw-semibold" for="langGo">Go</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked id="langCurl">
                                    <label class="form-check-label small fw-semibold" for="langCurl">cURL</label>
                                </div>
                            </div>
                        </div>

                        <!-- Section 4: Code Examples -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue" style="width: 40px; height: 40px; min-width: 40px; border-radius: 10px; font-size: 1.15rem;">
                                    <i class="bi bi-file-earmark-code"></i>
                                </div>
                                <div>
                                    <h2 class="section-title" style="font-size: 1.1rem;">4. Code Examples</h2>
                                    <p class="text-muted small mb-0">Provide code examples for each supported language.</p>
                                </div>
                            </div>

                            <!-- Language Switcher Tabs -->
                            <ul class="nav nav-pills gap-2 mb-3 border-bottom pb-2" id="codeLanguageTabs" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="node-tab" data-bs-toggle="pill" data-bs-target="#nodeCode" type="button">
                                        <span class="badge bg-success" style="font-size: 0.65rem;">JS</span> Node.js
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="python-tab" data-bs-toggle="pill" data-bs-target="#pythonCode" type="button">
                                        <i class="bi bi-terminal text-warning"></i> Python
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="php-tab" data-bs-toggle="pill" data-bs-target="#phpCode" type="button">
                                        <span class="badge bg-primary" style="font-size: 0.65rem;">PHP</span> PHP
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="java-tab" data-bs-toggle="pill" data-bs-target="#javaCode" type="button">
                                        <i class="bi bi-cup-hot text-danger"></i> Java
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="csharp-tab" data-bs-toggle="pill" data-bs-target="#csharpCode" type="button">
                                        <span class="badge bg-purple" style="background:#7c3aed; font-size: 0.65rem;">C#</span> C#
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="go-tab" data-bs-toggle="pill" data-bs-target="#goCode" type="button">
                                        <i class="bi bi-box-arrow-in-right text-info"></i> Go
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" id="curl-tab" data-bs-toggle="pill" data-bs-target="#curlCode" type="button">
                                        <i class="bi bi-chevron-right text-dark"></i> cURL
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab Panes with Code Editor Box -->
                            <div class="tab-content" id="codeLanguageContent">
                                <div class="tab-pane fade show active" id="nodeCode">
                                    <div class="code-box-container position-relative rounded-3 overflow-hidden" style="background-color: #111827; border: 1px solid #1f2937;">
                                        <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom border-secondary" style="border-color: #1f2937 !important;">
                                            <span class="text-light small fw-medium">Node.js Example</span>
                                            <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.78rem; border-color: #374151;">
                                                <i class="bi bi-clipboard me-1"></i> Copy
                                            </button>
                                        </div>
                                        <pre class="p-3 mb-0 text-light" style="font-family: 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, monospace; font-size: 0.85rem; line-height: 1.6; max-height: 380px; overflow-y: auto;"><code><span class="text-muted me-3">1</span><span style="color: #f472b6;">const</span> axios = <span style="color: #60a5fa;">require</span>(<span style="color: #34d399;">'axios'</span>);
<span class="text-muted me-3">2</span>
<span class="text-muted me-3">3</span><span style="color: #f472b6;">async function</span> <span style="color: #60a5fa;">generateResponse</span>() {
<span class="text-muted me-3">4</span>  <span style="color: #f472b6;">try</span> {
<span class="text-muted me-3">5</span>    <span style="color: #f472b6;">const</span> response = <span style="color: #f472b6;">await</span> axios.<span style="color: #60a5fa;">post</span>(<span style="color: #34d399;">'https://api.acmeai.com/v1/chat'</span>, {
<span class="text-muted me-3">6</span>      model: <span style="color: #34d399;">'acme-vision-1'</span>,
<span class="text-muted me-3">7</span>      prompt: <span style="color: #34d399;">'Describe this image'</span>,
<span class="text-muted me-3">8</span>      image_url: <span style="color: #34d399;">'https://example.com/image.jpg'</span>
<span class="text-muted me-3">9</span>    }, {
<span class="text-muted me-3">10</span>     headers: {
<span class="text-muted me-3">11</span>       <span style="color: #34d399;">'Authorization'</span>: <span style="color: #34d399;">'Bearer YOUR_API_KEY'</span>,
<span class="text-muted me-3">12</span>       <span style="color: #34d399;">'Content-Type'</span>: <span style="color: #34d399;">'application/json'</span>
<span class="text-muted me-3">13</span>     }
<span class="text-muted me-3">14</span>   });
<span class="text-muted me-3">15</span>   console.<span style="color: #60a5fa;">log</span>(response.data);
<span class="text-muted me-3">16</span> } <span style="color: #f472b6;">catch</span> (error) {
<span class="text-muted me-3">17</span>   console.<span style="color: #60a5fa;">error</span>(error);
<span class="text-muted me-3">18</span> }
<span class="text-muted me-3">19</span>}
<span class="text-muted me-3">20</span><span style="color: #60a5fa;">generateResponse</span>();</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 5: Example Request & Response -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue" style="width: 40px; height: 40px; min-width: 40px; border-radius: 10px; font-size: 1.15rem;">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <div>
                                    <h2 class="section-title" style="font-size: 1.1rem;">5. Example Request & Response</h2>
                                    <p class="text-muted small mb-0">Provide a sample API request and response.</p>
                                </div>
                            </div>

                            <div class="row g-3">
                                <!-- Sample Request -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 bg-white" style="border-color: #e2e8f0 !important;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold small text-dark">Sample Request (JSON)</span>
                                            <button type="button" class="btn btn-sm btn-light border py-0 px-2 text-muted" style="font-size: 0.75rem;">
                                                <i class="bi bi-clipboard me-1"></i> Copy
                                            </button>
                                        </div>
                                        <pre class="p-2 mb-0 bg-light rounded text-dark" style="font-family: monospace; font-size: 0.82rem; line-height: 1.5;"><code>{
  "model": "<span style="color: #059669;">acme-vision-1</span>",
  "prompt": "<span style="color: #059669;">Describe this image</span>",
  "image_url": "<span style="color: #059669;">https://example.com/image.jpg</span>"
}</code></pre>
                                    </div>
                                </div>

                                <!-- Sample Response -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 bg-white" style="border-color: #e2e8f0 !important;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold small text-dark">Sample Response (JSON)</span>
                                            <button type="button" class="btn btn-sm btn-light border py-0 px-2 text-muted" style="font-size: 0.75rem;">
                                                <i class="bi bi-clipboard me-1"></i> Copy
                                            </button>
                                        </div>
                                        <pre class="p-2 mb-0 bg-light rounded text-dark" style="font-family: monospace; font-size: 0.82rem; line-height: 1.5;"><code>{
  "id": "<span style="color: #2563eb;">resp_123</span>",
  "object": "<span style="color: #059669;">image.analysis</span>",
  "result": "<span style="color: #059669;">A cat sitting on a chair</span>",
  "usage": {
    "prompt_tokens": <span style="color: #d97706;">100</span>,
    "completion_tokens": <span style="color: #d97706;">50</span>
  }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Tips & Status Flow Cards -->
                    <div class="col-12 col-xl-4">
                        <!-- Tips Card -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-lightbulb text-warning fs-5"></i>
                                <h2 class="section-title">Tips</h2>
                            </div>
                            <ul class="text-secondary small ps-3 mb-0" style="line-height: 1.8; font-size: 0.88rem;">
                                <li>Use a clear and descriptive name.</li>
                                <li>Provide accurate API details.</li>
                                <li>Add code examples for at least one language (recommended: all 7).</li>
                                <li>Include a sample request and response.</li>
                                <li>Your model will be reviewed before being published on Durrun.</li>
                            </ul>
                        </div>

                        <!-- Model Status Flow Card -->
                        <div class="section-card">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <i class="bi bi-diagram-3 text-primary fs-5"></i>
                                <h2 class="section-title">Model Status Flow</h2>
                            </div>

                            <div class="d-flex flex-column gap-3">
                                <!-- Step 1: Draft -->
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="mt-1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #94a3b8; min-width: 10px;"></div>
                                    <div>
                                        <div class="fw-bold small text-dark">Draft</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">You can edit and submit later.</div>
                                    </div>
                                </div>

                                <!-- Step 2: Under Review -->
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="mt-1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #f59e0b; min-width: 10px;"></div>
                                    <div>
                                        <div class="fw-bold small text-dark">Under Review</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">Our team is reviewing your submission.</div>
                                    </div>
                                </div>

                                <!-- Step 3: Changes Requested -->
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="mt-1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #ef4444; min-width: 10px;"></div>
                                    <div>
                                        <div class="fw-bold small text-dark">Changes Requested</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">We'll let you know what needs to be updated.</div>
                                    </div>
                                </div>

                                <!-- Step 4: Approved -->
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="mt-1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #10b981; min-width: 10px;"></div>
                                    <div>
                                        <div class="fw-bold small text-dark">Approved</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">Your model is approved and ready to go live.</div>
                                    </div>
                                </div>

                                <!-- Step 5: Live -->
                                <div class="d-flex gap-3 align-items-start">
                                    <div class="mt-1" style="width: 10px; height: 10px; border-radius: 50%; background-color: #059669; min-width: 10px;"></div>
                                    <div>
                                        <div class="fw-bold small text-dark">Live</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">Your model is publicly available on Durrun.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
