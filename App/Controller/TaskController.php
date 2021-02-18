<?php

namespace App\Controller;

use App\Model\TaskModel;

class TaskController
{
    public function __construct()
    {
        $this->model = new TaskModel;

    }
    public function insertController($task)
    {
        $task = $_POST['task'];
        $this->model->insertModel($task);
        
    }
    public function selectController()
    {
        
    }
    public function updateController()
    {
        
    }
    public function deleteController()
    {
        
    }

}
?>