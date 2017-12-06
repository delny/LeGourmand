<?php

class HomeController extends Controller
{
    public function home()
    {
        //appel du manager
        $productManager = new ProductManager();

        $products = $productManager->findAll();

        //retourne vue
        $this->renderView('accueil',[
            'products' => $products,
        ]);
    }
}
