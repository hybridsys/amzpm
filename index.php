<?php

session_start();
require 'config.php';
require __DIR__ . '/vendor/autoload.php';
$core = new Core\Core();
$core->run();
