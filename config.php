<?php
define("BASE_DIR", dirname(__FILE__));
define("BASE_URL", "http://localhost/amzpm/");
$config['dbname'] = 'amzpm';
$config['host'] = 'localhost';
$config['dbuser'] = 'root';
$config['dbpass'] = '';
global $db;
try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
