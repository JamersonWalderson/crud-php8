<?php

namespace App\Model;

use App\Model\Database;

class TaskModel
{
    private $database;
    
    public function insertModel($param_task)
    {
        try{
            $database = new Database;
            $database->connect();

            $query = "INSERT INTO to_do_list(task) VALUES(:task)";
            $stmt = $this->database->prepare($query);
            $stmt->bindParam(':task', $param_task);
            return $stmt->execute();

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