<?php
require "Controller/controller.php";
require "Model/model.php";
require "View/view.php";

require "Controller/homeController.php";
require "Controller/lienController.php";
// require "Controller/XController.php";


$dispatcher = new Dispatcher();
$dispatcher->dispatch();

/**
 * [Description Dispatcher]
 * 
 * Permet de gérer les différentes pages :
 * controller étant la table de réference 
 * - home (page d'accueil)
 * action étant l'action entreprise sur cette table
 * - display (affichage)
 */
class Dispatcher {
    /**
     * dispatch 
     * créé une action pour le controller approprié
     * stocké dans $my_controller
     *
     * @param [type string] $_GET["page"] ou par défaut  "home"
     * @param [type string] $_GET["action"] ou par défaut "display"
     * @return [type string] $action dans $controller
     */
    public function dispatch() {
        $controller = (isset($_GET["page"]))?$_GET["page"]:"home";
        $controller = $controller."Controller";

        $action = (isset($_GET["action"]))?$_GET["action"]:"display";
        $action = $action."Action";

        if(!class_exists($controller) || !method_exists($controller, $action)){
            $controller = 'homeController';
            $action = 'displayAction';
        }

        $my_controller = new $controller();
        $my_controller->$action();
    }
}
?>
