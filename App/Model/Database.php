<?php

namespace App\Model;
use \PDO;

class Database {

    public function connect()
    {
        try{
            $pdo = new PDO('mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASS);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
        } catch(PDOException $e){
            die("ERROR: " . $e->getMessage());
        }

    }
    public function disconnect()
    {
        unset($pdo);
    }

}
?>