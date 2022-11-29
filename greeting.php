<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// require_once __DIR__.'/Greeting/En/Hi.php';
require_once __DIR__.'/vendor/autoload.php';

use Greeting\En\Hi;

new Hi();