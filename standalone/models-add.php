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

        .app-wrapper { display: flex; flex-direction: column; height: 100vh; max-height: 100vh; overflow: hidden; }

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
            flex-shrink: 0;
        }

        .nav-brand-logo { height: 32px; }

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

        .dashboard-layout { display: flex; flex: 1; height: calc(100vh - 68px); overflow: hidden; }

        .dashboard-sidebar {
            width: var(--sidebar-width);
            background: #ffffff;
            border-right: 1px solid #f1f5f9;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow-y: auto;
            flex-shrink: 0;
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

        .dashboard-main { flex: 1; background-color: #f8fafc; padding: 2.25rem 2.5rem; overflow-y: auto; height: 100%; }

        .dashboard-main::-webkit-scrollbar { width: 8px; }
        .dashboard-main::-webkit-scrollbar-track { background: #f1f5f9; }
        .dashboard-main::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .dashboard-main::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .dashboard-sidebar::-webkit-scrollbar { width: 5px; }
        .dashboard-sidebar::-webkit-scrollbar-track { background: transparent; }
        .dashboard-sidebar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 4px; }
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

        .step-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 8px;
            background-color: #eff6ff;
            color: #0066ff;
            font-size: 0.88rem;
            font-weight: 700;
        }

        .upload-dropzone {
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 2.25rem 1.5rem;
            text-align: center;
            background-color: #f8fafc;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .upload-dropzone:hover {
            border-color: var(--primary-color);
            background-color: #f0f6ff;
        }

        .upload-dropzone-icon {
            font-size: 2rem;
            color: #0066ff;
            margin-bottom: 0.5rem;
        }

        .upload-dropzone-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .upload-dropzone-sub {
            font-size: 0.8rem;
            color: #64748b;
        }

        .input-file-card {
            border: 1px solid #e2e8f0;
            background-color: #ffffff;
            border-radius: 12px;
            padding: 1.15rem 0.75rem 0.85rem;
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            transition: all 0.2s ease;
        }

        .input-file-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        }

        .input-file-icon {
            font-size: 1.75rem;
            color: var(--primary-color);
            margin-bottom: 0.45rem;
        }

        .input-file-title {
            font-size: 0.88rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.15rem;
        }

        .input-file-subtext {
            font-size: 0.72rem;
            color: #94a3b8;
            margin-bottom: 0.85rem;
            line-height: 1.2;
        }

        .card-slider-toggle {
            width: 100%;
            border-top: 1px solid #f1f5f9;
            padding-top: 0.65rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .custom-slider-switch .form-check-input {
            width: 2.5rem;
            height: 1.35rem;
            cursor: pointer;
        }

        .custom-slider-switch .form-check-input:checked {
            background-color: #0066ff;
            border-color: #0066ff;
        }

        .custom-slider-switch .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.15);
        }

        .toggle-state-text {
            font-size: 0.78rem;
            font-weight: 600;
            color: #64748b;
            min-width: 50px;
        }

        .toggle-state-text.active {
            color: #0066ff;
        }

        .playground-toggle-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.85rem 1.15rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .playground-toggle-title {
            font-size: 0.88rem;
            font-weight: 600;
            color: #0f172a;
        }

        /* Large Code Editor Container */
        .code-editor-box {
            background-color: #0f172a;
            border: 1px solid #1e293b;
            border-radius: 10px;
            overflow: hidden;
        }

        .code-editor-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.65rem 1rem;
            background: #1e293b;
            border-bottom: 1px solid #334155;
            font-size: 0.82rem;
            color: #94a3b8;
        }

        .code-editor-textarea {
            background: #0f172a;
            color: #f8fafc;
            font-family: 'SFMono-Regular', Consolas, Menlo, Monaco, 'Courier New', monospace;
            font-size: 0.92rem;
            line-height: 1.65;
            padding: 1.25rem;
            border: none;
            width: 100%;
            min-height: 340px;
            resize: vertical;
            outline: none;
        }

        .code-editor-textarea:focus {
            background: #0f172a;
            color: #ffffff;
            outline: none;
            box-shadow: none;
        }

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
    <!-- Top Navigation Bar -->
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm btn-light d-lg-none" id="sidebarToggleBtn" type="button" aria-label="Toggle navigation">
                <i class="bi bi-list fs-5"></i>
            </button>
            <a href="dashboard.php" class="d-flex align-items-center text-decoration-none">
                <img src="../assets/img/logo_card.png" alt="Durrun Logo" class="nav-brand-logo">
            </a>
        </div>

        <div class="nav-right-actions">
            <div class="nav-search-box d-none d-md-block" style="width: 240px; position: relative;">
                <input type="text" class="nav-search-input" placeholder="Search...">
                <i class="bi bi-search" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.85rem;"></i>
            </div>

            <a href="#" class="nav-action-link"><i class="bi bi-headset fs-5"></i></a>
            <a href="#" class="nav-action-link position-relative">
                <i class="bi bi-bell fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle" style="width: 8px; height: 8px; margin-left: -5px; margin-top: 5px;"></span>
            </a>

            <div class="dropdown">
                <button class="btn p-0 border-0 d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-avatar-badge">A</div>
                    <span class="d-none d-md-inline small fw-semibold text-dark">Partner</span>
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
                <li><a href="dashboard.php" class="sidebar-link"><i class="bi bi-speedometer2"></i><span>Dashboard</span></a></li>
                <li><a href="provider-profile.php" class="sidebar-link"><i class="bi bi-person"></i><span>Provider Profile</span></a></li>
                <li><a href="models.php" class="sidebar-link active"><i class="bi bi-box"></i><span>Models</span></a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-file-earmark-text"></i><span>Templates</span></a></li>
                <li><a href="#" class="sidebar-link"><i class="bi bi-card-checklist"></i><span>Submissions</span></a></li>
            </ul>
        </aside>

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
                    <p class="welcome-subtitle">Submit your model details. Our team will review it before it goes live on Durrun.</p>
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

            <!-- Form -->
            <form id="addModelForm" action="models.php" method="POST">
                <!-- SECTION 1: BASIC INFORMATION -->
                <div class="section-card mb-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="step-badge">1</span>
                        <div>
                            <h2 class="section-title">Basic Information</h2>
                            <p class="text-muted small mb-0">Tell us about your model and provide provider icons.</p>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Model Name <span class="text-primary">*</span></label>
                            <input type="text" class="form-control profile-input" name="model_name" placeholder="e.g. Acme Vision 1.0" required>
                        </div>

                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Model ID <span class="text-primary">*</span></label>
                            <input type="text" class="form-control profile-input" name="model_id" placeholder="e.g. acme-vision-1" required>
                        </div>

                        <!-- Category Dropdown (Commented out) -->
                        <!--
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Category <span class="text-primary">*</span></label>
                            <select class="form-select profile-input" name="category" required>
                                <option value="">Select a category</option>
                                <option value="Image">Image</option>
                                <option value="Text">Text</option>
                                <option value="Embedding">Embedding</option>
                                <option value="Audio">Audio</option>
                                <option value="Multimodal">Multimodal</option>
                            </select>
                        </div>
                        -->

                        <!-- Capabilities Dropdown (Commented out) -->
                        <!--
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Capabilities <span class="text-primary">*</span></label>
                            <div class="border rounded p-1 d-flex flex-wrap align-items-center gap-1 bg-white" style="min-height: 42px; border-color: #e2e8f0 !important;">
                                <span class="category-tag-pill py-1 px-2" style="font-size: 0.75rem;">Text Generation <i class="bi bi-x"></i></span>
                                <span class="category-tag-pill py-1 px-2" style="font-size: 0.75rem;">Code Generation <i class="bi bi-x"></i></span>
                                <i class="bi bi-chevron-down ms-auto me-2 text-muted" style="font-size: 0.75rem;"></i>
                            </div>
                        </div>
                        -->

                        <div class="col-12">
                            <label class="form-label-custom">Short Description <span class="text-primary">*</span></label>
                            <textarea class="form-control profile-input" name="short_description" rows="2" placeholder="Briefly describe what your model does (max 160 characters)" required></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label-custom">Full Description</label>
                            <textarea class="form-control profile-input" name="full_description" rows="4" placeholder="Detailed description of your model, its capabilities, architecture, and use cases..."></textarea>
                        </div>

                        <!-- Provider Icon Upload Zone -->
                        <div class="col-12">
                            <label class="form-label-custom">Provider Icon</label>
                            <div class="upload-dropzone">
                                <div class="upload-dropzone-icon">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                </div>
                                <div class="upload-dropzone-title">Click to upload or drag & drop</div>
                                <div class="upload-dropzone-sub">SVG, PNG or JPG (max. 512x512px, 2MB)</div>
                                <input type="file" class="d-none" id="providerIconInput" accept=".svg,.png,.jpg,.jpeg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: MODEL VERSION & DOCUMENTATION -->
                <div class="section-card mb-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="step-badge">2</span>
                        <div>
                            <h2 class="section-title">Model Version & Documentation</h2>
                            <p class="text-muted small mb-0">Specify the version details and supported file inputs.</p>
                        </div>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Model Version Name <span class="text-primary">*</span></label>
                            <input type="text" class="form-control profile-input" name="version_name" placeholder="e.g. v1.0.0, 2024-Q1" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Documentation URL</label>
                            <input type="url" class="form-control profile-input" name="doc_url" placeholder="https://docs.yourcompany.com/model">
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Model Version Description <span class="text-primary">*</span></label>
                            <textarea class="form-control profile-input" name="version_description" rows="2" placeholder="Describe what's new in this version." required></textarea>
                        </div>
                    </div>

                    <!-- Supported Input Files with Slider Toggles -->
                    <div class="mb-3">
                        <label class="form-label-custom mb-2">Supported Input Files</label>
                        <div class="row g-3">
                            <!-- 1. Image Upload -->
                            <div class="col-6 col-md-4 col-xl">
                                <div class="input-file-card">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                        <i class="bi bi-image input-file-icon"></i>
                                        <div class="input-file-title">Image Upload</div>
                                        <div class="input-file-subtext">PNG, JPG, WebP (Max 10MB)</div>
                                    </div>
                                    <div class="card-slider-toggle">
                                        <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                            <input class="form-check-input file-toggle" type="checkbox" role="switch" id="toggleImageUpload" checked onchange="updateToggleLabel(this)">
                                            <span class="toggle-state-text active" id="labelImageUpload">Enabled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Audio Upload -->
                            <div class="col-6 col-md-4 col-xl">
                                <div class="input-file-card">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                        <i class="bi bi-mic input-file-icon"></i>
                                        <div class="input-file-title">Audio Upload</div>
                                        <div class="input-file-subtext">MP3, WAV (Max 50MB)</div>
                                    </div>
                                    <div class="card-slider-toggle">
                                        <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                            <input class="form-check-input file-toggle" type="checkbox" role="switch" id="toggleAudioUpload" onchange="updateToggleLabel(this)">
                                            <span class="toggle-state-text" id="labelAudioUpload">Disabled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Video Upload -->
                            <div class="col-6 col-md-4 col-xl">
                                <div class="input-file-card">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                        <i class="bi bi-camera-video input-file-icon"></i>
                                        <div class="input-file-title">Video Upload</div>
                                        <div class="input-file-subtext">MP4, MOV (Max 100MB)</div>
                                    </div>
                                    <div class="card-slider-toggle">
                                        <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                            <input class="form-check-input file-toggle" type="checkbox" role="switch" id="toggleVideoUpload" onchange="updateToggleLabel(this)">
                                            <span class="toggle-state-text" id="labelVideoUpload">Disabled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Document Upload -->
                            <div class="col-6 col-md-4 col-xl">
                                <div class="input-file-card">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                        <i class="bi bi-file-earmark-text input-file-icon"></i>
                                        <div class="input-file-title">Document Upload</div>
                                        <div class="input-file-subtext">PDF, DOC, DOCX (Max 50MB)</div>
                                    </div>
                                    <div class="card-slider-toggle">
                                        <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                            <input class="form-check-input file-toggle" type="checkbox" role="switch" id="toggleDocUpload" onchange="updateToggleLabel(this)">
                                            <span class="toggle-state-text" id="labelDocUpload">Disabled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 5. Mask Image Upload -->
                            <div class="col-6 col-md-4 col-xl">
                                <div class="input-file-card">
                                    <div class="d-flex flex-column align-items-center mb-2">
                                        <i class="bi bi-cloud-arrow-up input-file-icon"></i>
                                        <div class="input-file-title">Mask Image Upload</div>
                                        <div class="input-file-subtext">PNG, JPG (Max 10MB)</div>
                                    </div>
                                    <div class="card-slider-toggle">
                                        <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                            <input class="form-check-input file-toggle" type="checkbox" role="switch" id="toggleMaskUpload" onchange="updateToggleLabel(this)">
                                            <span class="toggle-state-text" id="labelMaskUpload">Disabled</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Upload (Optional) -->
                    <div>
                        <label class="form-label-custom">Custom Upload (Optional)</label>
                        <input type="text" class="form-control profile-input" placeholder="Add custom field name (e.g. Voice ID, 3D File, etc.)">
                    </div>
                </div>

                <!-- SECTION 3: GET METHOD REQUIRED (EXCHANGED) -->
                <div class="section-card mb-4" id="getSectionCard">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <span class="step-badge">3</span>
                            <div>
                                <h2 class="section-title">GET Method Required</h2>
                                <p class="text-muted small mb-0">Toggle to configure separate code snippets and parameters for GET method requests</p>
                            </div>
                        </div>
                        <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="toggleGetMethodRequired" checked onchange="toggleGetMethodCollapse(this)">
                            <span class="toggle-state-text active" id="labelGetMethodRequired">Enabled</span>
                        </div>
                    </div>

                    <!-- Collapsible Section Body: Expands when Enabled, Closes when Disabled -->
                    <div id="getMethodCollapseContent" class="mt-4">
                        <div class="mb-3">
                            <label class="form-label-custom">API Endpoint (GET Method)</label>
                            <input type="url" class="form-control profile-input" value="https://durrun.com/api/musicgpt/musicgpt_get_v1.php" placeholder="GET request URL">
                        </div>

                        <div class="alert alert-light border d-flex align-items-center gap-2 p-2 mb-3" style="background: #f8fafc; border-color: #e2e8f0 !important; font-size: 0.85rem;">
                            <span class="badge bg-primary px-2 py-1" style="font-size: 0.7rem;">GET</span>
                            <span class="fw-semibold text-dark">Code Per Language (GET Method)</span>
                            <span class="text-muted ms-1">Paste working GET method code. Use <code>{{api_key}}</code> as key placeholder.</span>
                        </div>

                        <ul class="nav nav-pills gap-2 mb-3 border-bottom pb-2" id="getLangTabs" role="tablist">
                            <li class="nav-item"><button class="nav-link active py-1 px-3 small fw-semibold rounded-3" data-bs-toggle="pill" data-bs-target="#getTabPhp" type="button">PHP</button></li>
                            <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#getTabNode" type="button">Node.js</button></li>
                            <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#getTabPython" type="button">Python</button></li>
                            <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#getTabGo" type="button">Go</button></li>
                            <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#getTabJava" type="button">Java</button></li>
                            <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#getTabCsharp" type="button">C#</button></li>
                            <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#getTabCurl" type="button">cURL</button></li>
                        </ul>

                        <div class="tab-content" id="getLangTabContent">
                            <div class="tab-pane fade show active" id="getTabPhp">
                                <div class="rounded-3 overflow-hidden" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom" style="border-color: #1e293b !important; font-size: 0.8rem;">
                                        <span class="text-white-50">PHP (GET Method)</span>
                                        <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyCodeSnippet(this, 'getCodePhp')"><i class="bi bi-clipboard"></i> Copy</button>
                                    </div>
                                    <pre class="p-3 mb-0 text-light" style="font-family: 'SFMono-Regular', Consolas, Menlo, monospace; font-size: 0.85rem; line-height: 1.6;"><code id="getCodePhp"><span style="color: #93c5fd;">&lt;?php</span>

