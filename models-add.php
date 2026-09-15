<?php
// Durrun Partner Portal - Add / Edit Model Entry Point
$query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: view/pages/addpages.php' . $query);
exit;
