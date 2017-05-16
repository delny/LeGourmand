<?php

class MenuController extends Controller
{
    public function menu()
    {
        $productType = $this->getProductTypeManager()->find($_GET['id']);
        $products = $this->getProductManager()->findByType($productType);

        //retourne vue
        require('View/vueMenu.php');
        $this->render([
            'titre' => $titre,
            'contenu' => $contenu,
        ]);
    }

    /**
     * @return ProductManager
     */
    private function getProductManager()
    {
        return new ProductManager();
    }

    /**
     * @return ProductTypeManager
     */
    private function getProductTypeManager()
    {
        return new ProductTypeManager();
    }
}