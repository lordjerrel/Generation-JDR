<?php
require 'View/lienView.php';
require 'Model/lienModel.php';

/**
 * [Description lienController]
 * Extension de Controller qui g�re les actions
 * lienController permet de construire le Model et le View,
 * et de g�rer les actions sp�cifique � la page lien
 */

class lienController extends Controller {
    
    public function __construct() {
        $this->view = new lienView();
        $this->model = new lienModel();
    }
}
?>
