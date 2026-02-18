<?php
// Détermine la base URL du projet par rapport au DocumentRoot.
// Résultat : '' (si le projet est à la racine du vhost) ou '/babi-location-web'
$projectRoot = realpath(__DIR__ . '/..');
$docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : null;
$base = '';
if ($docRoot && $projectRoot) {
    $base = str_replace('\\', '/', str_replace($docRoot, '', $projectRoot));
    $base = $base === '' ? '' : '/' . trim($base, '/');
}
$base_url = $base;

?>
