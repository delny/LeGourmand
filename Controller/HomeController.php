<?php

class HomeController extends Controller
{
    public function home()
    {
        //retourne vue
        require('View/vueAccueil.php');
        $this->render([
                'titre' => $titre,
                'contenu' => $contenu,
            ]);
    }
}