<span style="color: #60a5fa;">$api_key</span> = <span style="color: #f472b6;">"{{api_key}}"</span>;

<span style="color: #60a5fa;">$taskId</span> = <span style="color: #f472b6;">"{{taskId}}"</span>; <span style="color: #64748b;">// task_id</span>

<span style="color: #60a5fa;">$conversionType</span> = <span style="color: #f472b6;">"{{conversionType}}"</span>; <span style="color: #64748b;">// AUDIO_MASTERING</span>

<span style="color: #60a5fa;">$url</span> = <span style="color: #f472b6;">"https://api.musicgpt.com/api/public/v1/byid?"</span> . <span style="color: #34d399;">http_build_query</span>([
    <span style="color: #f472b6;">"task_id"</span> =&gt; <span style="color: #60a5fa;">$taskId</span>,
    <span style="color: #f472b6;">"conversionType"</span> =&gt; <span style="color: #60a5fa;">$conversionType</span>
]);</code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="getTabNode">
                                <div class="rounded-3 overflow-hidden p-3 text-light" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <pre class="mb-0" style="font-family: monospace; font-size: 0.85rem;"><code>const axios = require('axios');
const url = `https://api.musicgpt.com/api/public/v1/byid?task_id=${taskId}&conversionType=${conversionType}`;
const res = await axios.get(url, { headers: { 'Authorization': `Bearer {{api_key}}` } });</code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="getTabPython">
                                <div class="rounded-3 overflow-hidden p-3 text-light" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <pre class="mb-0" style="font-family: monospace; font-size: 0.85rem;"><code>import requests
