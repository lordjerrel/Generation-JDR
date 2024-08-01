<?php
/**
 * [Description Controller]
 * Permet de gérer les différentes action envoyée dans les controller :
 * - display (affichage)
 */

abstract class Controller {
    /**
     * $view
     *
     * @var /XView
     * @access protected
     */
    protected $view;
    /**
     * $model
     *
     * @var /XModel
     * @access protected
     */
    protected $model;

    public function displayAction() {
        $this->view->display();
    }
}
?>
