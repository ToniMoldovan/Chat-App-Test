<?php
// Create a Database singleton class

namespace App\core;
use PDO;

class Database
{
    private $host = 'mysql'; # This is the name of the service in docker-compose.yml
    private $db_name = 'chat_app_test';
    private $username = 'admin';
    private $password = 'admin';

    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $data = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4";
        $this->connection = new PDO($data, $this->username, $this->password);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}