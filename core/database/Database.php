<?php
namespace App\Core\Database;

class Database
{
    public $mysql;

    public function __construct(array $config)
    {
        $host = $config['host'] ?? '';
        $username = $config['username'] ?? '';
        $password = $config['password'] ?? '';
        $database = $config['database'] ?? '';
        $this->mysql = mysqli_connect($host, $username, $password, $database);
    }
}
