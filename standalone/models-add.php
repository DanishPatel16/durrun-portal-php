<?php
/**
 * Durrun Partner Portal - Add New Model (Standalone Version)
 * All CSS, HTML, and scripts are self-contained in this single file.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Model - Durrun Partner Portal</title>
    
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

        .app-wrapper { display: flex; flex-direction: column; min-height: 100vh; }

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

        .sidebar-heading { font-size: 0.92rem; font-weight: 700; color: #0f172a; padding: 0.25rem 0.75rem 0.85rem; margin-bottom: 0.25rem; }
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

        .dashboard-main { flex: 1; background-color: #f8fafc; padding: 2.25rem 2.5rem; overflow-y: auto; }
        .welcome-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
        .welcome-title { font-size: 1.75rem; font-weight: 800; color: #0f172a; margin-bottom: 0.25rem; }
        .welcome-subtitle { font-size: 0.95rem; color: var(--text-muted); margin: 0; }

        .section-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            border-radius: 14px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
            padding: 1.5rem;
        }

        .section-title { font-size: 1.05rem; font-weight: 700; color: #0f172a; margin: 0; }
        .form-label-custom { font-size: 0.88rem; font-weight: 600; color: #334155; margin-bottom: 0.45rem; display: block; }

        .profile-input {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.92rem;
            color: #1e293b;
            padding: 0.6rem 0.85rem;
        }

        .profile-input:focus { border-color: #0066ff; box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.12); outline: none; }

        .stat-icon-wrapper {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
        }

        .stat-icon-blue { background-color: #e0edff; color: #0066ff; }

        .category-tag-pill {
            background-color: #eff6ff;
            color: #0066ff;
            border-radius: 20px;
            padding: 0.25rem 0.75rem;
            font-size: 0.78rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            border: 1px solid #dbeafe;
        }

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
                <a href="models.php" class="nav-top-link active"><i class="bi bi-box"></i> Models</a>
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
                <li><a href="#" class="sidebar-link"><i class="bi bi-key"></i><span>API Access</span></a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-gear"></i><span>Settings</span></a></li>
            </ul>
        </aside>

        <main class="dashboard-main">
            <nav aria-label="breadcrumb" class="mb-2">
                <ol class="breadcrumb" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="models.php" class="text-decoration-none" style="color: #0066ff;">Models</a></li>
                    <li class="breadcrumb-item active text-muted">Add New Model</li>
                </ol>
            </nav>

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

            <form id="addModelForm" action="models.php" method="POST">
                <div class="row g-4">
                    <div class="col-12 col-xl-8">
                        <!-- Section 1 -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-box"></i></div>
                                <div>
                                    <h2 class="section-title">1. Basic Information</h2>
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
                                    <select class="form-select profile-input" name="category">
                                        <option value="Image" selected>Image</option>
                                        <option value="Text">Text</option>
                                        <option value="Embedding">Embedding</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Capabilities <span class="text-primary">*</span></label>
                                    <div class="border rounded p-1 d-flex flex-wrap align-items-center gap-1 bg-white" style="min-height: 42px;">
                                        <span class="category-tag-pill">Image Understanding <i class="bi bi-x"></i></span>
                                        <span class="category-tag-pill">Object Detection <i class="bi bi-x"></i></span>
                                        <span class="category-tag-pill">Image Analysis <i class="bi bi-x"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label-custom">Short Description <span class="text-primary">*</span></label>
                                    <textarea class="form-control profile-input" name="short_description" rows="3" required>A state-of-the-art vision model for image understanding, object detection and analysis.</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-link-45deg"></i></div>
                                <div>
                                    <h2 class="section-title">2. API Information</h2>
                                    <p class="text-muted small mb-0">Provide the API details for this model.</p>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">API Endpoint <span class="text-primary">*</span></label>
                                    <input type="url" class="form-control profile-input" name="api_endpoint" value="https://api.acmeai.com/v1/chat" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">API Documentation URL <span class="text-primary">*</span></label>
                                    <input type="url" class="form-control profile-input" name="api_doc_url" value="https://docs.acmeai.com/vision" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Authentication Type <span class="text-primary">*</span></label>
                                    <select class="form-select profile-input">
                                        <option selected>Bearer Token (API Key)</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label-custom">Request Method <span class="text-primary">*</span></label>
                                    <select class="form-select profile-input">
                                        <option selected>POST</option>
                                        <option>GET</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-code-slash"></i></div>
                                <div>
                                    <h2 class="section-title">3. Supported Languages</h2>
                                    <p class="text-muted small mb-0">Select the programming languages for which you can provide code examples.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-4 pt-1">
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked id="sLangNode"><label class="form-check-label small fw-semibold" for="sLangNode">Node.js</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked id="sLangPython"><label class="form-check-label small fw-semibold" for="sLangPython">Python</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked id="sLangPhp"><label class="form-check-label small fw-semibold" for="sLangPhp">PHP</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" checked id="sLangCurl"><label class="form-check-label small fw-semibold" for="sLangCurl">cURL</label></div>
                            </div>
                        </div>

                        <!-- Section 4 -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-file-earmark-code"></i></div>
                                <div>
                                    <h2 class="section-title">4. Code Examples</h2>
                                    <p class="text-muted small mb-0">Provide code examples for each supported language.</p>
                                </div>
                            </div>
                            <div class="p-3 rounded-3" style="background-color: #111827; border: 1px solid #1f2937;">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-light small">Node.js Example</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.78rem;"><i class="bi bi-clipboard me-1"></i> Copy</button>
                                </div>
                                <pre class="text-light mb-0" style="font-family: monospace; font-size: 0.85rem; line-height: 1.5;"><code><span style="color: #f472b6;">const</span> axios = <span style="color: #60a5fa;">require</span>(<span style="color: #34d399;">'axios'</span>);
<span style="color: #f472b6;">async function</span> <span style="color: #60a5fa;">generateResponse</span>() {
  <span style="color: #f472b6;">const</span> response = <span style="color: #f472b6;">await</span> axios.<span style="color: #60a5fa;">post</span>(<span style="color: #34d399;">'https://api.acmeai.com/v1/chat'</span>, {
    model: <span style="color: #34d399;">'acme-vision-1'</span>,
    prompt: <span style="color: #34d399;">'Describe this image'</span>
  });
  console.<span style="color: #60a5fa;">log</span>(response.data);
}</code></pre>
                            </div>
                        </div>

                        <!-- Section 5 -->
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="stat-icon-wrapper stat-icon-blue"><i class="bi bi-file-earmark-text"></i></div>
                                <div>
                                    <h2 class="section-title">5. Example Request & Response</h2>
                                    <p class="text-muted small mb-0">Provide a sample API request and response.</p>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 bg-white">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold small">Sample Request (JSON)</span>
                                            <button type="button" class="btn btn-sm btn-light border py-0 px-2 text-muted" style="font-size: 0.75rem;"><i class="bi bi-clipboard"></i> Copy</button>
                                        </div>
                                        <pre class="p-2 mb-0 bg-light rounded text-dark" style="font-family: monospace; font-size: 0.8rem;"><code>{ "model": "acme-vision-1", "prompt": "Describe this image" }</code></pre>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 bg-white">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold small">Sample Response (JSON)</span>
                                            <button type="button" class="btn btn-sm btn-light border py-0 px-2 text-muted" style="font-size: 0.75rem;"><i class="bi bi-clipboard"></i> Copy</button>
                                        </div>
                                        <pre class="p-2 mb-0 bg-light rounded text-dark" style="font-family: monospace; font-size: 0.8rem;"><code>{ "id": "resp_123", "result": "A cat sitting on a chair" }</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Tips & Status Flow -->
                    <div class="col-12 col-xl-4">
                        <div class="section-card mb-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-lightbulb text-warning fs-5"></i>
                                <h2 class="section-title">Tips</h2>
                            </div>
                            <ul class="text-secondary small ps-3 mb-0" style="line-height: 1.8;">
                                <li>Use a clear and descriptive name.</li>
                                <li>Provide accurate API details.</li>
                                <li>Add code examples for at least one language.</li>
                                <li>Include a sample request and response.</li>
                                <li>Your model will be reviewed before being published on Durrun.</li>
                            </ul>
                        </div>

                        <div class="section-card">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <i class="bi bi-diagram-3 text-primary fs-5"></i>
                                <h2 class="section-title">Model Status Flow</h2>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-3 align-items-start"><div class="mt-1 rounded-circle" style="width: 10px; height: 10px; background-color: #94a3b8;"></div><div><div class="fw-bold small">Draft</div><div class="text-muted" style="font-size: 0.8rem;">You can edit and submit later.</div></div></div>
                                <div class="d-flex gap-3 align-items-start"><div class="mt-1 rounded-circle" style="width: 10px; height: 10px; background-color: #f59e0b;"></div><div><div class="fw-bold small">Under Review</div><div class="text-muted" style="font-size: 0.8rem;">Our team is reviewing your submission.</div></div></div>
                                <div class="d-flex gap-3 align-items-start"><div class="mt-1 rounded-circle" style="width: 10px; height: 10px; background-color: #ef4444;"></div><div><div class="fw-bold small">Changes Requested</div><div class="text-muted" style="font-size: 0.8rem;">We'll let you know what needs to be updated.</div></div></div>
                                <div class="d-flex gap-3 align-items-start"><div class="mt-1 rounded-circle" style="width: 10px; height: 10px; background-color: #10b981;"></div><div><div class="fw-bold small">Approved</div><div class="text-muted" style="font-size: 0.8rem;">Your model is approved and ready to go live.</div></div></div>
                                <div class="d-flex gap-3 align-items-start"><div class="mt-1 rounded-circle" style="width: 10px; height: 10px; background-color: #059669;"></div><div><div class="fw-bold small">Live</div><div class="text-muted" style="font-size: 0.8rem;">Your model is publicly available on Durrun.</div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
