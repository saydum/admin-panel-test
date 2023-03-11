<?php
// declare(strict_types=1);

namespace App;

use PDO;
use PDOException;

class DbConnection
{
    static private $pdoInstance;

    public function __construct(array $config)
    {
        if (!self::$pdoInstance) {

            try {
                self::$pdoInstance = new PDO(
                    $config['dsn'],
                    $config['username'],
                    $config['password'],
                );

            } catch (PDOException $e) {
                die("PDO CONNECTION ERROR: " . $e->getMessage() . "\n");
            } finally {
                self::$pdoInstance = null;
            }

        }

        return self::$pdoInstance;
    }
}