<?php

class HomeController extends Controller
{
    public function home()
    {
        //appel du manager
        $productManager = new ProductManager();

        $products = $productManager->findAll();

        //retourne vue
        require('View/vueAccueil.php');
        $this->render([
                'titre' => $titre,
                'contenu' => $contenu,
            ]);
    }
}
