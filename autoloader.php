<?php

function loadClasses($class) {
    $path = __DIR__ . '/';
    $className = str_replace('\\', '/', $class);
    require_once $path . $className .'.php';
}

spl_autoload_register('loadClasses');