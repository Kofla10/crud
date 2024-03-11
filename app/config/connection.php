<?php

class Connection {
    public $host       = 'localhost';
    public $db         = 'crud';
    public $port       = '5432';
    public $user       = 'postgres';
    public $password   = '';
    public $driver     = 'pgsql'; // corrected driver name
    public $drivermysl = 'mysql'; // to connection with mysql
    public $connect;

    public static function getConnection(){ // corrected method name
        try {
            $connection = new Connection();
            $connection->connect = new PDO("{$connection->driver}:host={$connection->host};port={$connection->port};dbname={$connection->db}", $connection->user, $connection->password);

            $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connection success";

        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }
}

// Connection::getConnection(); // corrected method name
