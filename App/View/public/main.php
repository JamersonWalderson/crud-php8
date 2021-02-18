<?php

use App\Controller\TaskController;

$controller = new TaskController;

if (isset($_POST['task'])) {
  $controller->insertController($_POST);
  echo ":enviado ao controller<br>";

} else {
  echo "ocorreu algum erro ao enviar para o controller";

}


?>

<div class="container">
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Tarefa</th>
        <th scope="col">Situação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <th scope="row">1</th>
            <td>lavar roupa</td>
            <td>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate" type="submit">Editar</button>
              <button class="btn btn-danger" type="submit">Apagar</button>
            </td>
        </tr>
        <tr>
          <th scope="row">2</th>
            <td>lavar roupa</td>
            <td>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate" type="submit">Editar</button>
              <button class="btn btn-danger" type="submit">Apagar</button>
            </td>
        </tr>
        <tr>
          <th scope="row">3</th>
            <td>lavar roupa</td>
            <td>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate" type="submit">Editar</button>
              <button class="btn btn-danger" type="submit">Apagar</button>
            </td>
        </tr>
    </tbody>
    </table>
</div>

<!-- Modal: create-->
<div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Escreva a nova tarefa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
            <textarea class="form-control" name="task" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Concluír</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal: update -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar tarefa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="GET">
          <div class="mb-3">
            <textarea class="form-control" name="task" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Concluír</button>
        </form>
      </div>
    </div>
  </div>
</div>