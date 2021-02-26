<?php


/** 
 * Autoload
 * */
require_once 'App\Psr4Autoloader.php';
$loader = new Psr4Autoloader();
// Register loader with SPL autoloader stack.
$loader->register();
// Adds a base directory for a namespace prefix.
$loader->addNamespace('App', 'App');


//Loading configurations
require_once 'config.php';



/* Template */
require_once 'App/View/template/header.php';
require_once 'App/View/template/footer.php';
/*/Template */

//Home page
//require_once 'index.php';

//Routes
require_once 'routes.php';


use App\Controller\TaskController;


$t = new TaskController();

?>