url = "https://api.musicgpt.com/api/public/v1/byid"
params = {"task_id": task_id, "conversionType": conversion_type}
headers = {"Authorization": "Bearer {{api_key}}"}
response = requests.get(url, params=params, headers=headers)</code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="getTabGo">
                                <div class="rounded-3 overflow-hidden p-3 text-light" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <pre class="mb-0" style="font-family: monospace; font-size: 0.85rem;"><code>req, _ := http.NewRequest("GET", "https://api.musicgpt.com/api/public/v1/byid", nil)
q := req.URL.Query()
q.Add("task_id", taskId)
req.URL.RawQuery = q.Encode()</code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="getTabJava">
                                <div class="rounded-3 overflow-hidden p-3 text-light" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <pre class="mb-0" style="font-family: monospace; font-size: 0.85rem;"><code>HttpRequest request = HttpRequest.newBuilder()
    .uri(URI.create("https://api.musicgpt.com/api/public/v1/byid?task_id=" + taskId))
    .header("Authorization", "Bearer {{api_key}}")
    .GET()
    .build();</code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="getTabCsharp">
                                <div class="rounded-3 overflow-hidden p-3 text-light" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <pre class="mb-0" style="font-family: monospace; font-size: 0.85rem;"><code>var client = new HttpClient();
