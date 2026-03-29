<?php

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

var_dump($path);

include 'public/views/index.html';
include 'public/views/dashboard.html';