<?php
require 'View/homeView.php';
require 'Model/homeModel.php';

/**
 * [Description homeController]
 * Extension de Controller qui gère les actions
 * homeController permet de construire le Model et le View,
 * et de gérer les actions spécifique à la page home
 */

class homeController extends Controller {
    
    public function __construct() {
        $this->view = new homeView();
        $this->model = new homeModel();
    }
    
}
?>
