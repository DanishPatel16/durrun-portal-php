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
                <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Dashboard.svg" alt="Dashboard" class="sidebar-icon-svg">
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Provider Profile -->
        <li>
            <a href="<?php echo $pathToRoot; ?>view/provider-profile.php" class="sidebar-link <?php echo ($activePage === 'provider-profile') ? 'active' : ''; ?>">
                <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Provider Profile.svg" alt="Provider Profile" class="sidebar-icon-svg">
                <span>Provider Profile</span>
            </a>
        </li>

        <!-- Models / Pages -->
        <li>
            <a href="<?php echo $pathToRoot; ?>view/models/modelslisting.php" class="sidebar-link <?php echo $isModelsActive ? 'active' : ''; ?>">
                <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Models.svg" alt="Models" class="sidebar-icon-svg">
                <span>Models</span>
            </a>
        </li>

        <!-- Templates (Commented out) -->
        <!--
        <li>
            <a href="#" class="sidebar-link <?php echo ($activePage === 'templates') ? 'active' : ''; ?>">
                <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Templates.svg" alt="Templates" class="sidebar-icon-svg">
                <span>Templates</span>
            </a>
        </li>
        -->

        <!-- Submissions (Commented out) -->
        <!--
        <li>
            <a href="#" class="sidebar-link <?php echo ($activePage === 'submissions') ? 'active' : ''; ?>">
                <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Pending Submissions.svg" alt="Submissions" class="sidebar-icon-svg">
                <span>Submissions</span>
            </a>
        </li>
        -->

        <!-- API Access with Collapsible Submenu -->
        <?php 
        $isApiActive = in_array($activePage, ['api-access', 'api-overview', 'api-keys', 'api-usage', 'api-pricing', 'overview', 'keys', 'usage', 'pricing', 'create-key', 'addkey']);
        ?>
        <li>
            <a href="#apiAccessSubmenu" class="sidebar-link d-flex justify-content-between align-items-center <?php echo $isApiActive ? 'active' : ''; ?>" data-bs-toggle="collapse" role="button" aria-expanded="true">
                <div class="d-flex align-items-center gap-2">
                    <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/API Requests.svg" alt="API Access" class="sidebar-icon-svg">
                    <span>API Access</span>
                </div>
                <i class="bi bi-chevron-down" style="font-size: 0.75rem;"></i>
            </a>
            <div class="collapse show" id="apiAccessSubmenu">
                <ul class="sidebar-submenu">
                    <li>
                        <a href="<?php echo $pathToRoot; ?>view/api/overview.php" class="sidebar-sublink <?php echo in_array($activePage, ['api-overview', 'overview', 'api-access']) ? 'active text-primary fw-semibold' : ''; ?>">
                            Overview
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $pathToRoot; ?>view/api/keys.php" class="sidebar-sublink <?php echo in_array($activePage, ['api-keys', 'keys', 'create-key', 'addkey']) ? 'active text-primary fw-semibold' : ''; ?>">
                            API Keys
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $pathToRoot; ?>view/api/usage.php" class="sidebar-sublink <?php echo in_array($activePage, ['api-usage', 'usage']) ? 'active text-primary fw-semibold' : ''; ?>">
                            Usage & Analytics
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $pathToRoot; ?>view/api/pricing.php" class="sidebar-sublink <?php echo in_array($activePage, ['api-pricing', 'pricing']) ? 'active text-primary fw-semibold' : ''; ?>">
                            API Pricing
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Settings (Commented out) -->
        <!--
        <li>
            <a href="#" class="sidebar-link <?php echo ($activePage === 'settings') ? 'active' : ''; ?>">
                <img src="<?php echo $pathToRoot; ?>assets/icons/Dashboard/Setting.svg" alt="Settings" class="sidebar-icon-svg">
                <span>Settings</span>
            </a>
        </li>
        -->
    </ul>
</aside>
