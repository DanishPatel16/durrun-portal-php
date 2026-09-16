<?php
// Legacy route redirect to view/models/addmodels.php
$query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
header('Location: ../models/addmodels.php' . $query);
exit;
