<?php
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load('../.env');

return [
    'dsn' => "{$_ENV['DRIVER']}:host={$_ENV['DB_HOST']}; dbname={$_ENV['DB_NAME']}; charset={$_ENV['CHARSET']}",
    'username' => "{$_ENV['USER_NAME']}",
    'password' => "{$_ENV['PASSWORD']}",
];