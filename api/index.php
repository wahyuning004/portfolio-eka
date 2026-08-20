<?php

// Forward Vercel requests to public/index.php with tmp view storage support
$_ENV['APP_ENV'] = $_ENV['APP_ENV'] ?? 'production';
$_ENV['APP_KEY'] = $_ENV['APP_KEY'] ?? 'base64:6kYV90vXwYy6zG1E8a4xQ2uN9mP8kL7jH5gF3dS1aA0=';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';

require __DIR__ . '/../public/index.php';
