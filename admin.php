<?php

use core\engine\startup;

// error reporting 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
require_once './core/engine/startup.php';

// startup call when url intialize
$router = new startup();
