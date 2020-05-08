<?php

// ici, on va créer notre premier contrôleur


class MainController {
    // et là, notre première méthode, celle de la home
    public function home() {
        // l'action home... affiche la page home :-)
        $this->show('home');
    }

    // tapez ces 3 lignes, sauvegardez et allez jeter un oeil à public/apropos => ça marche !
    public function about() {
        // l'action about... affiche la page about :-)
        $this->show('about');
    }

    // celle-ci, on serait tenté de l'appeler 404() mais un nom de méthode ne peut pas commencer par un chiffre ;-)
    public function err404() {
        // bref, vous voyez le truc
        $this->show('404'); // attention, il n'y a aucune obligation de faire correspondre les noms de méthode et les noms de vue, faîtes simplement attention à ne pas appeler une vue qui n'existe pas
    }

    // marre des echo ! Affichons du HTML
    // et donnons à notre méthode la possibilité de choisir ce qu'on affiche
    // hep hep hep, minute papillon ! private ? pourquoi ?
    // pour qu'on ne puisse pas appeler cette méthode depuis autre part que l'intérieur de ce contrôleur. Après tout, elle n'existe que pour que les actions puissent facilement déléguer la partie "affichage de la réponse" au visiteur
    private function show($viewName) {
        // après découpage, les fichiers .tpl.php ne contiennent plus que le contenu spécifique de la page => pratique et léger :-)
        require __DIR__."/../views/header.part.php";
        require __DIR__."/../views/$viewName.tpl.php";
        require __DIR__."/../views/footer.part.php";
    }
}