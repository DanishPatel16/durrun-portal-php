<?php
// Legacy route redirect to view/models/modelslisting.php
$query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: ../models/modelslisting.php' . $query);
exit;
