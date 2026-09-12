<?php
/**
 * Path configuration file for Durrun Partner Portal
 * Matches the project structure in EKLevel
 */

// Define absolute root directory
if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', __DIR__ . '/');
}

// Automatically determine relative path to project root based on current script location
if (!isset($pathToRoot)) {
    $scriptDir = str_replace('\\', '/', realpath(dirname($_SERVER['SCRIPT_FILENAME'] ?? __FILE__)));
    $rootDir = str_replace('\\', '/', realpath(__DIR__));
    
    $relative = trim(str_replace($rootDir, '', $scriptDir), '/');
    if ($relative === '') {
        $pathToRoot = './';
    } else {
        $depth = count(explode('/', $relative));
        $pathToRoot = str_repeat('../', $depth);
    }
}
