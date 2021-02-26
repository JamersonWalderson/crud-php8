<?php

$i = null;

use App\Controller\TaskController;
$controller = new TaskController;

/**
 * Select
 */
$array = $controller->selectController();
/**
 * Delete
 */
if (isset($_REQUEST['action']) && $_REQUEST['action'] == "delete" && $_GET['id'] != '') {
  $request = $_GET['id'];

  if ($controller->deleteController($request)) {
    header('Location: index');

  }

}

?>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">

      <table class="table">
          <thead class="table-success">
              <tr>
              <th scope="col"></th>
              <th scope="col">Tarefa</th>
              <th scope="col">Ação</th>
              </tr>
          </thead>
          <tbody>
<?php 
          foreach($array as $value) {
            echo "
                <tr>
                  <th scope='row'>" .++$i. "</th>
                    <td>". $value['task']. "</td>
                    <td>
                      <a class='btn' href='update?id=".$value['id']."'><i class='bi bi-pencil'></i></a>
                      <a class='btn' href='?action=delete&id=".$value['id']."'><i class='bi bi-trash'></i></a>
                    </td>
                </tr>
                ";
            }
?>
          </tbody>
      </table>
    </div>
  </div>
</div>