client.DefaultRequestHeaders.Add("Authorization", "Bearer {{api_key}}");
var response = await client.GetAsync($"https://api.musicgpt.com/api/public/v1/byid?task_id={taskId}");</code></pre>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="getTabCurl">
                                <div class="rounded-3 overflow-hidden p-3 text-light" style="background-color: #0f172a; border: 1px solid #1e293b;">
                                    <pre class="mb-0" style="font-family: monospace; font-size: 0.85rem;"><code>curl -X GET "https://api.musicgpt.com/api/public/v1/byid?task_id={{taskId}}&conversionType=AUDIO_MASTERING" \
  -H "Authorization: Bearer {{api_key}}"</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 4: CODE SELECTION (EXCHANGED) -->
                <div class="section-card mb-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="step-badge">4</span>
                        <div>
                            <h2 class="section-title">Code Selection</h2>
                            <p class="text-muted small mb-0">Provide code examples for integration.</p>
                        </div>
                    </div>

                    <!-- Language Switcher Tabs -->
                    <ul class="nav nav-pills gap-2 mb-3 border-bottom pb-2" id="codeLangTabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active py-1 px-3 small fw-semibold rounded-3 d-flex align-items-center gap-2" data-bs-toggle="pill" data-bs-target="#tabPhp" type="button">PHP</button>
                        </li>
                        <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#tabNode" type="button">Node.js</button></li>
                        <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#tabPython" type="button">Python</button></li>
                        <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#tabGo" type="button">Go</button></li>
                        <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#tabJava" type="button">Java</button></li>
                        <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#tabCsharp" type="button">C#</button></li>
                        <li class="nav-item"><button class="nav-link py-1 px-3 small fw-semibold rounded-3 text-muted" data-bs-toggle="pill" data-bs-target="#tabCurl" type="button">cURL</button></li>
                    </ul>

                    <!-- Large Code Textarea Container for Each Language -->
                    <div class="tab-content" id="codeLangTabContent">
                        <!-- PHP Tab -->
                        <div class="tab-pane fade show active" id="tabPhp">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-filetype-php me-1 text-primary"></i> PHP</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaPhp')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaPhp" name="code_php" rows="14" placeholder="// Enter PHP integration code example here...
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.durrun.com/v1/models/predict');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'prompt' => 'Your input here',
    'options' => ['temperature' => 0.7]
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer {{api_key}}',
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);"></textarea>
                            </div>
                        </div>

                        <!-- Node.js Tab -->
                        <div class="tab-pane fade" id="tabNode">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-filetype-js me-1 text-warning"></i> Node.js</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaNode')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaNode" name="code_nodejs" rows="14" placeholder="// Enter Node.js integration code example here...
