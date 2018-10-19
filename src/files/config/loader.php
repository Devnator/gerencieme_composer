<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

(new Dotenv(__DIR__ . '/../'))->load();

$rootUrlEnv = getenv('ROOT_URL');

if ($rootUrlEnv) {
    define('ROOT_URL', $rootUrlEnv);
} else {
    define('ROOT_URL', sprintf('http://%s/', $_SERVER['HTTP_HOST']));
}