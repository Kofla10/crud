<?php

class Connection {
    public $host       = 'localhost';
    public $db         = 'crud';
    public $port       = '5432';
    public $user       = 'postgres';
    public $password   = '';
    public $driver     = 'pgsql'; // corrected driver name
    public $connect;

    public static function getConnection(){ // corrected method name
        try {
            $connection = new Connection();
            $connection->connect = new PDO("{$connection->driver}:host={$connection->host};port={$connection->port};dbname={$connection->db}", $connection->user, $connection->password);

            $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connection->connect; // Return the PDO connection

        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
            return null;
        }
    }
}
