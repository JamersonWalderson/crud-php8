<?php

use App\Controller\TaskController;
$controller = new TaskController;

if (isset($_GET['id'])) {
    $request_id = $_GET['id'];
    $findId = $controller->findController($request_id);

}
if (isset($_GET['task'])) {
    $task = $_GET['task'];
    $request_id = $_GET['id'];
    if ($controller->updateController($request_id, $task)) {
        $_SESSION['alert'] = "Atualizado com sucesso";
        header('Location: index');
        
    }
}


?>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
        <textarea class="form-control" name="task" id="message-text"><?php echo $findId['task']; ?></textarea>
        <input type="hidden" name="id" value="<?php echo $request_id; ?>">

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a  href="/index" class="btn btn-secondary">Cancelar</a>
    </form>

    </div>
  </div>
</div>
