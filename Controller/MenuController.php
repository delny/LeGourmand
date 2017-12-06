<?php

class MenuController extends Controller
{
    public function menu()
    {
        $productType = $this->getProductTypeManager()->find($_GET['id']);
        $products = $this->getProductManager()->findByType($productType);

        //retourne vue
        $this->renderView('menu',[
            'products' => $products,
            'productType' => $productType,
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