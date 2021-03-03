<?php

namespace App\Controller;

use App\Model\TaskModel;
use App\Scripts\Message;

class TaskController
{
    private $model = null;
    private $msg = null;

    public function __construct()
    {
        $this->model = new TaskModel;
        $this->msg = new Message;
    }
    public function insertController($task)
    {
        $task = $_POST['task'];
        $this->model->insertModel($task);
        return header('Location: index');
        
    }
    public function selectController()
    {
        return $this->model->selectModel();

    }
    public function findController($param_id)
    {
        $param_id = $_GET['id'];
        return $this->model->findModel($param_id);

    }
    public function updateController($param_id, $param_task)
    {
        $param_id = $_GET['id'];
        $param_task = $_GET['task'];
        return $this->model->updateModel($param_id, $param_task);
        
    }
    public function deleteController($param_id)
    {
        $param_id = $_GET['id'];
        $this->model->deleteModel($param_id);
        return header('Location: index');
    
    }

}

?>