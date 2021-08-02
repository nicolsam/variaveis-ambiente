<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Common\Environment;

Environment::load(__DIR__);

$env = getenv();

echo getenv('DB_HOST') . "\n";
echo getenv('DB_USER') . "\n";
echo getenv('DB_PASSWORD') . "\n";