<?php

spl_autoload_register(function ($class) {
    $path = str_replace('/', '\\', $class) . ".php";
    include $path;
});