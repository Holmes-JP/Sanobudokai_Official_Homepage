<?php
// Base path for running under a subdirectory. Leave empty for domain root.
$basePath = getenv('APP_BASE_PATH') ?: '';
$basePath = trim($basePath);
if ($basePath !== '' && $basePath[0] !== '/') {
    $basePath = '/' . $basePath;
}
$basePath = rtrim($basePath, '/');
