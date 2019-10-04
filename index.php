<?php
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

use BJ\Core\Config;
use BJ\Core\Router;

Config::init();
Router::start();