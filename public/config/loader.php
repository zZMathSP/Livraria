<?php

function __autoload($class_name) {
    $class_name = str_replace("_", "/", $class_name).".php";
    require_once $class_name;
}