const axios = require('axios');

async function runModel() {
  const response = await axios.post('https://api.durrun.com/v1/models/predict', {
    prompt: 'Your input here',
    options: { temperature: 0.7 }
  }, {
    headers: {
      'Authorization': 'Bearer {{api_key}}',
      'Content-Type': 'application/json'
    }
  });
  console.log(response.data);
}
runModel();"></textarea>
                            </div>
                        </div>

                        <!-- Python Tab -->
                        <div class="tab-pane fade" id="tabPython">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-filetype-py me-1 text-info"></i> Python</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaPython')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaPython" name="code_python" rows="14" placeholder="# Enter Python integration code example here...
import requests

url = 'https://api.durrun.com/v1/models/predict'
headers = {
    'Authorization': 'Bearer {{api_key}}',
    'Content-Type': 'application/json'
}
data = {
    'prompt': 'Your input here',
    'options': {'temperature': 0.7}
}

response = requests.post(url, json=data, headers=headers)
print(response.json())"></textarea>
                            </div>
                        </div>

                        <!-- Go Tab -->
                        <div class="tab-pane fade" id="tabGo">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-code me-1 text-primary"></i> Go</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaGo')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaGo" name="code_go" rows="14" placeholder="// Enter Go integration code example here...
package main

import (
    &quot;bytes&quot;
    &quot;fmt&quot;
    &quot;net/http&quot;
)

