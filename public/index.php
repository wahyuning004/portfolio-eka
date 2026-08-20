<?php
// Smart fallback for local Laragon / PHP artisan serve
$distPath = __DIR__ . '/../dist/index.html';
$indexPath = __DIR__ . '/../index.html';

if (file_exists($distPath)) {
    echo file_get_contents($distPath);
    exit;
}

if (file_exists($indexPath)) {
    $content = file_get_contents($indexPath);
    // Replace script module path for standalone preview
    echo $content;
    exit;
}

echo "<h1>Vite App Ready</h1><p>Run 'npm run dev' or 'npm run build' to launch.</p>";
