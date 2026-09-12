<?php
/**
 * Common Sidebar Component for Durrun Partner Portal
 * Detects current active page automatically or via $activePage variable
 */
require_once __DIR__ . '/../path.php';

if (!isset($activePage)) {
    // Automatically extract page name from current script (e.g. dashboard.php -> dashboard)
    $activePage = basename($_SERVER['PHP_SELF'] ?? '', ".php");
}

// Normalize active page for models / pages
$isModelsActive = in_array($activePage, ['models', 'models-add', 'modelslisting', 'addmodels', 'pageslisting', 'addpages', 'pages']);
?>
<!-- Sidebar Navigation -->
<aside class="dashboard-sidebar" id="dashboardSidebar">
    <div class="sidebar-heading">Partner Portal</div>
    <ul class="sidebar-nav">
        <!-- Dashboard -->
        <li>
            <a href="<?php echo $pathToRoot; ?>view/dashboard.php" class="sidebar-link <?php echo ($activePage === 'dashboard') ? 'active' : ''; ?>">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Provider Profile -->
        <li>
            <a href="<?php echo $pathToRoot; ?>view/provider-profile.php" class="sidebar-link <?php echo ($activePage === 'provider-profile') ? 'active' : ''; ?>">
                <i class="bi bi-person"></i>
                <span>Provider Profile</span>
            </a>
        </li>

        <!-- Models / Pages -->
        <li>
            <a href="<?php echo $pathToRoot; ?>view/pages/pageslisting.php" class="sidebar-link <?php echo $isModelsActive ? 'active' : ''; ?>">
                <i class="bi bi-box"></i>
                <span>Models</span>
            </a>
        </li>

        <!-- Templates -->
        <li>
            <a href="#" class="sidebar-link <?php echo ($activePage === 'templates') ? 'active' : ''; ?>">
                <i class="bi bi-file-earmark-text"></i>
                <span>Templates</span>
            </a>
        </li>

        <!-- Submissions -->
        <li>
            <a href="#" class="sidebar-link <?php echo ($activePage === 'submissions') ? 'active' : ''; ?>">
                <i class="bi bi-card-checklist"></i>
                <span>Submissions</span>
            </a>
        </li>

        <!-- API Access with Collapsible Submenu -->
        <?php 
        $isApiActive = in_array($activePage, ['api-access', 'api-overview', 'api-keys', 'api-usage']);
        ?>
        <li>
            <a href="#apiAccessSubmenu" class="sidebar-link d-flex justify-content-between align-items-center <?php echo $isApiActive ? 'active' : ''; ?>" data-bs-toggle="collapse" role="button" aria-expanded="true">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-key"></i>
                    <span>API Access</span>
                </div>
                <i class="bi bi-chevron-down" style="font-size: 0.75rem;"></i>
            </a>
            <div class="collapse show" id="apiAccessSubmenu">
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#" class="sidebar-sublink <?php echo ($activePage === 'api-overview') ? 'active text-primary fw-semibold' : ''; ?>">
                            Overview
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-sublink <?php echo ($activePage === 'api-keys') ? 'active text-primary fw-semibold' : ''; ?>">
                            API Keys
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-sublink <?php echo ($activePage === 'api-usage') ? 'active text-primary fw-semibold' : ''; ?>">
                            Usage & Analytics
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Settings -->
        <li>
            <a href="#" class="sidebar-link <?php echo ($activePage === 'settings') ? 'active' : ''; ?>">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</aside>