func main() {
    // integration request
}"></textarea>
                            </div>
                        </div>

                        <!-- Java Tab -->
                        <div class="tab-pane fade" id="tabJava">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-filetype-java me-1 text-danger"></i> Java</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaJava')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaJava" name="code_java" rows="14" placeholder="// Enter Java integration code example here...
import java.net.http.*;
import java.net.URI;

public class Main {
    public static void main(String[] args) throws Exception {
        // Java HTTP Client implementation
    }
}"></textarea>
                            </div>
                        </div>

                        <!-- C# Tab -->
                        <div class="tab-pane fade" id="tabCsharp">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-filetype-cs me-1 text-purple"></i> C#</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaCsharp')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaCsharp" name="code_csharp" rows="14" placeholder="// Enter C# integration code example here...
using System;
using System.Net.Http;
using System.Threading.Tasks;

class Program {
    static async Task Main() {
        // C# HttpClient implementation
    }
}"></textarea>
                            </div>
                        </div>

                        <!-- cURL Tab -->
                        <div class="tab-pane fade" id="tabCurl">
                            <div class="code-editor-box">
                                <div class="code-editor-header">
                                    <span class="fw-semibold text-light"><i class="bi bi-terminal me-1 text-success"></i> cURL</span>
                                    <button type="button" class="btn btn-sm btn-dark text-muted py-0 px-2" style="font-size: 0.75rem;" onclick="copyEditorText('textareaCurl')">
                                        <i class="bi bi-clipboard me-1"></i> Copy Code
                                    </button>
                                </div>
                                <textarea class="code-editor-textarea" id="textareaCurl" name="code_curl" rows="14" placeholder="# Enter cURL command here...
