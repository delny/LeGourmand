<?php

class ProductManager extends DatabaseManager
{
    /**
     * @var PDO
     */
    private $bdd;

    /**
     * @var ProductTypeManager
     */
    private $productTypeManager;

    /**
     * ProductManager constructor.
     */
    public function __construct()
    {
        $this->bdd = parent::getBDD();
        $this->productTypeManager = new ProductTypeManager();
    }

    /**
     * @param ProductType $productType
     * @return array
     */
    public function findByType(ProductType $productType)
    {
        $sql = $this->bdd->prepare('SELECT * FROM product WHERE prdct_type_id = :id');
        $sql->bindValue(':id',$productType->getId());
        $sql->execute();
        $results = $sql->fetchAll();

        //conversion en tableau d'objets
        $products = [];
        foreach ($results as $result)
        {
            $productId = $result['prdct_id'];
            $products[$productId] = $this->buildObject($result);
        }
        return $products;
    }

    /**
     * @return array
     */
    public function findAll()
    {
        $sql = $this->bdd->prepare('SELECT * FROM product');
        $sql->execute();
        $results = $sql->fetchAll();

        //conversion en tableau d'objets
        $products = [];
        foreach ($results as $result)
        {
            $productId = $result['prdct_id'];
            $products[$productId] = $this->buildObject($result);
        }
        return $products;
    }


    /**
     * @param array $row
     * @return Product
     */
    public function buildObject(Array $row)
    {
        $product = new Product();
        $product->setId($row['prdct_id'])
            ->setNom($row['prdct_nom'])
            ->setDescription($row['prdct_description'])
            ->setPrixMin($row['prdct_prix_min'])
            ->setPrixMax($row['prdct_prix_max']);

        if(array_key_exists('prdct_type_id',$row))
        {
            $productTypeId = $row['prdct_type_id'];
            $productType = $this->productTypeManager->find($productTypeId);
            $product->setType($productType);
        }

        return $product;
    }
}