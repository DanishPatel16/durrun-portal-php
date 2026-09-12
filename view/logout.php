<?php
/**
 * Logout handler - redirects to login.php
 */
require_once __DIR__ . '/../path.php';
header("Location: " . $pathToRoot . "login.php");
exit;
