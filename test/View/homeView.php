<?php
/**
 * [Description homeView]
 * Extension de View qui gère les actions reçu du Controller
 * homeView permet de les actions d'affichage spécifique à la page home
 */
class homeView extends View {

    public function homeDisplay() {
        $page = "Test";
        return $page;
    }    
  
}
?>
