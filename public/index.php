<?php
declare(strict_types=1);

use App\DbConnection;

require_once '../vendor/autoload.php';
$config = include '../config/database.php';

$pdo = new DbConnection($config);
