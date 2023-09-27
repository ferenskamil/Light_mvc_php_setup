<?php


namespace App\Model;

use App\Config\DbConfig;
use PDO;
use PDOException;
use Exception;


class Database {
        private static $instance;
        private $connection;

        public function __construct()
        {
            // Get credencials to connect with DB
            $config = new DbConfig;
            $hostname = $config->getHostname();
            $dbName = $config->getDbName();
            $username = $config->getUsername();
            $password = $config->getPassword();

            try {
                $this->connection = new PDO(
                    dsn: "mysql:host={$hostname};dbname={$dbName};charset=utf8",
                    username: $username,
                    password: $password,
                    options: [
                        PDO::ATTR_EMULATE_PREPARES => false,
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                );
            } catch (PDOException $e) {
                    // throw new Exception($e->getMessage());
                    throw new Exception("Database connection error");
            }
        }

        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new Database();
            }
            return self::$instance;
        }

        public function getConnection() {
            return $this->connection;
        }
}
