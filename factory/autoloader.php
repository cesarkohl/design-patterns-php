<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function (String $class) {
    $sourcePath = __DIR__ . DIRECTORY_SEPARATOR;
    $replaceRootPath = str_replace('FactoryMethod', $sourcePath, $class);
    $replaceDirectorySeparator = str_replace('\\', DIRECTORY_SEPARATOR, $replaceRootPath);
    $filePath = $replaceDirectorySeparator . '.php';
    if (file_exists($filePath)) {
        require($filePath);
    }
});