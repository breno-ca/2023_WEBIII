<?php

spl_autoload_register(function ($class) {
    // Get directory
    $base_dir = __DIR__ . '/';

    // Get classpath
    $file = $base_dir . str_replace('\\', '/', $class . '.php');

    // Class require
    if (file_exists($file)) {
        require_once $file;
    }
});
