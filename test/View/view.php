<?php
/**
 * [Description View]
 * Permet de gérer les différentes action envoyée dans les viewer :
 * - display : affichage du footer et de la page html
 * - searchHTML : créé le chemin ($chemin) permettant d'obtenir les fichiers HTML
 */
abstract class View {
/**
     * $page
     *
     * @var string code html de la page
     * @access protected
     */
    protected $page;
    protected $view;

    /**
     * __construct
     * affichage du header et du nav
     */
    public function __construct() {
        $this->page = $this->searchHTML("header");
        $this->page .= $this->searchHTML("nav");
    }
    public function console($log) {
      echo '<script>';
      echo "console.log('$log');";
      echo '</script>';
    }
    /**
     * display
     * affichage de la page concerné et du footer
     */
    public function display() {
        $view = (isset($_GET["page"]))?$_GET["page"]:"home";
        $viewView = $view."View";
        $view = $view."Display";
        $this->$viewView = new $viewView();
        $this->page .= $this->console($viewView);
        $this->page .= $this->console($view);
        $this->page .= $this->$view();
        $this->page .= $this->searchHTML("footer");
        echo $this->page;
    }

    /**
     * searchHTML
     * créé le chemin ($chemin) permettant d'obtenir les fichiers HTML suivant :
     * - header :  pour l'affichage du header
     * - nav :  pour l'affichage de la navigation
     * - footer : pour l'affichage du footer
     * 
     * @param string $fichier
     * @return $chemin
     */
    public function searchHTML($fichier) {
        $chemin = file_get_contents("View/html/".$fichier.".html");
        return $chemin;
    }   
    

}
?>
