<?php

class ErrorController extends Controller
{
    public function error($error)
    {
        //on definit la vue et on retourne le resulat
        require('View/vueErreur.php');
        $this->render([
                'titre' => $titre,
                'contenu' => $contenu,
            ]);
    }
}
