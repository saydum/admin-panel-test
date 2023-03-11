<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;


$dotenv = new Dotenv();
$dotenv->load('../.env');

var_dump($_ENV['TEST']);