<?php

namespace App\Model;

use App\Model\Db;
use PDO;

class TaskModel
{
    private $database;

    public function __construct()
    {
        $this->database = Db::connect();
    }

    public function insertModel($param_task)
    {
        try{
            $query = "INSERT INTO to_do_list(task) VALUES(:task)";

            $stmt = $this->database->prepare($query);
            $stmt->bindParam(':task', $param_task);
            return $stmt->execute();

        } catch(PDOException $e) {
            die("Erro $query" .$e->getMessege());

        }
    }
    public function selectModel()
    {
        try{
            $query = "SELECT * FROM to_do_list";

            $stmt = $this->database->prepare($query);
            $stmt->execute();

            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $array;

        } catch(PDOException $e) {
            die("Erro: $query" .$e->getMessege());
        }
    }
    public function findModel($param_id)
    {
        try{
            $query = "SELECT * FROM to_do_list WHERE id = :id";

            $stmt = $this->database->prepare($query);
            $stmt->bindParam(":id", $param_id);
            $stmt->execute();

            return $row = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            die("Erro: ".$e->getMessege());

        }


    }
    public function updateModel($param_id, $param_task)
    {
        try{
        $query = "UPDATE to_do_list SET task = :task WHERE id = :id";
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(":id", $param_id);
        $stmt->bindParam(":task", $param_task);
        return $stmt->execute();

        } catch(PDOException $e) {
            die("Erro: ".$e->getMessege());

        }
    }
    public function deleteModel($param_task)
    {
        try{
            $query = "DELETE FROM to_do_list WHERE id = :id";
            $stmt = $this->database->prepare($query);
            $stmt->bindParam(":id", $param_task);
            return $stmt->execute();

        } catch(PDOExcepton $e) {
            die("Erro: " .$e->getMessege());

        }    
    }

}
?>