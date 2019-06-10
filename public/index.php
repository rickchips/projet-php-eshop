<?php
require dirname(__DIR__) . '/autoload.php';
// Appel du routeur
use src\Utilities\Router;
// On ajoute les routes
$router = new Router();
$router->addRoute('/', 'index.php');
$router->addRoute('', 'index.php');
$router->addRoute('/admin', 'admin.php');
// On souhaite récupérer le fichier à exécuter
$template = $router->match();
if(is_null($template)) {
    throw new \Exception('Page introuvable');
} else {
    require dirname(__DIR__) . "/templates/" . $template;
}