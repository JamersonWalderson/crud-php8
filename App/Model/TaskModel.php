<?php

namespace App\Model;

use App\Model\Database;

class TaskModel
{
    private $database;

    public function __construct()
    {
        
    }

    public function insertModel($param_task)
    {
        try{
            $this->database = new Database;

            $this->database->connect();
            $query = "INSERT INTO to_do_list(task) VALUES('asds')";
            /**
            $stmt = $database->prepare($query);
            $stmt->bindParam(':task', $param_task);
            */
            return $this->database->execute($query);

        } catch(PDOException $e) {
            die("Erro: $query" .$e->getMessege());

        }
    }
    public function selectModel()
    {
        
    }
    public function updateModel()
    {
        
    }
    public function deleteModel()
    {
        
    }

}
?>