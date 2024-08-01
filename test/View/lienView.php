<?php
/**
 * [Description lienView]
 * Extension de View qui gère les actions reçu du Controller
 * lienView permet de les actions d'affichage spécifique à la page lien
 */
class lienView extends View {
    
    public function lienDisplay() {
        $page = searchHTML("liens");
        return $page;
    } 
  
}
?>