curl -X POST &quot;https://api.durrun.com/v1/models/predict&quot; \
  -H &quot;Authorization: Bearer {{api_key}}&quot; \
  -H &quot;Content-Type: application/json&quot; \
  -d '{
    &quot;prompt&quot;: &quot;Your input here&quot;,
    &quot;options&quot;: {
      &quot;temperature&quot;: 0.7
    }
  }'"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 5: PLAYGROUND FEATURES -->
                <div class="section-card mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="step-badge">5</span>
                        <h2 class="section-title">Playground Features</h2>
                    </div>
                    <div class="row g-3">
                        <!-- 1. Image Upload -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">Image Upload</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgImageUpload" checked onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text active" id="labelPgImageUpload">Enabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Audio Upload -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">Audio Upload</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgAudioUpload" onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text" id="labelPgAudioUpload">Disabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Video Upload -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">Video Upload</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgVideoUpload" onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text" id="labelPgVideoUpload">Disabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Document Upload -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">Document Upload</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgDocUpload" onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text" id="labelPgDocUpload">Disabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Mask Image Upload -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">Mask Image Upload</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgMaskUpload" onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text" id="labelPgMaskUpload">Disabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- 6. HeyGen Avatar Select -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">HeyGen Avatar Select</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgAvatarSelect" onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text" id="labelPgAvatarSelect">Disabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- 7. HeyGen Voice Select -->
                        <div class="col-12 col-md-4">
                            <div class="playground-toggle-box">
                                <span class="playground-toggle-title">HeyGen Voice Select</span>
                                <div class="form-check form-switch custom-slider-switch d-flex align-items-center gap-2 mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="pgVoiceSelect" onchange="updateToggleLabel(this)">
                                    <span class="toggle-state-text" id="labelPgVoiceSelect">Disabled</span>
                                </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebar = document.getElementById('dashboardSidebar');
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', () => {
            sidebar.style.display = (sidebar.style.display === 'block') ? 'none' : 'block';
        });
    }

    function updateToggleLabel(checkbox) {
        const parent = checkbox.closest('.form-switch');
        if (parent) {
            const label = parent.querySelector('.toggle-state-text');
            if (label) {
                if (checkbox.checked) {
                    label.textContent = 'Enabled';
                    label.classList.add('active');
                } else {
                    label.textContent = 'Disabled';
                    label.classList.remove('active');
                }
            }
        }
    }

    function toggleGetMethodCollapse(checkbox) {
        const parent = checkbox.closest('.form-switch');
        const label = parent ? parent.querySelector('.toggle-state-text') : null;
        const content = document.getElementById('getMethodCollapseContent');
        
        if (checkbox.checked) {
            if (label) {
                label.textContent = 'Enabled';
                label.classList.add('active');
            }
            if (content) {
                content.style.display = 'block';
            }
        } else {
            if (label) {
                label.textContent = 'Disabled';
                label.classList.remove('active');
            }
            if (content) {
                content.style.display = 'none';
            }
        }
    }

    function copyEditorText(textareaId) {
        const el = document.getElementById(textareaId);
        if (el) {
            navigator.clipboard.writeText(el.value).then(() => {
                alert('Code copied to clipboard!');
            }).catch(() => {
                el.select();
                document.execCommand('copy');
                alert('Code copied to clipboard!');
            });
        }
    }

    function copyCodeSnippet(btn, elementId) {
        const el = document.getElementById(elementId);
        if (el) {
            navigator.clipboard.writeText(el.innerText).then(() => {
                const orig = btn.innerHTML;
                btn.innerHTML = '<i class="bi bi-check2"></i> Copied';
                setTimeout(() => { btn.innerHTML = orig; }, 2000);
            });
        }
    }
</script>
</body>
</html>
