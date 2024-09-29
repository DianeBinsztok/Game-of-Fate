<?php
define('REQUEST_URI', str_replace(dirname($_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']));



switch (REQUEST_URI) {
    case '/':
        require "homepage.php";
        break;

    case '/card':
        require "single-card.php";
        break;

    default:
        echo "La page n'existe pas";
}
