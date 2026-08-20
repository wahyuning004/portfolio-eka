<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Prepare writable directories in /tmp for Vercel serverless environment
$tmpDirectories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/bootstrap/cache',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
];

foreach ($tmpDirectories as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Global environment overrides for Vercel serverless runtime
$envVars = [
    'APP_ENV' => 'production',
    'APP_KEY' => 'base64:6kYV90vXwYy6zG1E8a4xQ2uN9mP8kL7jH5gF3dS1aA0=',
    'APP_DEBUG' => 'false',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => ':memory:',
];

foreach ($envVars as $key => $val) {
    putenv("{$key}={$val}");
    $_ENV[$key] = $val;
    $_SERVER[$key] = $val;
}

require __DIR__ . '/../public/index.php';

