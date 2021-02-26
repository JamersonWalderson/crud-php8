<?php

use App\Controller\TaskController;
$controller = new TaskController;

if (isset($_POST['task'])) {
    $request_task = isset($_POST['task']);
    
    if ($controller->insertController($request_task)) {
        header('Location: index');
    }
}

?>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <textarea class="form-control" name="task" id="message-text"></textarea>
            <button type="submit" class="btn btn-success">Concluír</button>
            <a  href="/index" class="btn btn-secondary">Cancelar</a>
        </form>

    </div>
  </div>
</div>
